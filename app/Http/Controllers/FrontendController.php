<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\About;
use App\Services;
use App\Skills;
use App\Education;
use App\Experience;
use App\Work;

class FrontendController extends Controller
{
    //
    public function home()
    {
    	$data_home = Home::all();
    	$data_about = About::all();
    	$data_services = Services::all();
    	$data_skills = Skills::all();
		$data_education = Education::all();
		$data_experience = Experience::all();
    	return view('me.index', compact('data_home', 'data_about', 'data_services', 'data_skills', 'data_education', 'data_experience', 'data_work'));
    }
}
