<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Kirim email (ganti alamat tujuan)
        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('dayennurhidayat@gmail.com') // Ganti dengan email tujuan
                 ->from($validated['email'], $validated['name'])
                 ->subject('Pesan dari Website');
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
