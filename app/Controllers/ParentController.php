<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\KidsModel;
use App\Models\AdminModel;
use App\Models\ParentsModel;
use App\Models\ForumModel;
use App\Models\UploadModel;
use App\Models\CommentModel;
use CodeIgniter\I18n\Time;
use Prophecy\Exception\Prediction\AggregateException;


class ParentController extends BaseController
{
    public function index()
    {
        session();
        $parents=new ParentsModel();
        $kids=new KidsModel();
        $data['parent']=$parents->where('parent_id', $_SESSION['user_id'])->first();
        $data['kids']=json_decode(json_encode($kids->join('parents','parents.parent_id=kids.parent')->whereIn('kids.is_deleted',[0])->whereIn('kids.parent',[$_SESSION['user_id']])->paginate()), true); 
        return view('Parents/parentshome',$data);
    }
    public function view_profile($id){
        $kids=new KidsModel();
        $forums= new ForumModel();
        $comments=new CommentModel();
        $data['user']='kid';
        $data['comments']=json_decode(json_encode($comments->join('forum','forum_id=comments.forum')->whereIn('commentor', [$id])->paginate()),true);
        $data['forum']=json_decode(json_encode($forums->whereIn('forum.initiator',[$id])->join('kids','kids.kid_id=forum.initiator')->paginate()),true);
        $data['kid']=$kids->where('kid_id', $id)->first();
        return view('Parents/viewchild',$data);

    }
    public function useradd()
    {
        return view('Parents/addchild');
    }
    public function add()
    {
        session();
        $parent=new ParentsModel();
        $child=new KidsModel();
        $parent_email=$_SESSION['email'];
        $parentdets=$parent->where('parent_email', $parent_email)->first();    
        if($parentdets!=null){
            $password='kid1234';
            $data=[
                'kid_name'=>$this->request->getPost('kidname'),
                'kid_email'=>$this->request->getPost('email'),
                'age'=>$this->request->getPost('age'),
                'gender'=>$this->request->getPost('gender'),
                'parent'=>$parentdets['parent_id'],
                'password'=>$password,
                'kid_role'=>3
                ];
                $child->save($data);
                return redirect()->to('parenthome')->with('status','A New Child Has Been Added Succesfully');

        }else{
            return redirect()->to('users')->with('status','Error:User has not been added! Parent does not exists');
        }        
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
            
            if($child->update($id,$newData)){
            return redirect()->to('parenthome')->with('status','Child Has Been Deleted');
            }
        }
 
    }


}

