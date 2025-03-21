@extends('admin.admin')

@section('title', 'Đăng ký')

@section('admin-content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<div class="register-wrapper">
    <h2>Đăng ký</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('admin.register') }}" method="POST" class="register-form">
        @csrf
        <div class="form-group">
            <label for="name">Họ và tên:</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" id="phone" name="phone" required value="{{ old('phone') }}" class="form-control">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="{{ old('email') }}" class="form-control">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Nội dung:</label>
            <textarea id="content" name="content" class="form-control">{{ old('content') }}</textarea>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Đăng ký</button>
    </form>
    <p class="login-link">Đã có tài khoản? <a href="{{ route('admin.login') }}">Đăng nhập</a></p>
</div>
@endsection


