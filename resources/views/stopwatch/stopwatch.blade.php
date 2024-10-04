<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stopwatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <a class="navbar-brand" href="/">Stopwatch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                <li class="nav-item">
                    <a class="nav-link" href="/timer">Timer</a>
                </li>
            </ul>
        </div>
    </nav>

    <h1 class="text-center">Stopwatch</h1>
    <div class="text-center">
        <div id="stopwatch" class="display-4 mb-4">
            <span id="minutes">00</span>:<span id="seconds">00</span>:<span id="milliseconds">00</span>
        </div>
        <button class="btn btn-primary btn-lg" onclick="startStopwatch()">Start</button>
        <button class="btn btn-warning btn-lg" onclick="stopStopwatch()">Stop</button>
        <button class="btn btn-danger btn-lg" onclick="resetStopwatch()">Reset</button>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let stopwatchInterval;
        let startTime;
        let elapsedTime = 0;

        function startStopwatch() {
            startTime = Date.now() - elapsedTime;
            stopwatchInterval = setInterval(function () {
                elapsedTime = Date.now() - startTime;
                const time = new Date(elapsedTime);
                document.getElementById('minutes').textContent = String(time.getMinutes()).padStart(2, '0');
                document.getElementById('seconds').textContent = String(time.getSeconds()).padStart(2, '0');
                document.getElementById('milliseconds').textContent = String(Math.floor(time.getMilliseconds() / 10)).padStart(2, '0');
            }, 10);
        }

        function stopStopwatch() {
            clearInterval(stopwatchInterval);
        }

        function resetStopwatch() {
            clearInterval(stopwatchInterval);
            elapsedTime = 0;
            document.getElementById('minutes').textContent = "00";
            document.getElementById('seconds').textContent = "00";
            document.getElementById('milliseconds').textContent = "00";
        }
    </script>
</body>
</html>
