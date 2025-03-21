@extends('layouts.app')

@section('title', 'Admin - ' . (isset($title) ? $title : 'Trang quản trị'))

@section('content')
<div class="admin-container">
    @yield('admin-content')
</div>
@endsection

@section('css')
    @yield('admin-css')
@endsection