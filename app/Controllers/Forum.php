<?php

namespace App\Controllers;

use App\Models\ForumModel;
use App\Models\CommentModel;

class Forum extends BaseController
{
    public function index()
    {
      
        $forums=new ForumModel();

        $data['forum']=json_decode(json_encode($forums
            ->whereIn('forum.is_deleted',[0])
            ->join('kids','kids.kid_id=forum.initiator')->paginate()),true);

        return view('forum',$data);
    }
    public function addforum()
    {
        $forums=new ForumModel();
        session();

        $data=[
            'initiator'=>'4',
            'title'=>$this->request->getPost('title'),
            'genre'=>$this->request->getPost('genre'),
            'main_comment'=>$this->request->getPost('main_comment')
        ];

        $forums->save($data);
       
        return redirect()->to('forumhome')->with('status','Forum created.');
    }
    public function forumdetails($id)
    {
        $forums=new ForumModel();
        $comments=new CommentModel();

        $data['forum']=json_decode(json_encode($forums->whereIn('forum.forum_id',[$id])->whereIn('forum.is_deleted',[0])
            ->join('kids','kids.kid_id=forum.initiator')->paginate()),true);
        $data['comments']=json_decode(json_encode($comments->whereIn('comments.forum',[$id])->whereIn('comments.is_deleted',[0])->join('kids','kids.kid_id=comments.commentor')->join('forum','comments.forum=forum.forum_id')->paginate()),true);

        return view('comments',$data);
    }
     public function addComment($id)
    {
        $comment=new CommentModel();

        $data=[
            'commentor'=>'3',
            'forum'=>$id,
            'comment_post'=>$this->request->getPost('comment_post')
        ];

        $comment->save($data);

        return redirect()->to('forumhome')->with('status','Forum created.');
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
            return redirect()->to('forumhome')->with('status','Forum created.');
        }else{
            $forums->update($id,$newData);
            return redirect()->to('forumhome')->with('status','Forum created.');
        }
        
    }
    public function deletecomment($id)
    {
        $comments=new CommentModel();
        $newData = [
            'is_deleted'    => 1 ,
        ];
        $comments->update($id,$newData);
        return redirect()->to('forumhome')->with('status','Forum created.');
    }
    public function flagcomment($cid,$id)
    {
        $comments=new CommentModel();
        $forums=new ForumModel();

        $newData = [
            'comments_flagged'    => 1 ,
        ];
        $otherdat=[
            'flagged'    => 1 ,
        ];

        $forums->update($id,$otherdat);
        $comments->update($cid,$newData);
        return redirect()->to('forumhome')->with('status','Forum created.');
    }
    public function flagforum($id)
    {
        $forums=new ForumModel();

        $newData = [
            'flagged'    => 1 ,
        ];

        $forums->update($id,$newData);
        return redirect()->to('forumhome')->with('status','Forum created.');
    }
    public function unflagcomment($cid,$id)
    {
        $comments=new CommentModel();
        $forums=new ForumModel();

        $newData = [
            'comments_flagged'    => 0 ,
        ];
        $otherdat=[
            'flagged'    => 0 ,
        ];

        $forums->update($id,$otherdat);
        $comments->update($cid,$newData);
        return redirect()->to('forumhome')->with('status','Forum created.');
    }
    public function unflagforum($id)
    {
        $forums=new ForumModel();

        $newData = [
            'flagged'    => 0 ,
        ];

        $forums->update($id,$newData);
        return redirect()->to('forumhome')->with('status','Forum created.');
    }
   
}
