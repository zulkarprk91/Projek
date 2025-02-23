<?php

namespace App\Http\Controllers;

use App\Models\jadwalModel;
use App\Models\Ulasan;
use App\Models\User;
use App\Models\transaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function show_dashboard(): View|RedirectResponse
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'User tidak ditemukan');
        }

        return view('user.pages.dashboard.dashboard', [
            'title' => 'Dashboard User',
            'user' => $user,
        ]);
    }

    public function show_transaksi(): View|RedirectResponse
    {
        ini_set('max_execution_time', 60); // Meningkatkan batas waktu eksekusi sementara

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'User tidak ditemukan');
        }

        // Menggunakan pagination untuk mengurangi beban database
        $jadwal = jadwalModel::where('status', 'tersedia')->paginate(10);

        // Ambil transaksi terbaru user jika ada
        $transaction = transaksiModel::where('id_user', $user->id)
            ->latest()
            ->first();

        return view('user.pages.Booking.booking', [
            'title' => 'Parako',
            'user' => $user,
            'jadwal' => $jadwal,
            'transaction' => $transaction, // Pastikan variabel dikirim ke view
        ]);
    }

    public function show_ulasan(): View|RedirectResponse
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'User tidak ditemukan');
        }

        // Menggunakan pagination agar lebih ringan
        $ulasan = Ulasan::where('id_user', $user->id)->paginate(10);

        return view('user.pages.ulasan.ulasan', [
            'title' => 'Ulasan',
            'user' => $user,
            'ulasan' => $ulasan,
        ]);
    }
}
