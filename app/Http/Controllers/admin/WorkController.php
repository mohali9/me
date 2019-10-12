<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Work;

class WorkController extends Controller
{
    //
    public function index()
    {
        $data_work = Work::all();
        return view ('admin.work.index', compact('data_work'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $image1 = $request->file('image1')->store('images');
        $image2 = $request->file('image2')->store('images');
        $image3 = $request->file('image3')->store('images');
        $image4 = $request->file('image4')->store('images');
        $image5 = $request->file('image5')->store('images');
        $image6 = $request->file('image6')->store('images');
        $data_work = Work::create([
            'title1' => $request->title1,
            'description1'=> $request->description1,
            'title2' => $request->title2,
            'description2'=> $request->description2,
            'title3' => $request->title3,
            'description3'=> $request->description3,
            'title4' => $request->title4,
            'description4'=> $request->description4,
            'title5' => $request->title5,
            'description5'=> $request->description5,
            'title6' => $request->title6,
            'description6'=> $request->description6,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'image5' => $image5,
            'image6' => $image6,
        ]);
        return redirect()->back()->with('success', 'Data Work Berhasil Di Tambah');
    }

    public function edit($id)
    {
        $data_work = Work::Find($id);
        return view('admin.work.edit', compact('data_work'));
    }

    public function update(Request $request, $id)
    {
        $data_work = Work::Find($id);
        // Tidak usah upload gambar 
		if ($request->file('image1', 'image2', 'image3', 'image4', 'image5', 'image6') !== null && $request->file('image1', 'image2', 'image3', 'image4', 'image5', 'image6') !== ''){
			// Storage::delete($data_work->image);
		}
		if ($request->hasFile('image1', 'image2', 'image3', 'image4', 'image5', 'image6')) {
			$filename = $request->file('image1', 'image2', 'image3', 'image4', 'image5', 'image6')->store('images');
		} else {
			// $filename = $data_work->image;
        }
        
        $data_work->title1 = $request->title1;
        $data_work->description1 = $request->description1;
        $data_work->image1 = $filename;
        $data_work->title2 = $request->title2;
        $data_work->description2 = $request->description2;
        $data_work->image2 = $filename;
        $data_work->title3 = $request->title3;
        $data_work->description3 = $request->description3;
        $data_work->image3 = $filename;
        $data_work->title4 = $request->title4;
        $data_work->description4 = $request->description4;
        $data_work->image4 = $filename;
        $data_work->title5 = $request->title5;
        $data_work->description5 = $request->description5;
        $data_work->image5 = $filename;
        $data_work->title6 = $request->title6;
        $data_work->description6 = $request->description6;
        $data_work->image6 = $filename;
        $data_work->save();
        return redirect('/admin/work')->with('success', 'Data berhasil dirubah');
    }
}
