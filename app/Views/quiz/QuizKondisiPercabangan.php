<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Kondisi Percabangan</title>
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
            <div class="title">Quiz Kondisi Dan Percabangan</div>
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
                question: "Apa pengertian dari kondisi percabangan?",
                options: ["Struktur dalam pemrograman untuk membuat perulangan", "Struktur dalam pemrograman untuk membuat keputusan", "Struktur dalam pemrograman untuk mengurutkan data", "Struktur dalam pemrograman untuk menampilkan output"],
                correct: 2
            },
            {
                question: "Apa fungsi utama dari kondisi percabangan?",
                options: ["Menjalankan kode yang sama berdasarkan kondisi yang sama", "Membuat program menjadi statis", "Menghindari eksekusi kode yang tidak diperlukan", "Meningkatkan fleksibilitas dan kontrol alur eksekusi dalam program"],
                correct: 4
            },
            {
                question: "Jenis kondisi percabangan yang memeriksa suatu kondisi, dan jika kondisi tersebut benar, maka kode di dalam blok if akan dijalankan adalah...",
                options: ["if-else statement", "if-else if-else statement", "switch statement", "if statement"],
                correct: 4
            },
            {
                question: "Jenis kondisi percabangan yang memeriksa suatu kondisi, dan jika kondisi tersebut benar, maka kode di dalam blok if akan dijalankan; jika salah, maka kode di dalam blok else akan dijalankan adalah...",
                options: ["if statement", "if-else if-else statement", "switch statement", "if-else statement"],
                correct: 4
            },
            {
                question: "Apa studi kasus yang digunakan untuk menjelaskan implementasi kondisi percabangan?",
                options: ["Pengecekan Umur untuk Pemilih", "Menentukan Grade Berdasarkan Nilai", "Menghitung Luas Lingkaran", "Menentukan Bilangan Prima"],
                correct: 1
            },
            {
                question: "Dalam bahasa pemrograman apa studi kasus 'Pengecekan Umur untuk Pemilih' diimplementasikan?",
                options: ["Python", "C++", "Java", "JavaScript"],
                correct: 2
            },
            {
                question: "Apa output dari studi kasus 'Pengecekan Umur untuk Pemilih' jika usia yang dimasukkan adalah 20?",
                options: ["Anda memenuhi syarat untuk memberikan suara dalam pemilihan.", "Anda belum cukup usia untuk memberikan suara dalam pemilihan.", "Usia yang dimasukkan tidak valid.", "Silakan coba lagi pada saat Anda mencapai usia 17 tahun."],
                correct: 2
            },
            {
                question: "Dalam bahasa pemrograman C++, apa yang akan dijalankan jika kondisi pada percabangan if adalah benar?",
                options: ["Kode di dalam blok if", "Kode di dalam blok else", "Kode di dalam blok if dan else", "Kode di luar blok if dan else"],
                correct: 1
            },
            {
                question: "Jenis kondisi percabangan yang memeriksa beberapa kondisi secara berurutan, dan menjalankan blok kode yang sesuai dengan kondisi pertama yang benar adalah...",
                options: ["if-else statement", "switch statement", "if statement", "if-else if-else statement"],
                correct: 4
            },
            {
                question: "Jenis kondisi percabangan yang memilih salah satu dari banyak blok kode untuk dijalankan berdasarkan nilai dari suatu ekspresi adalah...",
                options: ["if statement", "if-else if-else statement", "switch statement", "for statement"],
                correct: 3
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