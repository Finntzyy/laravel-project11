@extends('layouts.app')
@section('content')

<h2>Golongan</h2>

<a href="{{ url('golongan/create') }}" class="btn btn-primary mb-3 float-end">Add Golongan</a>

<table class="table table-bordered">
      <tr>
            <th>ID</th>
            <th>Kode Golongan</th>
            <th>Nama Golongan</th>
            <th>EDIT</th>
            <th>Delete</th>
      </tr>
      @foreach ($rows as $row)
      <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode}}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/edit/' . $row->gol_id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                  <form action="{{ url('golongan/' . $row->gol_id) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger"
                              onclick="return confirm('Are you sure?')">
                  </form>
      </tr>
      @endforeach

</table>

@endsection