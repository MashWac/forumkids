<?php

namespace App\Controllers;
use App\Models\UploadModel;
use App\Models\CommentModel;
use App\Models\PuzzleModel;
use App\Models\QuizModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function innit()
    {
        return view('landing');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Home/index');
    }
    public function latestuploads()
    {
        $puzzles=new PuzzleModel();
        $quizes=new QuizModel();
        $data['quizes']=json_decode(json_encode($quizes->whereIn('quizes.is_deleted',[0])->paginate()),true);
        $data['puzzles']=json_decode(json_encode($puzzles->whereIn('puzzles.is_deleted',[0])->paginate()), true);
        return view('puzzlesandquizes',$data);
    }
    public function ebooks()
    {
        $books=new UploadModel();
        $data['books']=json_decode(json_encode($books->whereIn('books.is_deleted',[0])->paginate()), true);
        return view('read',$data);
    }
    public function openpdf($name){
        $file = './upload/'.$name;
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
        $mime = finfo_file($finfo, $file);
    
        header('Pragma: public');
        header('Expires: 0');
        header('Content-Type: $mime');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Length' . filesize($file));
        ob_clean();
        flush();
        readfile($file);



        // header("Content-Length: " . filesize ('./upload/'.$name ) ); 
        // header("Content-type: application/pdf"); 
        // header("Content-disposition: inline;     
        // filename=".basename('./upload/'.$name));
        // header('Expires: 0');
        // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        // $filepath = readfile('./upload/'.$name);
        // header("content-type:application/pdf");
    }
}
