@extends('layout')

@section('main')
    <div style="display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 130px);">
        <div style="background-color: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 2rem; width: 100%; max-width: 400px;">
            <h2 style="font-size: 1.5rem; font-weight: bold; color: #343a40; text-align: center; margin-bottom: 1rem;">Kayıt Ol</h2>
            <p style="color: #6c757d; text-align: center; margin-bottom: 1.5rem;">Yeni bir hesap oluşturun</p>

            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div style="margin-bottom: 1rem;">
                    <label for="name" style="display: block; font-weight: bold; margin-bottom: 0.5rem; color: #495057;">Ad Soyad</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem; border: 1px solid #ced4da; border-radius: 4px; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; font-weight: bold; margin-bottom: 0.5rem; color: #495057;">Email Adresi</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem; border: 1px solid #ced4da; border-radius: 4px; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="password" style="display: block; font-weight: bold; margin-bottom: 0.5rem; color: #495057;">Şifre</label>
                    <input type="password" id="password" name="password" required style="width: 100%; padding: 0.5rem; border: 1px solid #ced4da; border-radius: 4px; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="role_id" style="display: block; font-weight: bold; margin-bottom: 0.5rem; color: #495057;">Rol</label>
                    <select id="role_id" name="role_id" required style="width: 100%; padding: 0.5rem; border: 1px solid #ced4da; border-radius: 4px; font-size: 1rem;">
                        <option value="" selected disabled>Rol Seçiniz</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="class_id" style="display: block; font-weight: bold; margin-bottom: 0.5rem; color: #495057;">Sınıf</label>
                    <select id="class_id" name="class_id" required style="width: 100%; padding: 0.5rem; border: 1px solid #ced4da; border-radius: 4px; font-size: 1rem;">
                        <option value="" selected disabled>Sınıf Seçiniz</option>
                        @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" style="width: 100%; background-color: #28a745; color: #fff; border: none; padding: 0.75rem; border-radius: 4px; font-size: 1rem; font-weight: bold; cursor: pointer; transition: background-color 0.3s ease;">Kayıt Ol</button>
            </form>

            <p style="text-align: center; margin-top: 1rem; color: #6c757d;">
                Zaten hesabınız var mı?
                <a href="{{ route('login') }}" style="color: #28a745; text-decoration: none; font-weight: bold;">Giriş Yap</a>
            </p>
        </div>
    </div>
@endsection

