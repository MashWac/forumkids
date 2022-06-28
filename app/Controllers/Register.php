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
       // $encrypter = \Config\Services::encrypter();
        if($usertype=='admin'){
            $password='admin1234';
           // $encryptpass=$encrypter->encrypt($password);
            $data=[
            'admin_name'=>$this->request->getPost('adminname'),
            'admin_email'=>$this->request->getPost('email'),
            'password'=>$password,
            'admin_role'=>1
            ];
            $admin->save($data);

        }
        elseif($usertype=='parent'){
            $password='parent1234';
           // $encryptpass=$encrypter->encrypt($password);
            $data=[
                'parent_name'=>$this->request->getPost('parentname'),
                'parent_email'=>$this->request->getPost('email'),
                'password'=>$password,
                'parent_role'=>2
                ];
            $parent->save($data);
        }
        else{
            
            $parent_email=$this->request->getPost('parentemail');
            $parentdets=$parent->where('parent_email', $parent_email)->first();
            
            if($parentdets!=null){
                $password='kid1234';
               // $encryptpass=$encrypter->encrypt($password);
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
            }else{
                return redirect()->to('register')->with('status','Error:User has not been added! Parent does not exists');
            }

        }
        return redirect()->to('adminhome')->with('status','A New User Has Been Added Succesfully');
        
    }

}