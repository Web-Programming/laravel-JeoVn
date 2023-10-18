{{-- @include('layout.header', ['title' => 'Halaman Fakultas']) --}}
@extends('layout.master')
@section('title', 'Halaman Fakultas')

@section('content')
<h2>Fakultas</h2>
{{-- $ilkom --}}
<ul>

    {{-- @foreach ($fakultas as $item)
        <li> {{ $item }} </li>
        @endforeach--}}

    @if (count($fakultas) > 0)
        @foreach ($fakultas as $item)
        <li> {{ $item }} </li>
        @endforeach
    @else
        <li>Belum ada data</li>
    @endif
</ul>
@endsection

{{-- @include('layout.footer') --}}