@extends('layout.master')
@section('title', 'Halaman Mahasiswa')

@section('content')
<h2>Mahasiswa</h2>
    <table border="2px">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Dibuat Pada</th>
                <th>Diupdate pada</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allmahasiswa as $item)
            <tr>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
