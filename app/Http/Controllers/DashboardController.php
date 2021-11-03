<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Dokter;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $brand = Brand::count();
        $dokter = Dokter::count();
        $transaction = Transaction::where('status', 'Selesai')->count();
        $transactions = Transaction::orderByDesc('created_at')->take(5)->get();
        return view('dashboard.index', compact('brand', 'dokter', 'transaction', 'transactions'));
    }
}
