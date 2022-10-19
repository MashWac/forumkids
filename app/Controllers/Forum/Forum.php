<?php

namespace App\Controllers;
use App\Models\ForumModel;


class Forum extends BaseController
{
    public function index()
    {
               $forums=new ForumModel();

        $data['forum']=json_decode(json_encode($forums
            ->whereIn('forum.is_deleted',[0])
            ->join('kids','kids.kid_id=forum.initiator')->paginate()),true);

        // echo "<pre>";
        // print_r($data);

        // echo "</pre>";
        //echo view('forum.php',$data);
        return view('forum',$data);

    }
    public function add()
    {
    	$forums=new ForumModel();

    	$data=[
    		'initiator'=>$this->request->getPost(session_name()),
    		'title'=>$this->request->getPost('title'),
    		'genre'=>$this->request->getPost('genre'),
    		'main_comment'=>$this->request->getPost('main_comment')
        ];
    	$forums->save($data);
    }
}