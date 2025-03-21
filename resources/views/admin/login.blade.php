@extends('admin.admin')

@section('title', 'Đăng nhập')

@section('admin-content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="login-container">
    <div class="login-image">
        <img src="{{ asset('images/login.png') }}" alt="Login Illustration">
    </div>
    <div class="login-form-wrapper">
        <div class="tabs">
            <a href="{{ route('admin.login') }}" class="tab active">ĐĂNG NHẬP</a>
            <br>
            <a href="{{ route('admin.register') }}" class="tab">ĐĂNG KÝ</a>
        </div>
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
        <form action="{{ route('admin.login') }}" method="POST" class="login-form">
            @csrf
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email đăng nhập *" required value="{{ old('email') }}" class="form-control">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Mật khẩu *" required class="form-control">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="forgot-password">
                <a href="#">Quên mật khẩu?</a>
            </div>

            <button type="submit" class="btn btn-login">ĐĂNG NHẬP</button>
        </form>

        <div class="social-login">
            <p>Hoặc đăng nhập bằng</p>
            <a href="{{ route('google.login') }}" class="btn btn-google"><span class="social-icon"></span> ĐĂNG NHẬP BẰNG GOOGLE</a>
            
        </div>

        <div class="member-benefits">
            <h3>QUYỀN LỢI THÀNH VIÊN</h3>
            <ul>
                <li><span class="check-icon">✔</span> Mua hàng khắp thế giới cực dễ, nhanh chóng</li>
                <li><span class="check-icon">✔</span> Theo dõi chi tiết đơn hàng, địa chỉ thanh toán dễ dàng</li>
            </ul>
            <p class="privacy-note">Savani cam kết bảo mật và không bao giờ chia sẻ thông tin mà chưa có sự đồng ý của bạn</p>
        </div>
    </div>
</div>
@endsection

