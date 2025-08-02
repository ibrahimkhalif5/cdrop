<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
     public function index(){

        $doc=Job::get();
   
        return view('frontend.downloads',compact("doc"));
        
    }
}
