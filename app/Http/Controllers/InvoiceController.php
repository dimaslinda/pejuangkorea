<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InvoiceController extends Controller
{
    public function prosescheckoutcourse(Request $request)
    {
        $invoice = $request->all();

        $no_invoice = random_int(100000, 999999);
        $datainvoice = [
            'no_invoice' => $no_invoice,
            'user_id' => Auth()->user()->id,
            'course_id' => $invoice['course_id'],
            'price' => $invoice['price'],
            'status' => 'pending',
        ];
        Invoice::create($datainvoice);

        return redirect()->route('infopembayaran', $no_invoice)->with('status', 'Pesanan Berhasil Dibuat');
    }

    public function infopembayaran($no_invoice)
    {
        $invoice = Invoice::where('no_invoice', $no_invoice)->first();
        return view('infopembayaran', compact('invoice'));
    }

    public function konfirmasipembayaran($no_invoice)
    {
        $invoice = Invoice::where('no_invoice', $no_invoice)->first();
        return view('student.invoice', compact('invoice'));
    }

    public function updateinvoice(Request $request, $no_invoice)
    {
        $invoice = Invoice::where('no_invoice', $no_invoice)->first();
        if($request->has('bukti')) {
            $oldfile = $invoice->bukti;
            $namafilebaru = substr($oldfile, -20);
            if(isset($oldfile)) {
                Storage::disk('public')->delete('images/bukti/'.$namafilebaru);
            }
            $file = $request->file('bukti');
            $random = Str::random(16);
            $namefile = 'http://127.0.0.1:8000/storage/images/bukti/'. $random . '.' . $file->getClientOriginalExtension();
            $newnamefile = $random . '.' . $file->getClientOriginalExtension();
            $filePath = Storage::putFileAs('/public/images/bukti', $file, $newnamefile);
            $validated['bukti'] = $filePath;
        } else {
            $namefile = $invoice->profile;
        }

        $data = [
            'bukti' => $namefile
        ];
        // dd($data);
        $invoice->update($data);
        return redirect()->route('dalamproses')->with('status', 'Pembayaran Berhasil Dikonfirmasi');
    }
}
