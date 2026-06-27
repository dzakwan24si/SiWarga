<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pengumumans = Pengumuman::with('user')->where('is_active', true)->latest()->get();

        return view('dashboard', compact('user', 'pengumumans'));
    }
}
