<?php
namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function process()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where('username', $username)->first();

        if ($dataUser && password_verify($password, $dataUser['password'])) {
            session()->set(['username' => $dataUser['username'], 'isLoggedIn' => true]);
            return redirect()->to('/buku');
        }
        return redirect()->back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}