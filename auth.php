<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowWise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
            <h1>Grow Wise</h1>
            <p>Langkah Kecil, Tumbuh Besar Bersama Lawan Stunting!</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
            <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col offset-md-3">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <ul class="nav nav-tabs card-header-tabs" id="authTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="authTabsContent">
                            <!-- Login Form -->
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <form action="proses_login.php" method="post">
                                    <div class="mb-3">
                                        <label for="loginUser" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="loginUser" name="username" placeholder="Enter your username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="loginPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" value="Login" class="btn btn-primary">Login</button>
                                    </div>
                                    <div class="d-grid mt-3">
                                        <a href="index.php" class="btn btn-secondary">Back to home</a>
                                    </div>
                                </form>
                            </div>
                            <!-- Register Form -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="proses_register.php" method="post">
                                    <div class="mb-3">
                                        <label for="registerName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="registerName" name="fullname" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerUser" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="registerUser" name="username" placeholder="Enter your username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Enter your password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="registerConfirmPassword" name="confirm_password" placeholder="Confirm your password" required>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" value="Register" class="btn btn-primary">Register</button>
                                    </div>
                                    <div class="d-grid mt-3">
                                        <a href="index.php" class="btn btn-secondary">Back to home</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
            <div class="col">
                <img src="assets\img\baby2.png" style="width: auto; height:auto;" alt="Placeholder Image">
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>