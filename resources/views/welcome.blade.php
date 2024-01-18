<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iVote - Digital Voting Platform</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            overflow: hidden;
            animation: wave-animation 15s infinite linear;
            background: linear-gradient(90deg, #512DA8, #1976D2, #00BCD4, #00838F, #F06292, #FFC107, #FFA000, #FF8F00, #512DA8, #2196F3, #4CAF50, #FF5722); /* Add more colors as needed */
            background-size: 300% 100%; /* Adjust the background size to accommodate more colors */
        }

        @keyframes wave-animation {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 0%;
            }
            100% {
                background-position: 0% 0%;
            }
        }

        .logo-container {
            animation: bounce-in 1s ease-out;
        }

        @keyframes bounce-in {
            0% {
                transform: scale(0);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .shine {
            position: relative;
            overflow: hidden;
            transform: translate3d(0, 0, 0);
        }

        .shine::before {
            content: '';
            position: absolute;
            top: 0;
            left: -75%;
            width: 150%;
            height: 100%;
            opacity: 0.2;
            transform: skewX(-30deg);
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.3));
            animation: shine-animation 2s infinite linear;
        }

        @keyframes shine-animation {
            0% {
                left: -75%;
            }
            100% {
                left: 125%;
            }
        }

        /* Improved Button Styles */
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            color: #fff;
            background: linear-gradient(90deg, #2196F3, #1565C0); /* Adjust colors as needed */
        }

        .btn-secondary {
            color: #333;
            background: linear-gradient(90deg, #FFC107, #FFA000); /* Adjust colors as needed */
        }

        .btn:hover {
            background-color: transparent; /* Ensures the gradient background shows through on hover */
        }
    </style>
</head>
<body class="font-sans">
    <div class="container mx-auto flex flex-col items-center justify-center h-screen">
        <div class="mb-8 logo-container shine">
            <img src="{{ asset('img/logo.png') }}" alt="iVote Logo" class="h-48 w-48 rounded-lg">
        </div>
        <h1 class="text-4xl font-bold mb-6 text-white">Welcome to iVote</h1>
        <p class="text-lg mb-8 text-white">Your Digital Voting Platform</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg mb-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">Register</a>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
