<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.kelassaya');
    }

    public function kelaszoom()
    {
        return view('student.kelaszoom');
    }

    public function profil()
    {
        return view('student.profil');
    }

    public function password()
    {
        return view('student.password');
    }

    public function pesanan()
    {
        $invoice = Invoice::where('user_id', Auth()->user()->id)->where('status', 'paid')->get();
        return view('student.pesanan', compact('invoice'));
    }

    public function dalamproses()
    {
        $invoice = Invoice::where('user_id', Auth()->user()->id)->where('status', 'pending')->get();
        return view('student.dalamproses', compact('invoice'));
    }

    public function detailpesanan($no_invoice)
    {
        $invoice = Invoice::where('no_invoice', $no_invoice)->first();
        return view('student.detailpesanan', compact('invoice'));
    }
}
