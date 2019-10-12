<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use Storage;

class AboutController extends Controller
{
    //
    public function index()
    {
    	$data_about = About::all();
    	return view('admin.about.index', compact('data_about'));
    }

    public function store(Request $request)
    {
    	$data_about = About::create([
    		'title' => $request->title,
    		'description' => $request->description,
    		'col1' => $request->col1,
    		'col2' => $request->col2,
    		'col3' => $request->col3,
    		'col4' => $request->col4,
    		'title1' => $request->title1,
    	]);

    	return redirect()->back()->with('success', 'Data Berhasil Ditambah');
    }

    public function edit($id)
    {
    	$data_about = About::find($id);
    	return view('admin.about.edit', compact('data_about'));
    }

    public function update(Request $request, $id)
    {
    	$data_about = About::find($id);
    	$data_about->title = $request->title;
    	$data_about->description = $request->description;
    	$data_about->col1 = $request->col1;
    	$data_about->col2 = $request->col2;
    	$data_about->col3 = $request->col3;
    	$data_about->col4 = $request->col4;
    	$data_about->title1 = $request->title1;
    	$data_about->save();

    	return redirect('/admin/about')->with('success', 'Data Berhasil Di Update');
    }

    public function delete($id)
	{
		$data_about = About::find($id);
		$data_about->delete();
		return redirect()->back()->with('success','Data Berhasil Dihapus');
	}
}
