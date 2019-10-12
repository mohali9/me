<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skills;

class SkillsController extends Controller
{
    //
    public function index()
    {
    	$data_skills = Skills::all();
    	return view('admin.skills.index', compact('data_skills'));
    }

    public function store(Request $request)
    {
    	$data_skills = Skills::create([
    		'title' => $request->title,
    		'description' => $request->description,
    		'title1' => $request->title1,
    		'title2' => $request->title2,
    		'title3' => $request->title3,
    		'title4' => $request->title4,
    		'title5' => $request->title5,
    		'title6' => $request->title6,
    	]);

    	return redirect()->back()->with('success', 'Berhasil Ditambah');
    }

    public function edit($id)
    {
    	$data_skills = Skills::find($id);
    	return view('admin.skills.edit', compact('data_skills'));
    }

    public function update(Request $request, $id)
    {
    	$data_skills = Skills::find($id);
    	$data_skills->title = $request->title;
    	$data_skills->description = $request->description;
    	$data_skills->title1 = $request->title2;
    	$data_skills->title2 = $request->title2;
    	$data_skills->title3 = $request->title3;
    	$data_skills->title4 = $request->title4;
    	$data_skills->title5 = $request->title5;
    	$data_skills->title6 = $request->title6;
    	$data_skills->save();

    	return redirect('/admin/skills')->with('success','Berhasil Di Update');
    }

    public function delete($id)
    {
    	$data_skills = Skills::find($id);
    	$data_skills->delete();
    	return redirect()->back()->with('success', 'Berhasil dihapus');
    }
}
