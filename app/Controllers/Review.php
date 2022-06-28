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
        $bookModel = new \App\Models\Book_model();
        $ratingModel = new \App\Models\Star_rating_model();

        $data['book_data']= json_decode(json_encode($bookModel->findAll()),true);
        $data['book']= json_decode(json_encode($bookModel->findAll()),true);
        //$book_id = $bookModel->select('id');
        //$data['rating']= $ratingModel->select('rating', 'AVG');
        //$data['rating']=json_decode(json_encode($ratingModel->join('book','book.book_id=reviews.book_id')->whereIn('book.is_deleted',[0])->getResultArray()), true);

        //print_r ($data['rating']);

        return view('review', $data);
    }
    public function reviews()
    {

        $rating = $this->request->getPost('rating');
        $book_id = $this->request->getPost('book_id');
        $session_user = 1;

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
            return view('review', $data); 
        }

    }
}
