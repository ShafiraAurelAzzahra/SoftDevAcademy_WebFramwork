<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Sorting and Searching</title>
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
            <div class="title">Quiz Sorting And Searching</div>
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
                question: "Apa tujuan utama dari algoritma pengurutan dalam pemrograman?",
                options: [
                    "Menemukan elemen tertentu dalam array",
                    "Mengubah elemen menjadi urutan alfabetis",
                    "Mengurutkan elemen menjadi urutan tertentu berdasarkan aturan tertentu",
                    "Menambahkan elemen ke dalam array"
                ],
                correct: 3
            },
            {
                question: "Algoritma pengurutan mana yang memiliki kompleksitas waktu terbaik dalam kasus rata-rata?",
                options: ["Bubble Sort", "Merge Sort", "Quick Sort", "Selection Sort"],
                correct: 3
            },
            {
                question: "Pada algoritma Quick Sort, elemen apa yang digunakan sebagai pivot?",
                options: ["Elemen pertama dari array", "Elemen terakhir dari array", "Elemen tengah dari array", "Elemen acak dari array"],
                correct: 4
            },
            {
                question: "Algoritma pengurutan mana yang cocok digunakan untuk mengurutkan linked list?",
                options: ["Bubble Sort", "Merge Sort", "Quick Sort", "Insertion Sort"],
                correct: 2
            },
            {
                question: "Apa yang dilakukan algoritma Insertion Sort pada setiap iterasi?",
                options: [
                    "Memindahkan elemen yang lebih kecil ke sebelah kiri",
                    "Membandingkan setiap pasangan elemen secara berurutan dan menukar jika diperlukan",
                    "Mencari elemen terkecil dan memindahkannya ke posisi pertama",
                    "Memindahkan elemen yang lebih besar ke sebelah kanan"
                ],
                correct: 1
            },
            {
                question: "Apa tujuan utama dari algoritma pencarian dalam pemrograman?",
                options: [
                    "Mengurutkan elemen dalam array",
                    "Menemukan elemen tertentu dalam array",
                    "Mengubah elemen menjadi urutan tertentu berdasarkan aturan tertentu",
                    "Memindahkan elemen ke dalam array"
                ],
                correct: 2
            },
            {
                question: "Algoritma pencarian mana yang efisien untuk digunakan pada array yang sudah terurut?",
                options: ["Linear Search", "Binary Search", "Interpolation Search", "Jump Search"],
                correct: 2
            },
            {
                question: "Algoritma pencarian mana yang tidak memerlukan array terurut?",
                options: ["Linear Search", "Binary Search", "Interpolation Search", "Jump Search"],
                correct: 1
            },
            {
                question: "Apa yang terjadi jika elemen yang dicari tidak ditemukan dalam array pada algoritma Linear Search?",
                options: [
                    "Program akan memberikan pesan kesalahan",
                    "Program akan mencari kembali dari awal array",
                    "Program akan mengembalikan nilai -1",
                    "Program akan menghentikan pencarian"
                ],
                correct: 3
            },
            {
                question: "Algoritma pencarian mana yang membagi array menjadi beberapa bagian dan mencari di setiap bagian?",
                options: ["Binary Search", "Linear Search", "Interpolation Search", "Jump Search"],
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