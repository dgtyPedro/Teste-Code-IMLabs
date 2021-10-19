<?php

namespace App\Controllers;

class Read extends BaseController
{
    public function index($page)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM posts WHERE id='$page';");
        $result = $query->getResult();

        foreach ($result as $row) {
            $data['title'] = $row->title;
            $data['text'] = $row->text;
            $data['banner'] = $row->banner;
        }
        
        return view('read_view', $data);
    }
}