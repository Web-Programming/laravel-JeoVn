{{-- @include('layout.header', ['title' => 'Halaman Fakultas']) --}}

@extends('layout.master')
@section('title', 'Halaman Fakultas')

@section('content')
<h2>Fakultas</h2>
<ul>
    @if (count($fakultas) > 0)
        @foreach ($fakultas as $item)
        <li> {{ $item }} </li>
        @endforeach
    @else
        <li>Belum Ada Data</li>
    @endif
</ul>

<x-alert : message ="'Ini pesan sukses'"/>
<x-form.input/>
@endsection

{{-- @include('layout.footer') --}}