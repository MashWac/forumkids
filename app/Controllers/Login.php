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


class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function signin()
    {
        helper(['form']);
        $session = session();
        $kids = new KidsModel();
        $admins=new AdminModel();
        $parents=new ParentsModel();

        $email = $this->request->getVar('email_address');
        $password = $this->request->getVar('password');
        $data_kids = $kids->where('kid_email', $email)->first();
        $data_parents = $parents->where('parent_email', $email)->first();
        $data_admins = $admins->where('admin_email', $email)->first();


        if ($data_kids && $data_kids['is_deleted']==0) {
            $pass = $data_kids['password'];

            if ($pass == $password) {

                $sessionData = [
                    'user_id' => $data_kids['kid_id'],
                    'email' => $data_kids['kid_email'],
                    'logged' => TRUE,
                    'role'=>3
                ];
           

                $session->set($sessionData);
               
                return redirect()->to('homepage')->with('status','Logged In Successfully.');
            } else {
                return redirect()->to('login')->with('status','Wrong password. Please enter correct password');
            }
        }elseif($data_parents && $data_parents['is_deleted']==0){
            $pass = $data_parents['password'];

            if ($pass == $password) {

                $sessionData = [
                    'user_id' => $data_parents['parent_id'],
                    'email' => $data_parents['parent_email'],
                    'logged' => TRUE,
                    'role'=>2
                ];
           
                $session->set($sessionData);
                return redirect()->to('parenthome')->with('status','Logged In Successfully.');

               
            } else {
                return redirect()->to('login')->with('status','Wrong password. Please enter correct password');
            }

        }elseif($data_admins && $data_admins['is_deleted']==0){
            $pass = $data_admins['password'];

            if ($pass == $password) {

                $sessionData = [
                    'user_id' => $data_admins['admin_id'],
                    'email' => $data_admins['admin_email'],
                    'logged' => TRUE,
                    'role'=>1
                ];
           
                $session->set($sessionData);
               
                return redirect()->to('adminhome')->with('status','Logged In Successfully.');
            } else {
                return redirect()->to('login')->with('status','Wrong password. Please enter correct password');
            }

        } 
        else {
            return redirect()->to('login')->with('status','Wrong Email. Please enter correct Email');

        }
    }
    public function logout()
    {
        $session = session();

        $session->destroy();

        return redirect()->to('login');
    }

}

