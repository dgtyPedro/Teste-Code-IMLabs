<?php

namespace App\Models;

use CodeIgniter\Model;

class ReadModel extends Model{
    protected $table = 'posts';
    public function get(){
        return $this->findAll();
    }
}