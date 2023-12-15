@extends('layouts.app')

@section('content')
<h2>Add Pelanggan</h2>

<form action="{{ url('pelanggan') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Golongan</label>
        <select name="pel_id_gol">
            @foreach($golongans as $g)
            <option value="{{ $g->gol_id }}">{{ $g->gol_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="">No Pelanggan</label>
        <input type="text" name="pel_no" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Nama</label>
        <input type="text" name="pel_nama" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input type="text" name="pel_alamat" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">No HP</label>
        <input type="text" name="pel_hp" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">NIK</label>
        <input type="text" name="pel_ktp" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">NO SERI</label>
        <input type="text" name="pel_seri" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Meteran</label>
        <input type="text" name="pel_meteran" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Status</label>
        <select name="pel_aktif" id="pel_aktif">
            <option value="Y">Aktif</option>
            <option value="N">Non-Aktif</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">User</label>
        <select name="pel_id_user">
            @foreach($users as $u)
            <option value="{{ $u->id }}">{{ $u->email }}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection