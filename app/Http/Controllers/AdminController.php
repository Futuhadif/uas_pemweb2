<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Santri;
use Barryvdh\DomPDF\Facade\Pdf;



class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();
        
        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['is_admin' => true]);
            return redirect('list');
        }

        return back()->withErrors(['email' => 'Email or password is incorrect']);
    }


    public function logout()
    {
        session()->forget('is_admin');
        return redirect('list');
    }

    public function edit(string $id)
    {
        $dtSantriUpdate = Santri::findorfail($id);
        return view('edit',compact('dtSantriUpdate'));
    }

    public function update(Request $request, string $id)
    {
        $santriUpdate = Santri::findorfail($id);
        $santriUpdate->update($request->all());
        // toast('Data Berhasil Diupdate','success');
        return redirect('list');
    }

    public function destroy(string $id)
    {
        $santriDelete = Santri::findorfail($id);
        $santriDelete->delete();
        // toast('Data Berhasil DiHapus','success');
        return back();
    }

    public function generatePDF()
    {
        $santris = Santri::all();
        $pdf = Pdf::loadView('santri_pdf', compact('santris'));

        return $pdf->download('santri-list.pdf');
    }
}

