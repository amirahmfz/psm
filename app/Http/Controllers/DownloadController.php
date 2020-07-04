<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function manual()
    {
        return response()->file(public_path('Manual_Pengguna.pdf'));
    }
}
