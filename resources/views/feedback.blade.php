<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include your Tailwind CSS styles -->
    <link rel="stylesheet" href="path/to/tailwind.css">
    <title>Thank You for Voting</title>
    <style>
        body {
            background: #2C3E50; /* Dark blue-gray background */
            color: #ECF0F1; /* Light gray text */
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .header {
            margin-bottom: 30px;
        }

        .alert-success {
            margin-bottom: 20px;
            color: #2C3E50; /* Dark blue-gray text for success message */
        }

        .thank-you-card {
            background-color: #3498DB; /* Light blue */
            border: 1px solid #2980B9; /* Darker blue */
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .thank-you-card h2 {
            color: #FFFFFF; /* White */
            margin-bottom: 10px;
        }

        .thank-you-card p {
            color: #ECF0F1; /* Light gray */
            margin-bottom: 20px;
        }

        .thank-you-icons {
            font-size: 2rem;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="display-4" style="color: #3498DB;">Thank You for Your Vote!</h1>
            <p class="lead" style="color: #555;">We appreciate your participation in making a difference.</p>
        </div>

        @if (session('success'))
        <div class="alert alert-success mt-3">
            <p class="mb-0">{{ session('success') }} <i class="bi bi-check-circle-fill"></i></p>
        </div>
        @endif

        <div class="thank-you-card">
            <h2 class="text-xl font-bold">Thank You Card <i class="bi bi-heart-fill text-danger"></i></h2>
            <p>Your feedback is valuable to us. We're glad you took the time to vote and contribute to our community.</p>
            <div class="thank-you-icons">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-hand-thumbs-up-fill"></i>
                <i class="bi bi-lightbulb-fill"></i>
            </div>
        </div>
    </div>
</body>

</html>