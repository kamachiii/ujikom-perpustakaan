<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.dashboard')->with('users', $users);
    }

    public function buku()
    {
        $bukus = Buku::autosort()->paginate(10);
        return view('admin.buku')->with([
            'bukus' => $bukus,
        ]);
    }

    public function pinjam()
    {
        $bukus = Buku::where('status', 'Tersedia')->paginate(6);
        return view('peminjaman')->with([
            'bukus' => $bukus,
        ]);
    }

    public function pinjamAction($id)
    {
        $peminjaman = Peminjaman::create([
            'user_id' => Auth::user()->id,
            'buku_id' => $id,
        ]);
        $buku = Buku::find($id)->update([
            'status' => 'Tidak tersedia'
        ]);
        if ($peminjaman && $buku) {
            Alert::success('Success!', 'Pinjam buku successfully');
            return redirect()->route('pinjam');
        } else {
            Alert::error('Failed!', 'Pinjam buku failed');
            return redirect()->route('pinjam');
        }
    }

    public function relasi()
    {
        $bukus = Buku::with('peminjamans')->get();
        return response()->json($bukus);
    }
}
