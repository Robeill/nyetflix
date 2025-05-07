<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page</title>
    <link href="../assets/images/Icon/Icon.ico" rel="icon" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
        background: url('../assets/images/Main/login/background.jpg') no-repeat center center / cover;
        }
        .overlay {
        background-color: rgba(0, 0, 0, 0.6);
        min-height: 100vh;
        }
        .form-control:focus {
        box-shadow: none;
        }
    </style>
    </head>
    <body class="text-white">

    <div class="overlay d-flex flex-column min-vh-100">
        
        <nav class="p-3 ps-md-5">
        <a href="#">
            <img src="../assets/images/Icon/logo.png" alt="logo" style="width: 167px;">
        </a>
        </nav>

        <main class="d-flex justify-content-center align-items-center flex-grow-1 px-3">
        <div class="bg-black bg-opacity-75 rounded p-4 p-md-5" style="max-width: 450px; width: 100%;">
            <h2 class="mb-4">Sign In</h2>
            <form id="signin-form">
            <div class="mb-3">
                <label for="email" class="form-label">Email or phone number</label>
                <input type="text" class="form-control bg-dark text-white border-0" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control bg-dark text-white border-0" id="password" required>
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-bold py-2 mt-2">Sign In</button>

            <div class="d-flex justify-content-between align-items-center mt-3 small">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">Remember me</label>
                </div>
                <a href="#" class="text-secondary">Need help?</a>
            </div>
            </form>

            <p class="mt-4">New to Netflix? <a href="#" class="text-white text-decoration-none">Sign up now</a></p>
            <small class="text-secondary">
            This page is protected by Google reCAPTCHA to ensure you're not a bot.
            <a href="#" class="text-decoration-none text-white">Learn more.</a>
            </small>
        </div>
        </main>

    </div>

</body>
</html>
