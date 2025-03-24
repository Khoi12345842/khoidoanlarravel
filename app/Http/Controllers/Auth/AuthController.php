<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // Đảm bảo `use App\Http\Controllers\Controller;` thay vì `Auth\Controller`
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('success', 'Đăng nhập thành công!');
        }

        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng'])->withInput();
    }

    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.login')->with('success', 'Đăng ký thành công! Hãy đăng nhập.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login')->with('success', 'Bạn đã đăng xuất.');
    }
// Đăng nhập bằng Google
public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    try {
        \Log::info('Starting Google login process');
        $googleUser = Socialite::driver('google')->user();
        \Log::info('Google user data: ', (array)$googleUser);

        $user = User::where('email', $googleUser->email)->first();
        \Log::info('User lookup result: ', ['email' => $googleUser->email, 'found' => $user ? true : false]);

        if ($user) {
            $user->update([
                'google_id' => $googleUser->id,
                'avatar' => $googleUser->avatar,
            ]);
            \Log::info('User updated: ' . $googleUser->email);
        } else {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'avatar' => $googleUser->avatar,
                'password' => Hash::make(Str::random(16)),
            ]);
            \Log::info('User created: ' . $googleUser->email);
        }

        Auth::login($user, true);
        \Log::info('User logged in: ' . $googleUser->email);
        return redirect()->intended('/')->with('success', 'Đăng nhập bằng Google thành công!');
    } catch (\Exception $e) {
        \Log::error('Google login failed: ' . $e->getMessage());
        \Log::error('Stack trace: ' . $e->getTraceAsString());
        return redirect('/admin/login')->with('error', 'Đăng nhập bằng Google thất bại. Vui lòng thử lại: ' . $e->getMessage());
    }
}
}
