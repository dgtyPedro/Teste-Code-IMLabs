<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $data['username']=$session->username;
        if (isset($session->logado)){
            $readModel = new \App\Models\ReadModel();
            $data['item_data'] = $readModel->paginate(3);
            $data['pager'] = $readModel->pager;
            return view('home_view', $data);

    
        }else{
            header('Location: Login');
            exit;
        }
        
    }
}
