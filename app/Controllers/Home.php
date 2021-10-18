<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $data['username']=$session->username;
        if (isset($session->logado)){
            $postModel = new \App\Models\PostModel();
            $data['item_data'] = $postModel->orderBy('id', 'DESC')->paginate(10);
            $data['pagination_link'] = $postModel->pager;
            return view('home_view', $data);

    
        }else{
            header('Location: Login');
            exit;
        }
        
    }
}
