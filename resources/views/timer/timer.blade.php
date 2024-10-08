<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #181C14;
            color: #EEEEEE;
        }
        input[type="number"] {
            -moz-appearance: textfield;
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        nav {
            border-radius: 10px;
            background-color: #73EC8B;
        }
    </style>
</head>
<body class="container mt-5">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/stopwatch">Stopwatch</a>
                </li>
                <a class="navbar-brand" href="/">Timer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            </ul>
        </div>
    </nav>

    <h1 class="text-center">Timer</h1>
    <div class="text-center">
        <div id="timer" class="display-4 mb-4">
            <span id="minutes">00</span>:<span id="seconds">00</span>
        </div>
        <input type="number" id="inputMinutes" class="form-control w-25 mx-auto mb-4" placeholder="Enter minutes">
        <button class="btn btn-primary btn-lg" onclick="startTimer()">Start</button>
        <button class="btn btn-warning btn-lg" onclick="stopTimer()">Stop</button>
        <button class="btn btn-danger btn-lg" onclick="resetTimer()">Reset</button>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let timerInterval;
        let remainingTime;
        let isRunning = false;

        function startTimer() {
            if (isRunning) return;
            const inputMinutes = document.getElementById('inputMinutes').value;
            remainingTime = inputMinutes * 60 * 1000;
            timerInterval = setInterval(function () {
                if (remainingTime <= 0) {
                    clearInterval(timerInterval);
                    alert('Time is up!');
                } else {
                    remainingTime -= 1000;
                    const time = new Date(remainingTime);
                    document.getElementById('minutes').textContent = String(time.getMinutes()).padStart(2, '0');
                    document.getElementById('seconds').textContent = String(time.getSeconds()).padStart(2, '0');
                }
            }, 1000);
            isRunning = true;
        }

        function stopTimer() {
            clearInterval(timerInterval);
            isRunning = false;
        }

        function resetTimer() {
            clearInterval(timerInterval);
            document.getElementById('minutes').textContent = "00";
            document.getElementById('seconds').textContent = "00";
            isRunning = false;
        }
    </script>
</body>
</html>
