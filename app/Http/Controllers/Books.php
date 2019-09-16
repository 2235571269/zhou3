<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class Books extends Controller
{
    public function getBooks()
    {
        $model=new Book();
        $data=$model->get();
        return ['code'=>0,'meg'=>'获取成功','data'=>$data];

    }
}
