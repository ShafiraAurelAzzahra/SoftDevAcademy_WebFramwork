<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Pointer</title>
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
            <div class="title">Quiz Pointer</div>
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
                question: "Apa yang dimaksud dengan pointer dalam pemrograman?",
                options: [
                    "Sebuah variabel yang menyimpan nilai",
                    "Sebuah variabel yang menyimpan alamat memori",
                    "Sebuah fungsi dalam program",
                    "Sebuah tipe data dalam pemrograman"
                ],
                correct: 2
            },
            {
                question: "Manakah fungsi utama dari pointer dalam pemrograman?",
                options: [
                    "Menyimpan nilai secara langsung",
                    "Membantu dalam alokasi memori statis",
                    "Memungkinkan manipulasi data pada lokasi memori tertentu secara langsung",
                    "Mengontrol aliran program"
                ],
                correct: 3
            },
            {
                question: "Apa yang dimaksud dengan null pointer?",
                options: [
                    "Pointer yang tidak menunjuk ke lokasi memori manapun",
                    "Pointer yang menunjuk ke lokasi memori yang terlalu besar",
                    "Pointer yang tidak memiliki nilai tertentu",
                    "Pointer yang menunjuk ke alamat awal memori"
                ],
                correct: 1
            },
            {
                question: "Apa yang dimaksud dengan void pointer?",
                options: [
                    "Pointer yang tidak memiliki fungsi",
                    "Pointer yang tidak menunjuk ke tipe data tertentu",
                    "Pointer yang menunjuk ke alamat awal memori",
                    "Pointer yang hanya digunakan pada fungsi tertentu"
                ],
                correct: 2
            },
            {
                question: "Bagaimana cara menginisialisasi pointer ke variabel dalam C++?",
                options: [
                    "int ptr = &var;",
                    "int* ptr = &var;",
                    "ptr = &var;",
                    "ptr = var;"
                ],
                correct: 2
            },
            {
                question: "Apa keuntungan menggunakan pointer dalam parameter passing?",
                options: [
                    "Membuat salinan variabel",
                    "Menyimpan data secara statis",
                    "Memungkinkan melewatkan variabel besar tanpa membuat salinan",
                    "Tidak memungkinkan pengubahan nilai variabel"
                ],
                correct: 3
            },
            {
                question: "Apa yang dimaksud dengan pointer ke pointer?",
                options: [
                    "Sebuah pointer yang menunjuk ke alamat memori yang sama",
                    "Sebuah pointer yang tidak memiliki nilai",
                    "Sebuah pointer yang menunjuk ke alamat memori dari pointer lain",
                    "Sebuah pointer yang menunjuk ke alamat memori yang berubah-ubah"
                ],
                correct: 3
            },
            {
                question: "Bagaimana cara melakukan alokasi memori dinamis dalam C++?",
                options: [
                    "Menggunakan operator new",
                    "Menggunakan operator malloc",
                    "Menggunakan operator calloc",
                    "Semua jawaban benar"
                ],
                correct: 4
            },
            {
                question: "Apa yang dilakukan oleh fungsi delete[] dalam C++?",
                options: [
                    "Menghapus nilai dari sebuah array",
                    "Menghapus sebuah variabel",
                    "Membebaskan memori yang dialokasikan untuk array dinamis",
                    "Semua jawaban salah"
                ],
                correct: 3
            },
            {
                question: "Apa yang dilakukan oleh operator * pada pointer?",
                options: [
                    "Mengambil alamat memori",
                    "Mendeferensikan pointer, yaitu mendapatkan nilai yang disimpan di alamat yang ditunjuk oleh pointer",
                    "Menunjuk ke pointer lain",
                    "Semua jawaban benar"
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