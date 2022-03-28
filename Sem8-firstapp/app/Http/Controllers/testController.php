<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class testController extends BaseController{
    public function index(){
        //return "Mi primer controlador";
        return view("test/index")->with('title','Mi primer aplicacion con laravel');
    }
}