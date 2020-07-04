<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use App\StressTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function chart()
    {
        $results = StressTest::all()->sortBy('created_at')->groupBy(function($item) {
            return Carbon::parse($item->created_at)->format('Y-m-d');
        });

        $labels = $results->keys()->map(function($date) {
            return Carbon::parse($date)->format('d-m-Y');
        });
        $data = $results->map(function($coll) {
            return $coll->sum('level') / $coll->count();
        })->values();

        return view('admin.user.chart', compact('labels', 'data'));
    }

    public function userChart(User $user)
    {
        $labels = $user->tests->sortBy('created_at')->pluck('created_at')->map(function ($carbon) {
            return $carbon->format('d/m/Y');
        });
        $data = $user->tests->sortBy('created_at')->pluck('level');

        return view('admin.user.user-chart', compact('labels', 'data', 'user'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->except('_token', 'password'));

        if ($request->password) {
            $user->password = bcrypt($request->password);
            $user->save();
        }

        return back();
    }

    public function delete(Request $request, User $user)
    {
        $user->tests()->delete();
        $user->delete();

        return back();
    }
}
