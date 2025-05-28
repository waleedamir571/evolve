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
                        <div class="row mb-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control form-control1" id="firstName"
                                    placeholder="First Name" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control form-control1" id="lastName"
                                    placeholder="Last Name" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email/Username</label>
                            <input type="email" class="form-control form-control1" id="email"
                                placeholder="email@xyz.com" required>
                        </div>

                        <!-- Password fields -->
                        <div class="row mb-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="password" class="form-label">Password</label>
                                <div class="password-field">
                                    <input type="password" class="form-control form-control1" id="password"
                                        placeholder="••••••••••" required>
                                    <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                        <i class="fas fa-eye" id="password-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <div class="password-field">
                                    <input type="password" class="form-control form-control1" id="confirmPassword"
                                        placeholder="••••••••••" required>
                                    <button type="button" class="password-toggle"
                                        onclick="togglePassword('confirmPassword')">
                                        <i class="fas fa-eye" id="confirmPassword-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Job Title and Phone Number -->
                        <div class="row mb-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="jobTitle" class="form-label">Join as a</label>
                                <div class="form-group">

                                    <select class="form-control form-control1" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <div class="input-group">

                                    <input type="tel" class="form-control form-control1" id="phoneNumber"
                                        placeholder="Phone number">
                                </div>
                            </div>
                        </div>

                        <!-- Bio -->
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" rows="3" placeholder="About Your Self"></textarea>
                        </div>

                        <!-- Sign In Button -->
                        <div class="mb-3">
                            <button type="submit" class="auth-btn">Sign In</button>
                        </div>

                        <!-- Already have account -->
                        <div class="text-center">
                            <small class="text-muted">
                                Already have an account?
                                <a href="login.php" class="login">Log in</a>
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