<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function chart()
    {
        $user = \Auth::user();

        $labels = $user->tests->sortBy('created_at')->pluck('created_at')->map(function ($carbon) {
            return $carbon->format('d/m/Y');
        });
        $data = $user->tests->sortBy('created_at')->pluck('level');

        return view('chart', compact('labels', 'data'));
    }

    public function video()
    {
        return view('video');
    }
}
