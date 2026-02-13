<?php

namespace App\Controllers;

class BlogController extends BaseController
{
   
    public function index()
    {  
        $blogModel = new \App\Models\BlogModel();
        $data['blogs'] = $blogModel->getblogs();
        return view('blog', $data);
    }
}
