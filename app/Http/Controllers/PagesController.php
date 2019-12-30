<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Learning Laravel From youtube series';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about',compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Web development']
        );
        return view('pages.services')->with($data);
    }
}
