<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::with('golongan', 'user')->orderBy('pel_id')->get();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        $golongans = Golongan::all();
        $users = User::all();
        return view('pelanggan.create', compact('golongans', 'users'));
    }

    public function store(Request $request)
    {
        Pelanggan::create($request->all());
        return redirect()->route('pelanggan.index');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::with('golongan', 'user')->find($id);
        $golongans = Golongan::all();
        $users = User::all();
        return view('pelanggan.edit', compact('pelanggan', 'golongans', 'users'));
    }

    public function update(Request $request, $id)
    {
        Pelanggan::find($id)->update($request->all());
        return redirect()->route('pelanggan.index');
    }

    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return redirect()->route('pelanggan.index');
    }
}