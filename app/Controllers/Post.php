<?php

namespace App\Controllers;

class Post extends BaseController
{
    public function index()
    {
        return view('post_view');
    }

    public function action()
    {
        
        $thumb = $this->request->getFile('thumb');
        $banner = $this->request->getFile('banner');

        $thumbname = $thumb->getName();
        $bannername = $banner->getName();
        
        $thumbsave = \Config\Services::image() 
        ->withFile($this->request->getFile('thumb')) 
        ->save('../public/images/'.$thumbname);

        $bannersave = \Config\Services::image() 
        ->withFile($this->request->getFile('banner')) 
        ->save('../public/images/'.$bannername);

        helper(['form']);
        $rules = [
            'title'          => 'required|min_length[4]|max_length[30]|is_unique[posts.title]',
            'text'      => 'required|min_length[4]',
        ];

        if($this->validate($rules)){
            $postModel = new \App\Models\PostModel();
            $data = [
                'title'     => $this->request->getVar('title'),
                'text'     => $this->request->getVar('text'),
                'thumb'     => $thumbname,
                'banner'     => $bannername,
            ];
            $postModel->save($data);

            echo "<script LANGUAGE='JavaScript'>
            window.alert('ITEM CRIADO COM SUCESSO');
            window.location.href='http://localhost/testeCodeLab/public/Post';
            </script>";


        }else{
            echo "<script LANGUAGE='JavaScript'>
            window.alert('ITEM NÃO PODE SER CRIADO');
            window.location.href='http://localhost/testeCodeLab/public/Post';
            </script>";
        }

        




    }

}