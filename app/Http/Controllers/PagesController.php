<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to coffee shop !';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $data['name'] = $name;
        return view('pages.about',$data);
    }
    public function services()
    {
        $data = array(
            'title'=>'Services',
            'services'=>['Web Design','Programming','SEO']

        );
        return view('pages.services')->with($data);
    }
}
