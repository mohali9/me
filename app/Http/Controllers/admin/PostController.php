<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Storage;

class PostController extends Controller
{
    //
	public function index()
	{
		$data = Post::all();
		return view('admin.post.index', compact('data'));
	}

	public function store(Request $request)
	{
		// dd($request->all());
		$image = $request->file('image')->store('images');
		$data = Post::create([
			'title' => $request->title,
			'content' => $request->content,
			'image' => $image
		]);

		return redirect()->back()->with('success','Berhasil Ditambah');
	}

	public function edit($id)
	{
		$data = Post::find($id);
		return view('admin.post.edit', compact('data'));	
	}

	public function update(Request $request, $id)
	{
		$data = Post::find($id);
		// Tidak usah upload gambar 
		// if ($request->file('image') !== null && $request->file('image') !== ''){
		// 	Storage::delete($data->image);
		// }
		// if ($request->hasFile('image')) {
		// 	$filename = $request->file('image')->store('images');
		// } else {
		// 	$filename = $data->image;
		// }

		$image = $request->file('image')->store('images');
		$data->title = $request->title;
		$data->content = $request->content;
		$data->image = $image;
		$data->save();

		return redirect('/admin/post')->with('success','Berhasil Di Update');
	}

	public function delete($id)
	{
		$data = Post::find($id);
		$data->delete();
		return redirect()->back()->with('success','Data Berhasil Dihapus');
	}

}
