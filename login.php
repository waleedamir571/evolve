<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Vocality Services Co.</title>
    <meta name="description" content="Sign up for Vocality Services" />
    <meta name="author" content="Vocality Services" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">


</head>

<body>
    <div class="container-fluid ">
        <div class="row full-height">
            <!-- Left Panel - Background Image & Information -->
            <div class="col-12 col-md-6 left-panel">
                <video autoplay muted loop>
                    <source src="images/home/file.mp4" type="video/mp4">

                </video>
                <!-- <div class="info-content">

                    

                </div> -->
            </div>

            <!-- Right Panel - Authentication Form -->



            <div class=" col-md-6 right-panel ">
                <div class="form-container">
                    <div class="text-center mb-4">
                        <div class="logo-circle">
                            <img src="images/home/logo2.svg" alt="">
                        </div>
                    </div>

                    <p class="text-center fill">Please fill your detail to access your account.</p>

                    <form id="registrationForm">
                        <!-- Name fields -->


                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email/Username</label>
                            <input type="email" class="form-control form-control1" id="email"
                                placeholder="email@xyz.com" required>
                        </div>

                        <!-- Password fields -->
                        <div class="row mb-3">
                            <div class="col-12 col-md-12 mb-3 mb-md-0">
                                <label for="password" class="form-label">Password</label>
                                <div class="password-field">
                                    <input type="password" class="form-control form-control1" id="password"
                                        placeholder="••••••••••" required>
                                    <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                        <i class="fas fa-eye" id="password-eye"></i>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Job Title and Phone Number -->


                        <!-- Bio -->


                        <!-- Sign In Button -->
                        <div class="mb-3">
                            <button type="submit" class="auth-btn mb-3">Sign In</button>
                            <br>
                            <button type="submit" class="auth-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" viewBox="0 0 25 25" fill="none">
                                    <path
                                        d="M23.001 12.6716C23.001 11.8082 22.9296 11.1782 22.7748 10.5249H12.7153V14.4215H18.62C18.501 15.3899 17.8582 16.8482 16.4296 17.8282L16.4096 17.9586L19.5902 20.3733L19.8106 20.3949C21.8343 18.5632 23.001 15.8682 23.001 12.6716Z"
                                        fill="#4285F4" />
                                    <path
                                        d="M12.714 22.9386C15.6068 22.9386 18.0353 22.0052 19.8092 20.3952L16.4282 17.8284C15.5235 18.4468 14.3092 18.8785 12.714 18.8785C9.88069 18.8785 7.47596 17.0468 6.61874 14.5151L6.49309 14.5256L3.18583 17.034L3.14258 17.1518C4.90446 20.5818 8.5235 22.9386 12.714 22.9386Z"
                                        fill="#34A853" />
                                    <path
                                        d="M6.62046 14.5152C6.39428 13.8619 6.26337 13.1618 6.26337 12.4385C6.26337 11.7151 6.39428 11.0152 6.60856 10.3618L6.60257 10.2227L3.25386 7.67407L3.14429 7.72514C2.41814 9.1485 2.00146 10.7469 2.00146 12.4385C2.00146 14.1302 2.41814 15.7285 3.14429 17.1518L6.62046 14.5152Z"
                                        fill="#FBBC05" />
                                    <path
                                        d="M12.7141 5.99845C14.7259 5.99845 16.083 6.85011 16.8569 7.56183L19.8807 4.66848C18.0236 2.97681 15.6069 1.93848 12.7141 1.93848C8.52353 1.93848 4.90447 4.29512 3.14258 7.7251L6.60686 10.3618C7.47598 7.83014 9.88073 5.99845 12.7141 5.99845Z"
                                        fill="#EB4335" />
                                </svg> Sign in with Google</button>
                        </div>

                        <!-- Already have account -->
                        <div class="text-center">
                            <small class="text-muted">
                                Don’t have an account?
                                <a href="sign-up.php" class="login">Sign up</a>
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(fieldId + '-eye');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        // Form submission handler
        document.getElementById('registrationForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form data
            const formData = {
                firstName: document.getElementById('firstName').value,
                lastName: document.getElementById('lastName').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
                confirmPassword: document.getElementById('confirmPassword').value,
                jobTitle: document.getElementById('jobTitle').value,
                phoneNumber: document.getElementById('phoneNumber').value,
                bio: document.getElementById('bio').value
            };

            // Basic validation
            if (formData.password !== formData.confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            if (formData.password.length < 6) {
                alert('Password must be at least 6 characters long!');
                return;
            }

            // Here you would typically send the data to your server
            console.log('Form submitted with data:', formData);
            alert('Registration successful! (This is just a demo)');
        });
    </script>
</body>

</html>