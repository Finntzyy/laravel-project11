@extends('layouts.app')
@section('content')
<h2>Pelanggan</h2>

<a href="{{ url('/pelanggan/create') }}" class="btn btn-primary mb-3 float-end">Input Pelanggan</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>GOLONGAN</th>
        <th>NO. Pelanggan</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO HP</th>
        <th>NIK KTP</th>
        <th>SERI</th>
        <th>METERAN</th>
        <th>STATUS AKTIF</th>
        <th>USER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @php $no = 1; @endphp
    @foreach($pelanggan as $p)
    <tr>
        <td>{{ $p->pel_id }}</td>
        <td>{{ $p->golongan->gol_nama }}</td>
        <td>{{ $p->pel_no }}</td>
        <td>{{ $p->pel_nama }}</td>
        <td>{{ $p->pel_alamat }}</td>
        <td>{{ $p->pel_hp }}</td>
        <td>{{ $p->pel_ktp }}</td>
        <td>{{ $p->pel_seri }}</td>
        <td>{{ $p->pel_meteran }}</td>
        <td>{{ $p->pel_aktif }}</td>
        <td>{{ $p->user->email }}</td>
        <td><a href="{{ url('pelanggan/edit/' . $p->pel_id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pelanggan/' . $p->pel_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
    </tr>
    @endforeach
</table>
@endsection