<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Experience;

class ExperienceController extends Controller
{
    //
    public function index()
    {
        $data_experience = Experience::all();
        return view ('admin.experience.index', compact('data_experience'));
    }

    public function store(Request $request)
    {
        $data_experience = Experience::create([
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
        $data_experience = Experience::Find($id);
        return view('admin.experience.edit', compact('data_experience'));
    }

    public function update(Request $request, $id)
    {
        $data_experience = Experience::Find($id);
        $data_experience->title = $request->title;
        $data_experience->title1 = $request->title1;
        $data_experience->description1 = $request->description1;
        $data_experience->title2 = $request->title2;
        $data_experience->description2 = $request->description2;
        $data_experience->title3 = $request->title3;
        $data_experience->description3 = $request->description3;
        $data_experience->title4 = $request->title4;
        $data_experience->description4 = $request->description4;
        $data_experience->title5 = $request->title5;
        $data_experience->description5 = $request->description5;
        $data_experience->save();
        return redirect('admin/experience')->with('success','Data berhasil di update');
    }

    public function delete($id)
    {
        $data_experience = Experience::find($id);
        $data_experience->delete();
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
