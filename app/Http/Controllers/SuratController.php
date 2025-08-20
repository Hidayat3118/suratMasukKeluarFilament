<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Barryvdh\DomPDF\Facade\Pdf; // pastikan kamu sudah install barryvdh/laravel-dompdf

class SuratController extends Controller
{
    public function cetak($id)
    {
        $surat = Surat::findOrFail($id);
        $pdf = Pdf::loadView('surat.cetak', compact('surat'));

        return $pdf->stream('surat-' . $surat->nomor . '.pdf');
    }
}
