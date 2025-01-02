@extends('layout')
@section('main')
<h1>{{ $topic->name }} Testleri</h1>

    @foreach($topic->tests as $test)
        <div class="class-box">
            <a href="{{ route('tests.show', $test->id) }}">{{ $test->name }}</a>
        </div>
    @endforeach
@endsection
