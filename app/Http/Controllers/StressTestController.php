<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StressTestController extends Controller
{
    public function index()
    {
        $questions = collect(config('app.stress_questions'));

        return view('stress_test.index', compact('questions'));
    }

    public function store(Request $request)
    {
        $result = 0;
        $stress = '';

        foreach ($request->answer as $mark) {
            $result += $mark;
        }

        if ($result == 0 && $result <= 7)
            $stress = 1;
        else if ($result >= 8 && $result <= 9)
            $stress = 2;
        else if ($result >= 10 && $result <= 13)
            $stress = 3;
        else if ($result >= 14 && $result <= 17)
            $stress = 4;
        else if ($result >= 18)
            $stress = 5;

        $user = \Auth::user();
        $user->tests()->create([
            'level' => $stress
        ]);

        return back()->with([
            'level' => $stress
        ]);
    }
}
