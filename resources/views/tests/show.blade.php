@extends('layout')

@section('main')
    <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <h1 style="font-size: 2.5rem; color: #343a40; margin-bottom: 30px; text-align: center;">{{ $test->name }} Soruları</h1>
        <form method="post" action="/tests/send" style="background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            @csrf
            <input type="hidden" name="exam_id" value="{{ $test->id }}" />

            @foreach($test->questions as $question)
                <div class="question" style="margin-bottom: 30px; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
                    <p style="font-size: 1.2rem; color: #343a40; margin-bottom: 15px;"><strong>Soru: </strong>{{ $question->question_text }}</p>

                    <ul style="list-style-type: none; padding: 0;">
                        @foreach(['a', 'b', 'c', 'd'] as $option)
                            <li style="margin-bottom: 10px;">
                                <label for="question_{{ $question->id }}_option_{{ $option }}" style="display: flex; align-items: center; cursor: pointer;">
                                    <input type="radio" id="question_{{ $question->id }}_option_{{ $option }}"
                                           name="question_{{ $question->id }}_option"
                                           value="{{ $option }}" style="margin-right: 10px;">
                                    <span style="font-size: 1rem; color: #495057;">{{ $question->answer->{"option_$option"} }}</span>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <button type="submit"  style="background-color: #17a2b8; color: #fff; border: none; padding: 12px 24px; border-radius: 4px; cursor: pointer; font-size: 18px; transition: background-color 0.3s; display: block; margin: 0 auto;">YANITLARI GÖNDER</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const questions = document.querySelectorAll('.question');

            form.addEventListener('submit', function(event) {
                let allAnswered = true;

                questions.forEach(function(question) {
                    const options = question.querySelectorAll('input[type="radio"]');
                    const isChecked = Array.from(options).some(option => option.checked);

                    if (!isChecked) {
                        allAnswered = false;
                        question.style.border = '2px solid #dc3545';
                        question.style.backgroundColor = '#fff5f5';
                    } else {
                        question.style.border = 'none';
                        question.style.backgroundColor = '#f8f9fa';
                    }
                });

                if (!allAnswered) {
                    event.preventDefault();
                    alert('Lütfen tüm soruları yanıtlayın.');
                }
            });
        });
    </script>
@endsection
