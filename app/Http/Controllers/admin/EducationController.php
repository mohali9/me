<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Education;

class EducationController extends Controller
{
    //
    public function index()
    {
    	$data_education = Education::all();
    	return view('admin.education.index', compact('data_education'));
    }

    public function store(Request $request)
    {
    	$data_education = Education::create([
    		'title' => $request->title,
    		'title1' => $request->title1,
    		'description1' => $request->description1,
    		'title2' => $request->title2,
    		'description2' => $request->description2,
    		'title3' => $request->title3,
    		'description3' => $request->description3,
    		'title4' => $request->title4,
    		'description4' => $request->description4,
    		'title5' => $request->title5,
    		'description5' => $request->description5,
    	]);
    	return redirect()->back()->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $data_education = Education::find($id);
        return view('admin.education.edit', compact('data_education'));
    }

    public function update(Request $request, $id)
    {
        $data_education = Education::find($id);
        $data_education->title = $request->title;
        $data_education->title1 = $request->title1;
        $data_education->description1 = $request->description1;
        $data_education->title2 = $request->title2;
        $data_education->description2 = $request->description2;
        $data_education->title3 = $request->title3;
        $data_education->description3 = $request->description3;
        $data_education->title4 = $request->title4;
        $data_education->description4 = $request->description4;
        $data_education->title5 = $request->title5;
        $data_education->description5 = $request->description5;
        $data_education->save();
        return redirect ('admin/education')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $data_education = Education::find($id);
        $data_education->delete();
        return redirect()->back()->with('success', 'Berhasil Dihapus');
    }
}
