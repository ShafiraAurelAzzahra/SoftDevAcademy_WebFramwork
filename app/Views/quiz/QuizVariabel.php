<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Variabel dan Konstanta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
            <div class="title">Quiz Variabel dan Konstanta</div>
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
                question: "Apa pengertian dari variabel dalam pemrograman?",
                options: [
                    "Tempat penyimpanan data yang nilainya tetap dan tidak berubah",
                    "Tempat penyimpanan data yang nilainya dapat berubah selama program berjalan",
                    "Perintah untuk melakukan operasi matematika",
                    "Struktur data untuk menyimpan kumpulan data yang terstruktur"
                ],
                correct: 1
            },
            {
                question: "Apa fungsi utama dari variabel dalam pemrograman?",
                options: [
                    "Mencegah perubahan nilai yang seharusnya tetap",
                    "Menyimpan nilai tetap yang digunakan berulang kali dalam program",
                    "Menyimpan data sementara untuk digunakan dan dimanipulasi oleh program",
                    "Menghitung luas lingkaran dan segitiga"
                ],
                correct: 2
            },
            {
                question: "Apa jenis variabel yang digunakan untuk menyimpan bilangan bulat dalam pemrograman?",
                options: ["Floating-point (float)", "String (str)", "Integer (int)", "Boolean (bool)"],
                correct: 2
            },
            {
                question: "Apa jenis konstanta yang digunakan untuk menyimpan teks atau karakter yang tidak berubah dalam pemrograman?",
                options: ["Konstanta numerik", "Konstanta karakter atau string", "Konstanta boolean", "Konstanta desimal"],
                correct: 1
            },
            {
                question: "Studi kasus 'Menghitung Luas Lingkaran' menggunakan rumus matematika apa?",
                options: ["Keliling lingkaran", "Volume bola", "Luas segitiga", "Luas lingkaran"],
                correct: 3
            },
            {
                question: "Dalam bahasa pemrograman apa studi kasus 'Menghitung Luas Lingkaran' diimplementasikan?",
                options: ["Python", "C++", "Java", "JavaScript"],
                correct: 1
            },
            {
                question: "Apa output dari studi kasus 'Menghitung Luas Lingkaran' jika jari-jari yang dimasukkan adalah 7?",
                options: [
                    "Luas lingkaran dengan jari-jari 7 adalah: 154",
                    "Luas lingkaran dengan jari-jari 7 adalah: 154.0",
                    "Luas lingkaran dengan jari-jari 7 adalah: 153.86",
                    "Luas lingkaran dengan jari-jari 7 adalah: 153.86"
                ],
                correct: 2
            },
            {
                question: "Apa jenis konstanta yang digunakan untuk menyimpan nilai tetap berupa benar atau salah dalam pemrograman?",
                options: ["Konstanta numerik", "Konstanta karakter atau string", "Konstanta boolean", "Konstanta desimal"],
                correct: 2
            },
            {
                question: "Jenis variabel yang menyimpan bilangan desimal disebut...",
                options: ["Integer (int)", "Floating-point (float)", "String (str)", "Boolean (bool)"],
                correct: 1
            },
            {
                question: "Apa fungsi utama dari konstanta dalam pemrograman?",
                options: [
                    "Menyimpan data sementara untuk digunakan dan dimanipulasi oleh program",
                    "Mencegah perubahan nilai yang seharusnya tetap",
                    "Menyimpan nilai tetap yang digunakan berulang kali dalam program",
                    "Menghitung luas lingkaran dan segitiga"
                ],
                correct: 2
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
            }, 500);
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
            document.getElementById('homeButton').style.display = 'flex';
        }

        loadQuestion();
    </script>
</body>

</html>