<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Linked List</title>
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
            <div class="title">Quiz Linked List</div>
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
                question: "Apa yang dimaksud dengan linked list?",
                options: ["Struktur data yang tersusun dalam urutan acak", "Kumpulan data yang disusun dalam urutan terurut", "Kumpulan elemen data yang terhubung melalui pointer", "Struktur data yang hanya bisa diakses dari awal ke akhir"],
                correct: 3
            },
            {
                question: "Manakah dari berikut yang merupakan keunggulan linked list dibandingkan dengan array?",
                options: ["Pencarian cepat", "Penyimpanan kontigu dalam memori", "Penambahan dan penghapusan elemen secara fleksibel", "Alokasi memori statis"],
                correct: 3
            },
            {
                question: "Apa yang dimaksud dengan node dalam linked list?",
                options: ["Elemen terakhir dalam linked list", "Pointer ke elemen pertama dalam linked list", "Struktur data yang menyimpan informasi dan pointer", "Representasi data dalam linked list"],
                correct: 3
            },
            {
                question: "Bagaimana cara mengakses elemen terakhir dalam linked list?",
                options: ["Iterasi dari awal hingga akhir", "Menggunakan pointer khusus untuk elemen terakhir", "Menggunakan pointer yang menunjuk ke elemen pertama", "Menggunakan operasi pencarian"],
                correct: 1
            },
            {
                question: "Apa itu linked list sirkuler?",
                options: ["Linked list yang memiliki dua ujung", "Linked list yang memiliki pointer ke elemen terakhir", "Linked list yang memiliki loop pada akhirnya", "Linked list yang terdiri dari satu elemen saja"],
                correct: 3
            },
            {
                question: "Bagaimana cara menambahkan elemen di akhir linked list?",
                options: ["Mengganti pointer terakhir dengan alamat elemen baru", "Iterasi dari awal hingga akhir dan menambahkan elemen baru setelah elemen terakhir", "Menghapus elemen terakhir dan menambahkan elemen baru", "Menggunakan operasi pencarian untuk menemukan elemen terakhir"],
                correct: 2
            },
            {
                question: "Apa yang terjadi ketika sebuah elemen dihapus dari linked list?",
                options: ["Elemen tersebut dihapus secara permanen", "Pointer elemen tersebut diarahkan ke elemen sebelumnya", "Pointer elemen sebelumnya diarahkan ke elemen setelahnya", "Elemen tersebut digeser ke posisi terakhir"],
                correct: 3
            },
            {
                question: "Bagaimana cara menghapus elemen pertama dalam linked list?",
                options: ["Mengganti pointer pertama dengan alamat elemen kedua", "Menghapus elemen tersebut secara permanen", "Mengganti pointer elemen kedua dengan NULL", "Iterasi dari awal hingga elemen pertama dan menghapusnya"],
                correct: 1
            },
            {
                question: "Apa kekurangan utama dari linked list?",
                options: ["Sulit untuk melakukan operasi pencarian", "Memerlukan alokasi memori dinamis", "Penyimpanan kontigu dalam memori", "Hanya bisa diakses dari awal ke akhir"],
                correct: 2
            },
            {
                question: "Apa yang dimaksud dengan doubly linked list?",
                options: ["Linked list yang hanya bisa diakses dari awal ke akhir", "Linked list yang memiliki pointer ke elemen sebelumnya dan setelahnya", "Linked list yang memiliki dua ujung", "Linked list yang memiliki pointer ke elemen terakhir"],
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