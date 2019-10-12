<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kas;

class KasController extends Controller
{
    //
    public function index()
    {
    	$data_kas = Kas::all();
    	return view('admin.kas.index', compact('data_kas'));
    }

    public function store(Request $request)
    {
    	$data_kas = Kas::create([
    		'item' => $request->item,
    		'qty' => $request->qty,
    		'harga' => $request->harga,
    		'total' => $request->total,
    	]);

    	return redirect()->back()->with('success','Data berhasil ditambah');
    }

    public function edit($id)
	{
		$data_kas = Kas::find($id);
		return view('admin.kas.edit', compact('data_kas'));	
	}

	public function update(Request $request, $id)
    {
    	$data_kas = Kas::find($id);
    	$data_kas->item = $request->item;
    	$data_kas->qty = $request->qty;
    	$data_kas->harga = $request->harga;
    	$data_kas->total = $request->total;
    	$data_kas->save();

    	return redirect('/admin/kas')->with('success', 'Data Berhasil Di Update');
    }

    public function delete($id)
	{
		$data_kas = Kas::find($id);
		$data_kas->delete();
		return redirect()->back()->with('success','Data Berhasil Dihapus');
	}
}
