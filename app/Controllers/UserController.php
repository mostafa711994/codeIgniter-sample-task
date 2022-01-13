<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;


class UserController extends BaseController
{
    public function index()
    {
        return view('users/index');
    }


    public function store_user(){

       helper(['form','url']);
        $check = $this->validate([
            'name'=>'required',
            'email'=>'required|is_unique[users.email]',
            'password'=>'required'
            ]);
        if(!$check){
            return view('users/index',['validation'=>$this->validator]);
        }
        $user = new User();
        $data = [
           'name' => $this->request->getPost('name'),
           'email' => $this->request->getPost('email'),
           'password' => password_hash($this->request->getPost('password'),PASSWORD_BCRYPT),
        ];

        $user->save($data);

        return redirect()->back();
    }

}
