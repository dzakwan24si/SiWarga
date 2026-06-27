<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Surat;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pengumumans = Pengumuman::with('user')->where('is_active', true)->latest()->get();

        if ($user->role === 'warga') {
            $suratTerbaru = Surat::where('user_id', $user->id)->latest()->take(5)->get();
            $laporanTerbaru = Laporan::where('user_id', $user->id)->latest()->take(5)->get();

            return view('warga.dashboard', compact('user', 'pengumumans', 'suratTerbaru', 'laporanTerbaru'));
        }

        return view('dashboard', compact('user', 'pengumumans'));
    }
}
