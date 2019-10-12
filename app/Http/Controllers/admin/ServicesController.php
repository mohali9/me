<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use Storage;

class ServicesController extends Controller
{
    //
	public function index()
	{
		$data_services = Services::all();
		return view('admin.services.index', compact('data_services'));
	}

	public function store(Request $request)
	{
		// dd($request->all());
		$image = $request->file('image')->store('images');
		$data_services = Services::create([
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
			'title6' => $request->title6,
			'description6' => $request->description6,
			'image' => $image,
			'title7' => $request->title7,
			'title8' => $request->title8,
			'title9' => $request->title9,
			'title10' => $request->title10,

		]);

		return redirect()->back()->with('success','Data berhasil ditambah');
	}

	public function edit($id)
	{
		$data_services = Services::find($id);
		return view('admin.services.edit', compact('data_services'));
	}

	public function update(Request $request, $id)
	{
		$data_services = Services::find($id);

		$data_services = Services::find($id);
		// Tidak usah upload gambar 
		if ($request->file('image') !== null && $request->file('image') !== ''){
			Storage::delete($data_services->image);
		}
		if ($request->hasFile('image')) {
			$filename = $request->file('image')->store('images');
		} else {
			$filename = $data_services->image;
		}

		$data_services->title = $request->title;
		$data_services->title1 = $request->title1;
		$data_services->description1 = $request->description1;
		$data_services->title2 = $request->title2;
		$data_services->description2 = $request->description2;
		$data_services->title3 = $request->title3;
		$data_services->description3 = $request->description3;
		$data_services->title4 = $request->title4;
		$data_services->description4 = $request->description4;
		$data_services->title5 = $request->title5;
		$data_services->description5 = $request->description5;
		$data_services->title6 = $request->title6;
		$data_services->description6 = $request->description6;
		$data_services->image = $filename;
		$data_services->title7 = $request->title7;
		$data_services->title8 = $request->title8;
		$data_services->title9 = $request->title9;
		$data_services->title10 = $request->title10;
		$data_services->save();
		return redirect('/admin/services')->with('success','Data berhasil diedit');
	}

	public function delete($id)
	{
		$data_services = Services::find($id);
		$data_services->delete();
		return redirect()->back()->with('success', 'Data berhasil dihapus');
	}
}
