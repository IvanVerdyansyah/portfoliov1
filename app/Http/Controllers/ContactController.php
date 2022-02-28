<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:64',
            'email' => 'required|email:dns',
            'nomor' => 'required|max:13',
            'kategori' => 'required',
            'pesan' => 'required|max:100'
        ]);

        if ( Contact::create($validatedData) ) {
            return redirect('/')->with('berhasil', 'Pesan kamu berhasil dikirim!');
        }
        
        return back()->with('gagal', 'Pesan kamu gagal dikirim!');
    }
}
