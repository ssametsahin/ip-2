@extends('layout')

@section('main')
    <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <h1 style="font-size: 2.5rem; color: #343a40; margin-bottom: 30px; text-align: center;">Test Oluştur</h1>
        <form action="{{ route('tests.store') }}" method="POST" style="background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="class_id" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">Sınıf</label>
                <select name="class_id" id="class_id" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                    <option value="">Sınıf Seçiniz</option>
                    @foreach($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="subject_id" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">Ders</label>
                <select name="subject_id" id="subject_id" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                    <option value="">Önce sınıf seçiniz</option>
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="topic_id" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">Konu</label>
                <select name="topic_id" id="topic_id" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                    <option value="">Önce ders seçiniz</option>
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="test_name" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">Test Adı</label>
                <input type="text" name="test_name" id="test_name" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 10px; font-weight: bold; color: #495057;">Sorular</label>
                <div id="questions-container"></div>
                <button type="button" id="add-question" style="background-color: #6c757d; color: #fff; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-size: 16px; transition: background-color 0.3s;">Soru Ekle</button>
            </div>

            <button type="submit" style="background-color: #28a745; color: #fff; border: none; padding: 12px 24px; border-radius: 4px; cursor: pointer; font-size: 18px; transition: background-color 0.3s;">Kaydet</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const classSelect = document.getElementById('class_id');
            const subjectSelect = document.getElementById('subject_id');
            const topicSelect = document.getElementById('topic_id');
            const addQuestionButton = document.getElementById('add-question');
            const questionsContainer = document.getElementById('questions-container');


            classSelect.addEventListener('change', function () {
                const classId = this.value;
                subjectSelect.innerHTML = '<option value="">Dersler yükleniyor...</option>';
                topicSelect.innerHTML = '<option value="">Önce ders seçiniz</option>';

                if (classId) {
                    fetch('{{ route("get.subjects") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ class_id: classId })
                    })
                        .then(response => response.json())
                        .then(data => {
                            subjectSelect.innerHTML = '<option value="">Ders Seçiniz</option>';
                            data.forEach(subject => {
                                subjectSelect.innerHTML += `<option value="${subject.id}">${subject.name}</option>`;
                            });
                        });
                }
            });


            subjectSelect.addEventListener('change', function () {
                const subjectId = this.value;
                topicSelect.innerHTML = '<option value="">Konular yükleniyor...</option>';

                if (subjectId) {
                    fetch('{{ route("get.topics") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ subject_id: subjectId })
                    })
                        .then(response => response.json())
                        .then(data => {
                            topicSelect.innerHTML = '<option value="">Konu Seçiniz</option>';
                            data.forEach(topic => {
                                topicSelect.innerHTML += `<option value="${topic.id}">${topic.name}</option>`;
                            });
                        });
                }
            });


            addQuestionButton.addEventListener('click', function () {
                const questionIndex = questionsContainer.children.length + 1;

                const questionHTML = `
                <div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px; position: relative;">
                    <button type="button" class="remove-question" style="position: absolute; top: 10px; right: 10px; background-color: #dc3545; color: #fff; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; font-size: 14px;">Soruyu Kaldır</button>
                    <h3 style="font-size: 1.2rem; color: #343a40; margin-bottom: 15px;">Soru ${questionIndex}</h3>
                    <div style="margin-bottom: 15px;">
                        <label for="question_${questionIndex}" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">Soru Metni</label>
                        <input type="text" name="questions[${questionIndex}][text]" id="question_${questionIndex}" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" placeholder="Soru metni" required>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
                        <div>
                            <label for="option_a_${questionIndex}" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">A Şıkkı</label>
                            <input type="text" name="questions[${questionIndex}][option_a]" id="option_a_${questionIndex}" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                        </div>
                        <div>
                            <label for="option_b_${questionIndex}" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">B Şıkkı</label>
                            <input type="text" name="questions[${questionIndex}][option_b]" id="option_b_${questionIndex}" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                        </div>
                        <div>
                            <label for="option_c_${questionIndex}" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">C Şıkkı</label>
                            <input type="text" name="questions[${questionIndex}][option_c]" id="option_c_${questionIndex}" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                        </div>
                        <div>
                            <label for="option_d_${questionIndex}" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">D Şıkkı</label>
                            <input type="text" name="questions[${questionIndex}][option_d]" id="option_d_${questionIndex}" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                        </div>
                    </div>
                    <div style="margin-top: 15px;">
                        <label for="correct_answer_${questionIndex}" style="display: block; margin-bottom: 5px; font-weight: bold; color: #495057;">Doğru Cevap</label>
                        <select name="questions[${questionIndex}][correct_answer]" id="correct_answer_${questionIndex}" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; font-size: 16px;" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
            `;

                questionsContainer.insertAdjacentHTML('beforeend', questionHTML);
            });


            questionsContainer.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-question')) {
                    e.target.closest('div').remove();

                    const questions = questionsContainer.querySelectorAll('div > h3');
                    questions.forEach((question, index) => {
                        question.textContent = `Soru ${index + 1}`;
                    });
                }
            });
        });
    </script>
@endsection

