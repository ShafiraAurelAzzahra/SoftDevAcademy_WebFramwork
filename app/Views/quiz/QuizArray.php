<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f4f8;
        }

        .container {
            max-width: 850px;
            margin: 100px auto;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 40px;
        }

        .title {
            font-size: 2.5em;
            font-weight: bold;
            color: #191970;
        }

        .question {
            margin-top: 20px;
            font-size: 1.2em;
            text-align: left;
            color: #34495e;
        }

        .options {
            margin-top: 10px;
            text-align: left;
        }

        .options button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #ecf0f1;
            transition: background-color 0.3s ease;
        }

        .options button:hover {
            background-color: #bdc3c7;
        }

        .selected {
            background-color: #2ecc71;
            color: white;
        }

        #result {
            font-size: 1.5em;
            margin-top: 20px;
            color: white;
            background-color: #191970;
            padding: 20px;
            border-radius: 5px;
        }

        .back-button {
            background-color: #191970;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-flex;
            align-items: center;
        }

        .back-button:hover {
            background-color: #0f0f6d;
            transform: scale(1.02);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">Quiz Array</div>
        </div>
        <div id="quiz"></div>
        <div id="result"></div>
        <div id="homeButton" class="back-bar" style="display:none;">
            <div class="container">
                <a href="javascript:history.back()" class="back-button">
                    <i class="bi bi-arrow-left-circle me-2"></i> Kembali
                </a>
            </div>
        </div>
    </div>

    <script>
        const questions = [{
                question: "Apa yang dimaksud dengan array dalam pemrograman?",
                options: [
                    "Struktur data yang terdiri dari berbagai tipe data yang berbeda",
                    "Struktur data yang terdiri dari sekumpulan elemen yang memiliki tipe data yang sama",
                    "Struktur data yang hanya dapat menyimpan angka",
                    "Struktur data yang hanya digunakan untuk perhitungan matematika"
                ],
                correct: 1
            },
            {
                question: "Apa fungsi utama dari array dalam pemrograman?",
                options: [
                    "Menyimpan data dalam urutan acak",
                    "Menyimpan data dengan tipe data yang berbeda",
                    "Menyimpan data secara berurutan dan mempermudah pengelolaan data",
                    "Menyimpan data yang tidak terbatas dalam jumlahnya"
                ],
                correct: 3
            },
            {
                question: "Apa yang dimaksud dengan array satu dimensi?",
                options: [
                    "Array yang terdiri dari dua baris elemen",
                    "Array yang hanya dapat menyimpan angka",
                    "Array yang terdiri dari satu baris elemen",
                    "Array yang hanya terdiri dari satu elemen"
                ],
                correct: 3
            },
            {
                question: "Apa yang dimaksud dengan array multidimensi?",
                options: [
                    "Array yang terdiri dari lebih dari satu baris elemen",
                    "Array yang hanya terdiri dari satu elemen",
                    "Array yang hanya dapat menyimpan angka",
                    "Array yang terdiri dari dua elemen"
                ],
                correct: 1
            },
            {
                question: "Apa yang dimaksud dengan tingkat (level) dari sebuah array dalam pemrograman?",
                options: [
                    "Jumlah baris array",
                    "Jumlah kolom array",
                    "Jarak dari elemen pertama ke elemen terakhir dalam array",
                    "Jumlah dimensi array"
                ],
                correct: 4
            },
            {
                question: "Manakah pernyataan yang benar tentang array satu dimensi?",
                options: [
                    "Array satu dimensi hanya dapat menyimpan satu elemen",
                    "Array satu dimensi terdiri dari dua baris elemen",
                    "Setiap elemen dalam array satu dimensi dapat diakses menggunakan dua indeks",
                    "Setiap elemen dalam array satu dimensi memiliki indeks tunggal"
                ],
                correct: 4
            },
            {
                question: "Apa yang dimaksud dengan operasi \"traverse\" pada array?",
                options: [
                    "Menghapus elemen tertentu dari array",
                    "Menambahkan elemen baru ke dalam array",
                    "Mengunjungi setiap elemen dalam array satu per satu",
                    "Mencari elemen tertentu dalam array"
                ],
                correct: 3
            },
            {
                question: "Manakah dari pernyataan berikut yang benar tentang operasi pada array?",
                options: [
                    "Array tidak mendukung operasi kolektif seperti iterasi",
                    "Array tidak dapat disimpan dalam variabel",
                    "Array hanya dapat menyimpan data dengan tipe data yang berbeda",
                    "Array mendukung operasi kolektif seperti iterasi, pencarian, dan modifikasi elemen"
                ],
                correct: 4
            },
            {
                question: "Apa yang akan terjadi jika kita mencoba mengakses indeks array yang tidak valid?",
                options: [
                    "Program akan menghasilkan pesan kesalahan (error message)",
                    "Program akan tetap berjalan tanpa ada yang terjadi",
                    "Program akan menambahkan elemen baru ke dalam array",
                    "Program akan menghapus elemen tertentu dari array"
                ],
                correct: 1
            },
            {
                question: "Manakah dari pernyataan berikut yang benar tentang array multidimensi?",
                options: [
                    "Array multidimensi hanya terdiri dari satu baris elemen",
                    "Setiap elemen dalam array multidimensi memiliki indeks tunggal",
                    "Array multidimensi hanya dapat menyimpan angka",
                    "Array multidimensi memiliki lebih dari satu dimensi dan dapat berupa matriks berbaris dan berkolom"
                ],
                correct: 4
            }
        ];


        let currentQuestion = 0;
        let score = 0;
        let selectedAnswers = Array(questions.length).fill(null);

        function loadQuestion() {
            const quizContainer = document.getElementById('quiz');
            quizContainer.innerHTML = `
                <div class="question">${currentQuestion + 1}. ${questions[currentQuestion].question}</div>
                <div class="options">
                    ${questions[currentQuestion].options.map((option, index) => `
                        <button onclick="selectAnswer(${index})" class="${selectedAnswers[currentQuestion] === index ? 'selected' : ''}">${option}</button>
                    `).join('')}
                </div>
            `;
        }

        function selectAnswer(selected) {
            selectedAnswers[currentQuestion] = selected;
            const buttons = document.querySelectorAll('.options button');
            buttons.forEach((button, index) => {
                button.classList.toggle('selected', index === selected);
            });

            setTimeout(() => {
                if (currentQuestion < questions.length - 1) {
                    currentQuestion++;
                    loadQuestion();
                } else {
                    calculateScore();
                    showResult();
                }
            }, 500); // Delay of 0.5 seconds before moving to the next question
        }

        function calculateScore() {
            score = selectedAnswers.reduce((total, answer, index) => {
                return total + (answer === questions[index].correct ? 10 : 0);
            }, 0);
        }

        function showResult() {
            const quizContainer = document.getElementById('quiz');
            const resultContainer = document.getElementById('result');
            quizContainer.innerHTML = '';
            resultContainer.innerHTML = `Nilai akhir Anda: ${score}`;
            document.getElementById('homeButton').style.display = 'block';
        }

        loadQuestion();
    </script>
</body>

</html>