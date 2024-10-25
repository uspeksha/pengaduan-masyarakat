<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function riwayatPengaduan()
    {
        return view('dashboard.user-role.riwayat-pengaduan');
    }
}
