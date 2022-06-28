<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\KidsModel;
use App\Models\AdminModel;
use App\Models\ParentsModel;
use App\Models\ForumModel;
use App\Models\UploadModel;
use App\Models\CommentModel;
use App\Models\PuzzleModel;
use App\Models\QuizModel;
use Prophecy\Exception\Prediction\AggregateException;
use Carbon\Carbon;
use CodeIgniter\I18n\Time;
use DateTime;



class AdminController extends BaseController
{
    
    public function index()
    {
        $kids=new KidsModel();
        $data['kid']=json_decode(json_encode($kids->whereIn('kids.is_deleted',[0])->orderBy('month(created_at)','asc')->paginate()), true);
        $femalecount=0;
        $malecount=0;
         foreach($data['kid'] as $item){
            $timecreate=  new Time($item['created_at']);
            $m=$timecreate->getMonth();
            $dateObj = DateTime::createFromFormat('!m', $m);
            $monthName = $dateObj->format('F');
            $months[]=$monthName;
            $mymonths=[];
            $monthCount=array();
            $monthdata=array();
            if($item['gender']=='female'){
                $femalecount++;
            }else{
                $malecount++;
            }
         }
         $genderstats=array($malecount, $femalecount);
         
         $count=0;
         foreach($months as $key=>$value){
             if(!in_array($value,$monthCount)){
                $monthCount[]=$value;
                 $mymonths[$value]=1;
            }
             else{
                 $count=$mymonths[$value];
                 $count++;
                 $mymonths[$value]=$count;
             }

         }
         foreach($mymonths as $key =>$value){
             array_push($monthdata,$value);
         }
         return view('Admin/Frontend/Home/adminhome',['months'=>$monthCount,'monthcount'=>$monthdata,'genders'=>$genderstats] );



    }
    public function users()
    {
        $admin=new AdminModel();
        $kids=new KidsModel();
        $parent=new ParentsModel();
        $data['admins']=json_decode(json_encode($admin->whereIn('admin.is_deleted',[0])->paginate()),true);
        $data['kids']=json_decode(json_encode($kids->join('parents','parents.parent_id=kids.parent')->whereIn('kids.is_deleted',[0])->paginate()), true);
        $data['parents']=json_decode(json_encode($parent->whereIn('parents.is_deleted',[0])->paginate()), true);
        return view('Admin/Frontend/Users/index',$data);
    }
    public function useradd()
    {
        return view('Admin/Frontend/Users/add');
    }
    public function add($usertype)
    {
        $parent=new ParentsModel();
        $child=new KidsModel();
        $admin=new AdminModel();
        $encrypter = \Config\Services::encrypter();
        if($usertype=='admin'){
            $password='admin1234';
            $encryptpass=$encrypter->encrypt($password);
            $data=[
            'admin_name'=>$this->request->getPost('adminname'),
            'admin_email'=>$this->request->getPost('email'),
            'password'=>$encryptpass,
            'admin_role'=>1
            ];
            $admin->save($data);

        }
        elseif($usertype=='parent'){
            $password='parent1234';
            $encryptpass=$encrypter->encrypt($password);
            $data=[
                'parent_name'=>$this->request->getPost('parentname'),
                'parent_email'=>$this->request->getPost('email'),
                'password'=>$encryptpass,
                'parent_role'=>2
                ];
            $parent->save($data);
        }
        else{
            
            $parent_email=$this->request->getPost('parentemail');
            $parentdets=$parent->where('parent_email', $parent_email)->first();
            
            if($parentdets!=null){
                $password='kid1234';
                $encryptpass=$encrypter->encrypt($password);
                $data=[
                    'kid_name'=>$this->request->getPost('kidname'),
                    'kid_email'=>$this->request->getPost('email'),
                    'age'=>$this->request->getPost('age'),
                    'gender'=>$this->request->getPost('gender'),
                    'parent'=>$parentdets['parent_id'],
                    'password'=>$encryptpass,
                    'kid_role'=>3
                    ];
                    $child->save($data);
            }else{
                return redirect()->to('users')->with('status','Error:User has not been added! Parent does not exists');
            }

        }
        return redirect()->to('users')->with('status','A New User Has Been Added Succesfully');
        
    }
    public function delete($id,$role)
    {  
        $parent=new ParentsModel();
        $child=new KidsModel();
        $admin=new AdminModel();    
        $session = session();
        if($role==3){
            $newData = [
                'is_deleted'    => 1 ,
            ];
            $child->update($id,$newData);
            return redirect()->to('users')->with('status','User Has Been Deleted');
        }
        elseif($role==1){ 
            if($_SESSION['user_id']==$id){
                $newData = [
                    'is_deleted'    => 1 ,
                ];
                $admin->update($id,$newData);
                $session->destroy();
                //return redirect()->to(//login page);
            }else{
                $newData = [
                    'is_deleted'    => 1 ,
                ];
                $admin->update($id,$newData);
                return redirect()->to('users')->with('status','User Has Been Deleted');
            }
        }
        else{
            $children=json_decode(json_encode($child->whereIn('parent', [$id])->whereIn('is_deleted',[0])->paginate()),true);
            $newData = [
                'is_deleted'    => 1 ,
            ];
            if($children!=null){
                foreach ($children as $item){ 
                    $child->update($item['kid_id'],$newData);
                }
                $parent->update($id,$newData);
                return redirect()->to('users')->with('status','User Has Been Deleted');
            }else{
                $parent->update($id,$newData);
            }
        } 
        return redirect()->to('users')->with('status','User Has Been Deleted');
 
    }
    public function edit($id,$usertype){
        $parent=new ParentsModel();
        $child=new KidsModel();
        $admin=new AdminModel(); 
        if($usertype==1){
            $data['formtype']="admin";
            $data['user']=json_decode(json_encode($admin->whereIn('admin_id', [$id])->paginate()),true);
        }
        elseif($usertype==2){
            $data['formtype']="parent";
            $data['user']=json_decode(json_encode($parent->whereIn('parent_id', [$id])->paginate()),true);

        }
        else{
            $data['formtype']="kid";
            $data['user']=json_decode(json_encode($child->join('parents','parents.parent_id=kids.parent')->whereIn('kid_id', [$id])->paginate()),true); 

        }
        return view('Admin/Frontend/Users/edit',$data);

    }
    public function update_user($usertype)
    {
        $parent=new ParentsModel();
        $child=new KidsModel();
        $admin=new AdminModel();
        $id=$this->request->getPost('user_id');
        if($usertype=='admin'){
            $data=[
            'admin_name'=>$this->request->getPost('adminname'),
            'admin_email'=>$this->request->getPost('email'),
            ];
            $admin->update($id,$data);

        }
        elseif($usertype=='parent'){
           
            $data=[
                'parent_name'=>$this->request->getPost('parentname'),
                'parent_email'=>$this->request->getPost('email'),
                ];
            $parent->update($id,$data);
        }
        else{
            
            $parent_email=$this->request->getPost('parentemail');
            $parentdets=$parent->where('parent_email', $parent_email)->first();
            
            if($parentdets!=null){
                $data=[
                    'kid_name'=>$this->request->getPost('kidname'),
                    'kid_email'=>$this->request->getPost('email'),
                    'age'=>$this->request->getPost('age'),
                    'gender'=>$this->request->getPost('gender'),
                    'parent'=>$parentdets['parent_id'],
                    ];
                    $child->update($id,$data);
            }

        }
        return redirect()->to('users')->with('status','User Has Been Updated');
        
    }
    public function forums()
    {
        $forums=new ForumModel();
        $comments=new CommentModel();
        $data['forum']=json_decode(json_encode($forums->whereIn('forum.is_deleted',[0])->whereIn('forum.flagged',[1])->join('kids','kids.kid_id=forum.initiator')->paginate()),true);
        $data['comments']=json_decode(json_encode($forums->join('comments','comments.forum=forum.forum_id')->whereIn('forum.flagged',[1])->whereIn('comments.comments_flagged',[1])->whereIn('comments.is_deleted',[0])->join('kids','kids.kid_id=forum.initiator')->paginate()),true);


        return view('Admin/Frontend/Forums/index',$data);
    }
    public function forumdetails($id)
    {
        $forums=new ForumModel();

        $comments=new CommentModel();
        $data['forum']=json_decode(json_encode($forums->whereIn('forum.forum_id',[$id])->join('kids','kids.kid_id=forum.initiator')->paginate()),true);
        $data['comments']=json_decode(json_encode($comments->whereIn('comments.forum',[$id])->whereIn('comments.is_deleted',[0])->join('kids','kids.kid_id=comments.commentor')->join('forum','comments.forum=forum.forum_id')->paginate()),true);

        return view('Admin/Frontend/Forums/forumdets',$data);
    }
    public function deleteforum($id)
    {
        $forums=new ForumModel();

        $comments=new CommentModel();
        $commnet_arr=json_decode(json_encode($comments->whereIn('forum', [$id])->whereIn('is_deleted',[0])->paginate()),true);
        $newData = [
            'is_deleted'    => 1 ,
        ];
        if($commnet_arr!=null){
            foreach ($commnet_arr as $item){ 
                $comments->update($item['comment_id'],$newData);
            }
            $forums->update($id,$newData);
            return redirect()->to('forums')->with('status','Forum has been Deleted');
        }else{
            $forums->update($id,$newData);
            return redirect()->to('forums')->with('status','Forum has been Deleted');

        }
    }
    public function deletecomment($id,$forum)
    {
        $comments=new CommentModel();
        $forum=new ForumModel();
        $newData = [
            'is_deleted'    => 1 ,
        ];
        $comments->update($id,$newData);

        return redirect()->to('forums')->with('status','Comment has been Deleted');
    }
    public function new_uploads()
    {
        return view('Admin/Frontend/Uploads/uploadhome');
    }
    public function uploadforms($formtype){
        if($formtype=="book"){
            $data['upload']='book';
        }else{
            $data['upload']='quiz';
        }
        return view('Admin/Frontend/Uploads/index',$data);

    }
    public function uploadinfo()
    {
        $model=new UploadModel();
        $banner=$this->request->getFile('book-image');
        $book=$this->request->getFile('book');
        

        if(($banner->isValid()&&!$banner->hasMoved())&&($book->isValid()&&!$book->hasMoved())){
            $newNameb=$banner->getRandomName();
            $banner->move('./upload',$newNameb);
            $newNamec=$book->getRandomName();
            $book->move('./upload',$newNamec);
        }
        else{
       
            echo'<script language="Javascript">';
            echo 'alert($this->upload->display_errors())';
            echo'</script>';

        }
        echo($newNamec);
        $data=['title'=>$this->request->getPost('title'),
        'book_description'=>$this->request->getPost('book_description'),
        'author'=>$this->request->getPost('author'),
        'publisher'=>$this->request->getPost('publisher'),
        'publish_year'=>$this->request->getPost('publish_year'),
        'book_image'=>$newNameb,
        'book'=>$newNamec
        ];

        if($model->save($data)){
            return redirect()->to('uploads')->with('status','Book has been successfully uploaded');
        }else{
            return redirect()->to('uploads')->with('status','Book has been unsuccessfully uploaded');

        }

    }
    public function uploadquizes()
    {
        $quiz=new QuizModel();
        $puzzle=new PuzzleModel();

        if($this->request->getPost('content')=='puzzle'){
            $banner=$this->request->getFile('fileupload');

            if(($banner->isValid()&&!$banner->hasMoved())){
                $newNameb=$banner->getRandomName();
                $banner->move('./upload',$newNameb);
            }
            else{
           
                echo'<script language="Javascript">';
                echo 'alert($this->upload->display_errors())';
                echo'</script>';
            }
            $data=['puzzle_name'=>$this->request->getPost('filename'),
            'puzzle'=>$newNameb
            ];
            if($puzzle->save($data)){
                return redirect()->to('uploads')->with('status','Puzzle has been successfully uploaded');
            }
            
        }else{
            $banner=$this->request->getFile('fileupload');

            if(($banner->isValid()&&!$banner->hasMoved())){
                $newNameb=$banner->getRandomName();
                $banner->move('./upload',$newNameb);
            }
            else{
           
                echo'<script language="Javascript">';
                echo 'alert($this->upload->display_errors())';
                echo'</script>';
            }
            $data=['quiz_name'=>$this->request->getPost('filename'),
            'quiz'=>$newNameb
            ];  
            if($quiz->save($data)){
                return redirect()->to('uploads')->with('status','Quiz has been successfully uploaded');
            }
        }

    }
    public function flagged_users()
    { 
        $kids=new KidsModel();
        $data['kids']=json_decode(json_encode($kids->join('parents','parents.parent_id=kids.parent')->whereIn('kids.is_deleted',[0])->whereIn('kids.flagged',[1])->paginate()), true);
        return view('Admin/Frontend/Flagged_users/index',$data);
    }
    public function view_profile($id,$usertype){
        $parent=new ParentsModel();
        $kids=new KidsModel();
        $forums= new ForumModel();
        $comments=new CommentModel();
        if($usertype==2){
            $data['user']='parent';
            $data['parent']=$parent->where('parent_id', $id)->first();
            $data['kids']=json_decode(json_encode($kids->join('parents','parents.parent_id=kids.parent')->whereIn('kids.is_deleted',[0])->whereIn('kids.parent',[$id])->paginate()), true); 
            return view('Admin/Frontend/Users/viewuser',$data);
 
        }else{
            $data['user']='kid';
            $data['comments']=json_decode(json_encode($comments->join('forum','forum_id=comments.forum')->whereIn('commentor', [$id])->paginate()),true);
            $data['forum']=json_decode(json_encode($forums->whereIn('forum.initiator',[$id])->join('kids','kids.kid_id=forum.initiator')->paginate()),true);
            $data['kid']=$kids->where('kid_id', $id)->first();
            return view('Admin/Frontend/Users/viewuser',$data);



        }
        
    }
}

