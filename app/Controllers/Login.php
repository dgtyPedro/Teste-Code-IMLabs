<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login_view');
    }

    public function action()
    {
        $session = session();
        $userModel = new \App\Models\UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('username', $username)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $session_data = [
                    'username' => $data['username'],
                    'logado' => TRUE
                ];  

                $session->set($session_data);

                echo "<script LANGUAGE='JavaScript'>
                window.alert('LOGADO');
                window.location.href='http://localhost/testeCodeLab/public/Home';
                </script>";

            }else{
                echo "<script LANGUAGE='JavaScript'>
                window.alert('CREDENCIAIS INCORRETAS');
                window.location.href='http://localhost/testeCodeLab/public/Login';
                </script>";
            }

        }else{
            echo "<script LANGUAGE='JavaScript'>
            window.alert('CREDENCIAIS INCORRETAS');
            window.location.href='http://localhost/testeCodeLab/public/Login';
            </script>";
        }
    }
}
