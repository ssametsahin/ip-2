@extends('layout')

@section('main')
    <div style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h1 style="font-size: 2.5rem; color: #343a40; margin: 0;">Dashboard</h1>
            <a href="{{ route('tests.create') }}" style="background-color: #28a745; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-size: 1rem; transition: background-color 0.3s ease;">Test Oluştur</a>
        </div>
        <div style="margin-top: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px;">
            <h2 style="font-size: 1.8rem; color: #343a40; margin-bottom: 20px;">Son Aktiviteler</h2>

        </div>
    </div>
@endsection

