@extends('layouts.app')

@section('content')
<h2>Edit Pelanggan</h2>

<form action="{{ url('pelanggan/' . $pelanggan->pel_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">Golongan</label>
        <select name="pel_id_gol">
            @foreach($golongans as $g)
            <option value="{{ $g->gol_id }}" {{ $g->gol_id == $pelanggan->pel_id_gol ? 'selected' : '' }}>{{
                $g->gol_nama }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="">No Pelanggan</label>
            <input type="text" name="pel_no" id="" class="form-control" value="{{ $pelanggan->pel_no }}">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{ $pelanggan->pel_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $pelanggan->pel_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{ $pelanggan->pel_hp }}">
        </div>
        <div class="mb-3">
            <label for="">NIK</label>
            <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $pelanggan->pel_ktp }}">
        </div>
        <div class="mb-3">
            <label for="">NO SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control" value="{{ $pelanggan->pel_seri }}">
        </div>
        <div class="mb-3">
            <label for="">Meteran</label>
            <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $pelanggan->pel_meteran }}">
        </div>
        <div class="mb-3">
            <label for="">Status</label>
            <select name="pel_aktif" id="pel_aktif" value="{{ $pelanggan->pel_aktif }}">
                <option value="Y">Aktif</option>
                <option value="N">Non-Aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">User</label>
            <select name="pel_id_user">
                @foreach($users as $u)
                <option value="{{ $g->gol_id }}" {{ $u->id == $pelanggan->pel_id_gol ? 'selected' : '' }}>{{
                    $u->email }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection