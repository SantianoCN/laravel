<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return 'Я мастер обработки запросов!';
    }

    public function show($id){
        return 'yout ID is'.$id;
    }
}
