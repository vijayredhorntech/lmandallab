<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function research()
    {
        return view('research');
    }
    public function publications()
    {
        return view('publications');
    }
    public function members()
    {
        return view('members');
    }
    public function photos()
    {
        return view('photos');
    }
    public function collaborator()
    {
        return view('collaborator');
    }
    public function onlineResources()
    {
        return view('onlineResources');
    }
}
