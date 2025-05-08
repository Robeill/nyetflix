<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Netflix - Watch TV Shows Online, Watch Movies Online</title>
    <link href="../assets/images/Icon/Icon.ico" rel="icon" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/signup.css">
</head>
<body class="text-white" style="background: url('../assets/images/Main/login/background.jpg') no-repeat center center / cover;">
    <div class="min-vh-100 d-flex flex-column justify-content-between dark-overlay">
        <header class="py-3 px-4 px-md-5">
        <img src="../assets/images/Icon/logo.png" alt="Netflix" class="logo img-fluid" style="width: 150px;">
        </header>

        <main class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="bg-black bg-opacity-75 rounded p-4 p-md-5" style="max-width: 450px; width: 100%;">
            <h1 class="mb-4 fs-2">Sign Up</h1>
            <form id="signup-form">
                <div class="mb-3">
                    <input type="text" class="form-control bg-dark text-white border-0" id="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control bg-dark text-white border-0" id="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control bg-dark text-white border-0" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-danger w-100 fw-bold py-2">Sign Up</button>
            </form>

            <div class="mt-4 small text-secondary">
            <p>Already have an account? <a href="./signin.php" class="text-white text-decoration-none">Sign in now</a>.</p>
            <p class="mt-2">
                This page is protected by Google reCAPTCHA to ensure you're not a bot.
                <a href="#" class="text-white text-decoration-none">Learn more</a>.
            </p>
            </div>
        </div>
        </main>

        <footer class="text-secondary pt-4 border-top border-secondary-subtle">
        <div class="container py-4">
            <div class="row row-cols-2 row-cols-md-4 g-3">
            <div><a href="#" class="text-secondary text-decoration-none">FAQ</a></div>
            <div><a href="#" class="text-secondary text-decoration-none">Help Center</a></div>
            <div><a href="#" class="text-secondary text-decoration-none">Terms of Use</a></div>
            <div><a href="#" class="text-secondary text-decoration-none">Privacy</a></div>
            <div><a href="#" class="text-secondary text-decoration-none">Cookie Preferences</a></div>
            <div><a href="#" class="text-secondary text-decoration-none">Corporate Information</a></div>
            <div class="col-12 mt-2">
                <p>Questions? Call 1-844-505-2993</p>
            </div>
            </div>
        </div>
        </footer>

    </div>

</body>
</html>
