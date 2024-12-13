<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function login()
    {
        if ($this->session->has('user')) {
            return redirect()->to('/auctions');
        }
        if (isset($_POST['email'])) {
            $user_model = new UserModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $user = $user_model->where('email', $email)->first();
            if ($user) {
                if (password_verify($password, $user->password)) {
                    $this->session->set("user", $user);
                    return redirect()->to('/auctions')->with('success', 'Login successful!');
                } else {
                    return redirect()->back()->with('error', 'Invalid password. Please try again.');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid email or password. Please try again.');
            }
        }

        return view('login');
    }
}
