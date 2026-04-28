<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {

            session()->set([
                'id'   => $user['id'],
                'name' => $user['name'],
                'role' => $user['role'],
                'isLogin' => true
            ]);

            if ($user['role'] == 'admin') {
                return redirect()->to('/admin');
            } elseif ($user['role'] == 'staff') {
                return redirect()->to('/staff');
            } else {
                return redirect()->to('/customer');
            }
        }

        return redirect()->back()->with('error', 'Login gagal');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerProcess()
    {
        $model = new UserModel();

        $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'customer'
        ]);

        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}