<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $s=$request->input('number');
        //fungsi regex untuk menghapus whitespace dan strip pada string.
        $sanitize = preg_replace('/\s|-+/', '', $s);

        //fungsi untuk mengubah string menjadi beberapa bagian kecil dan menghapus char akhir dari
        //fungsi chunk_split
        if (strlen($sanitize)%2==0) {
            $format = rtrim(chunk_split($sanitize, '3', '-'), '-');
        }else {
            $format = rtrim(chunk_split($sanitize, '3', '-'), '-');
        }

        return view('proses', compact('format') );
    }
}
