<?php

namespace App\Controllers;
use App\Models\Star_rating_model;
use App\Models\Book_model;

class Review extends BaseController
{
    public function __construct()
    {
       $ratingModel = new \App\Models\Star_rating_model();
       $bookModel = new \App\Models\Book_model();
    }
    public function index()
    {
        $forums=new \App\Models\ForumModel();
        $bookModel = new \App\Models\Book_model();
        $ratingModel = new \App\Models\Star_rating_model();

        $data['forum']=json_decode(json_encode($forums
            ->whereIn('forum.is_deleted',[0])
            ->join('kids','kids.kid_id=forum.initiator')->paginate(4)),true);
            
       
        $data['book_data']= json_decode(json_encode($bookModel->whereIn('books.is_deleted',[0])->paginate(4)),true);
        
        $data['book']= json_decode(json_encode($bookModel->findAll()),true);
        $data['pagination_link'] = $bookModel->pager;

        $data['pagination_link'] = $forums->pager;

        return view('review', $data);
    }
    public function reviews()
    {
        session();
        $rating = $this->request->getPost('rating');
        $book_id = $this->request->getPost('book_id');
        $session_user = $_SESSION['user_id'];

        $values =[
            'rating'=>$rating,
            'book_id'=>$book_id,
            'reviewer'=>$session_user,
        ];

        $ratingModel = new \App\Models\Star_rating_model();
        $query = $ratingModel->insert($values);

        // if(!$query){
        //     return redirect()->to('forum_page')->with('fail', 'Something went wrong');
        // }else{
        //     return redirect()->to('forum_page')->with('success', 'Rating added');
        // }
        $bookModel = new \App\Models\Book_model();
        $data['book_data']= json_decode(json_encode($bookModel->findAll()),true);
        $data['book']= json_decode(json_encode($bookModel->findAll()),true);
        

        if($query){
            return redirect()->to('review')->with('status','Review added.');
        }

    }
}
