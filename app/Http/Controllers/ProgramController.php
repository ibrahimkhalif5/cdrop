<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
     public function wash(){

        $dept = Program::where('program', 'wash')->get();
        
   
        return view('frontend.programs.wash',compact("dept"));
    }
     public function education(){

        $dept = Program::where('program', 'education')->get();
   
        return view('frontend.programs.education',compact("dept"));
    }
     public function health(){

        $dept = Program::where('program', 'health')->get();
   
        return view('frontend.programs.health',compact("dept"));
    }
     public function youth(){

        $dept = Program::where('program', 'youth')->get();
   
        return view('frontend.programs.youth',compact("dept"));
    }
     public function gbv(){

        $dept = Program::where('program', 'gbv')->get();
   
        return view('frontend.programs.gender',compact("dept"));
    }
     public function agriculture(){

        $dept = Program::where('program', 'agri')->get();
   
        return view('frontend.programs.agriculture',compact("dept"));
    }
     public function security(){

        $dept = Program::where('program', 'security')->get();
   
        return view('frontend.programs.security',compact("dept"));
    }
     public function humanitarian(){

        $dept = Program::where('program', 'humanitarian')->get();
   
        return view('frontend.programs.humanitarian',compact("dept"));
    }
    
}
