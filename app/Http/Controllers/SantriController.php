<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function beranda()
    {
        return view('home');
    }

    public function listSantri()
    {
        $Dtsantri = Santri::paginate(5);
        return view('list', compact('Dtsantri'));
    }
    
    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {
        Santri::create([
            'nama'=>$request->nama,
            'nama_ibu'=>$request->nama_ibu,
            'nama_ayah'=>$request->nama_ayah,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat,
            'tgllhr'=>$request->tgllhr,
            'jenis_santri'=>$request->jenis_santri,
        ]);
        // toast('Data Berhasil Disimpan','success');
        return redirect('list');
    }
    
    public function update(Request $request, string $id)
    {
        $santriUpdate = Santri::findorfail($id);
        $santriUpdate->update($request->all());
        return redirect('list');
    }

    public function search(Request $request) {
        $query = $request->input('query');

        $Dtsantri = Santri::where('nama', 'LIKE', "%$query%")->get();

        return view('list_search', compact('Dtsantri', 'query'));
        
    }

    
}
