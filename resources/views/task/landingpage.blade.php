<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up Form</title>
    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <input type="text" placeholder="Name" required />
                </div>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email" required />
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" required />
                </div>
                <button>Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email" required />
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" required />
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>

        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="overlayBtn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button id="overlayBtn">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <mark>See more on <a href="https://www.youtube.com/channel/UCHIkJZkap10qGFHq5ViIExg">violet</a></mark>
    </footer>

    <!-- JS Script -->
    <script>
        const container = document.getElementById('container');
        const overlayBtn = document.querySelectorAll('#overlayBtn');

        overlayBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                container.classList.toggle('right-panel-active');
            });
        });
    </script>

</body>
</html>
