<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
      public function index(){

        $member=Team::all();
   
        return view('frontend.members',compact("member"));
    }
}
