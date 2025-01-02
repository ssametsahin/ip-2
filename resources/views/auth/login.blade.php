@extends('layout')

@section('main')
    <div style="display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 130px);">
        <div style="background-color: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 2rem; width: 100%; max-width: 400px;">
            <h2 style="font-size: 1.5rem; font-weight: bold; color: #343a40; text-align: center; margin-bottom: 1rem;">Giriş Yap</h2>
            <p style="color: #6c757d; text-align: center; margin-bottom: 1.5rem;">Hesabınıza giriş yapın</p>

            <form action="{{ route('login.post') }}" method="POST">
                @csrf

                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; font-weight: bold; margin-bottom: 0.5rem; color: #495057;">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 0.5rem; border: 1px solid #ced4da; border-radius: 4px; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="password" style="display: block; font-weight: bold; margin-bottom: 0.5rem; color: #495057;">Şifre</label>
                    <input type="password" id="password" name="password" required style="width: 100%; padding: 0.5rem; border: 1px solid #ced4da; border-radius: 4px; font-size: 1rem;">
                </div>

                <button type="submit" style="width: 100%; background-color: #28a745; color: #fff; border: none; padding: 0.75rem; border-radius: 4px; font-size: 1rem; font-weight: bold; cursor: pointer; transition: background-color 0.3s ease;">Giriş Yap</button>
            </form>

            @error('email')
            <div style="color: #dc3545; text-align: center; margin-top: 1rem;">{{ $message }}</div>
            @enderror

            <p style="text-align: center; margin-top: 1rem; color: #6c757d;">
                Hesabınız yok mu?
                <a href="{{ route('register.show') }}" style="color: #28a745; text-decoration: none; font-weight: bold;">Kayıt Ol</a>
            </p>
        </div>
    </div>
@endsection

