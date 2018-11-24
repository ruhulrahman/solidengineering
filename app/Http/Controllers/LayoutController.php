<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
    	$content = view('index_content');
    	return view('index')->with('content', $content);
    }

    public function services(){
    	$content = view('services');
    	return view('index')->with('content', $content);
    }

    public function strategry(){
    	$content = view('strategry');
    	return view('index')->with('content', $content);
    }

    public function vision(){
        $content = view('vision');
        return view('index')->with('content', $content);
    }

    public function gallery(){
    	$content = view('gallery');
    	return view('index')->with('content', $content);
    }

    public function about_us(){
    	$content = view('about-us');
    	return view('index')->with('content', $content);
    }

    public function contact(){
    	$content = view('contact');
    	return view('index')->with('content', $content);
    }
}
