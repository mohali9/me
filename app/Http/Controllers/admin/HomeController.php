<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;
use Storage;
use DB;

class HomeController extends Controller
{
    //
    public function index()
    {
    	$data_home = Home::all();
    	return view('admin.home.index', compact('data_home'));
    }

    public function store(Request $request)
	{
		// dd($request->all());
		$file = $request->file('file')->store('files');
		$image = $request->file('image')->store('images');
		$data_home = Home::create([
			'title' => $request->title,
			'description' => $request->description,
			'file' => $file,
			'image' => $image
		]);

		return redirect()->back()->with('success','Berhasil Ditambah');
	}

	public function edit($id)
	{
		$data_home = Home::find($id);
		return view('admin.home.edit', compact('data_home'));	
	}

	public function update(Request $request, $id)
	{
		$data_home = Home::find($id);
		// Tidak usah upload gambar 
		if ($request->file('image') !== null && $request->file('image') !== ''){
			Storage::delete($data_home->image);
		}
		if ($request->hasFile('image')) {
			$filename = $request->file('image')->store('images');
		} else {
			$filename = $data_home->image;
		}

		$file = $request->file('file')->store('files');
		// $image = $request->file('image')->store('images');
		$data_home->title = $request->title;
		$data_home->description = $request->description;
		$data_home->file = $file;
		$data_home->image = $filename;
		$data_home->save();

		return redirect('/admin/home')->with('success','Berhasil Di Update');
	}

	public function delete($id)
	{
		$data_home = Home::find($id);
		$data_home->delete();
		return redirect()->back()->with('success','Data Berhasil Dihapus');
	}

// ======= Api
	public function indexapi()
	{
		$data_home = Home::all();
		return response()->json($data_home);
	}

	public function indexapicreate(Request $request)
	{
		$data_home = Home::create([
			'title' => $request->title,
			'description' => $request->description,
			'file' => $request->file,
			'image' => $request->image
		]);
		return response()->json(
			// ['status'=>'success']
			$data_home
		);
		// DB::table('homes')->insert([
		// 	'title'=>$request->title,
		// 	'description'=>$request->description,
		// 	'file'=>$request->file,
		// 	'image'=>$request->image,
		// ]);
	}

	public function indexapiedit($id)
	{
		$data_home = Home::find($id);
		return response()->json($data_home);
	}

	public function indexapiupdate(Request $request, $id)
	{
		$data_home = Home::find($id);
		$data_home->title = $request->title;
		$data_home->description = $request->description;
		$data_home->file = $request->file;
		$data_home->image = $request->image;
		$data_home->save();
		return response()->json([
			'status'=>'success'
		]);
	}

	public function indexapidelete($id)
	{
		$data_home = Home::find($id);
		$data_home->delete();
		return response()->json(['status'=>'success']);
	}
}
