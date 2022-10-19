<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\KidsModel;
use App\Models\AdminModel;
use App\Models\ParentsModel;
use App\Models\ForumModel;
use App\Models\UploadModel;
use App\Models\CommentModel;
use Prophecy\Exception\Prediction\AggregateException;


class Register extends BaseController
{
    public function index()
    {
        return view('childregistrationpg');
    }
    public function regpick()
    {
        return view('indexbuttons');
    }
    public function parentpage()
    {
        return view('register');
    }
    public function childpage()
    {
        return view('childregistrationpg');
    }
    public function store($usertype)
    {
        $parent=new ParentsModel();
        $child=new KidsModel();
        $admin=new AdminModel();
        $encrypter = \Config\Services::encrypter();
        if($usertype=='parent'){
            $pass=$this->request->getPost('password');
            $conpass=$this->request->getPost('confirmpassword');
            if($pass==$conpass){
                $encryptpass=$encrypter->encrypt($pass);
                $data=[
                    'parent_name'=>$this->request->getPost('parentname'),
                    'parent_email'=>$this->request->getPost('email'),
                    'password'=>$pass,
                    'parent_role'=>2
                    ];
                $parent->save($data);
                return redirect()->to('login')->with('status','Registration Successful');

            }else{
                return redirect()->to('parentregister')->with('status','Passwords and Confirm Password do not match!');

            }

        }
        else{
            
            $parent_email=$this->request->getPost('parentemail');
            $parentdets=$parent->where('parent_email', $parent_email)->first();
            
            if($parentdets!=null){
                $pass=$this->request->getPost('password');
                $conpass=$this->request->getPost('confirmpassword');
    
                if($pass==$conpass){
                    $encryptpass=$encrypter->encrypt($pass);
                $data=[
                    'kid_name'=>$this->request->getPost('kidname'),
                    'kid_email'=>$this->request->getPost('email'),
                    'age'=>$this->request->getPost('age'),
                    'gender'=>$this->request->getPost('gender'),
                    'parent'=>$parentdets['parent_id'],
                    'password'=>$pass,
                    'kid_role'=>3
                    ];
                    $child->save($data);
                    return redirect()->to('login')->with('status','Registration Successful');
                }else{
                    return redirect()->to('register')->with('status','Passwords and Confirm Password do not match!');

                }

            }else{
                return redirect()->to('register')->with('status','Error:User has not been added! Parent does not exists');
            }

        }        
    }

}