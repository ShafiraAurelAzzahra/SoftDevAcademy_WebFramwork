<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Looping</title>
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
            <div class="title">Quiz Looping</div>
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
                question: "Apa tujuan utama dari penggunaan looping dalam pemrograman?",
                options: ["Untuk menyusun struktur data", "Untuk membuat keputusan", "Untuk mengulang blok kode secara berulang", "Untuk memisahkan kode menjadi modul-modul kecil"],
                correct: 3
            },
            {
                question: "Looping yang mana yang akan dieksekusi setidaknya sekali, bahkan jika kondisi awal tidak terpenuhi?",
                options: ["while", "do-while", "for", "foreach"],
                correct: 2
            },
            {
                question: "Di mana kita mengevaluasi kondisi awal pada perulangan for di dalam bahasa pemrograman C++?",
                options: ["Di dalam tanda kurung awal ( )", "Di dalam blok kode perulangan", "Sebelum tanda titik koma pertama ( ; )", "Setelah tanda titik koma pertama ( ; )"],
                correct: 3
            },
            {
                question: "Manakah pernyataan yang benar tentang perulangan while?",
                options: ["Eksekusi loop terjadi setidaknya sekali, terlepas dari kondisi", "Kondisi evaluasi terlebih dahulu sebelum eksekusi loop", "Loop berhenti ketika kondisi menjadi false", "Loop berhenti ketika kondisi menjadi true"],
                correct: 3
            },
            {
                question: "Manakah pernyataan yang benar tentang perulangan do-while?",
                options: ["Kondisi evaluasi terlebih dahulu sebelum eksekusi loop", "Eksekusi loop terjadi setidaknya sekali, terlepas dari kondisi", "Loop berhenti ketika kondisi menjadi true", "Loop berhenti ketika kondisi menjadi false"],
                correct: 2
            },
            {
                question: "Apa yang terjadi jika kita lupa meningkatkan atau mengurangi nilai iterasi dalam perulangan for?",
                options: ["Perulangan akan berjalan untuk selamanya", "Perulangan tidak akan pernah dijalankan", "Kode akan menghasilkan kesalahan kompilasi", "Kode akan menghasilkan kesalahan logika"],
                correct: 1
            },
            {
                question: "Di dalam perulangan for, apa yang dilakukan oleh blok kode yang ditetapkan di bagian 'update'?",
                options: ["Menetapkan nilai awal variabel iterasi", "Memeriksa kondisi perulangan", "Menjalankan blok kode perulangan", "Memperbarui nilai variabel iterasi"],
                correct: 4
            },
            {
                question: "Manakah perulangan yang paling sesuai digunakan ketika kita tahu berapa kali perulangan akan berlangsung?",
                options: ["while", "do-while", "for", "foreach"],
                correct: 3
            },
            {
                question: "Apa yang akan terjadi jika kita menggunakan pernyataan break di dalam loop?",
                options: ["Loop akan melanjutkan iterasi berikutnya", "Loop akan menghentikan eksekusi dan keluar dari loop", "Loop akan kembali ke awal dan mulai iterasi baru", "Loop akan tetap berjalan tanpa menghentikan eksekusi"],
                correct: 2
            },
            {
                question: "Manakah jenis perulangan yang paling cocok digunakan ketika kita ingin mengulang sebuah blok kode untuk setiap elemen dalam sebuah koleksi?",
                options: ["while", "do-while", "for", "foreach"],
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