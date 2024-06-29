<!DOCTYPE html>
<html>
<head>
	<title>Yatrik.com</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">


	
	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	<link rel="icon" type="image/x-icon" href="images/top.ico">

</head>
<body class="body">

    <?php
		$loggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;
		if (!$loggedIn) {
			$_SESSION['loggedIn'] = false;
			$loggedIn = false;
		}
		
    ?>

	<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
	<img src="./images/yatrik_logo_black.png" alt="logo" height="40px" width="80px"> </a>
		<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="index.php">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2" href="places.php">Places</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2" href="rooms.php">Rooms</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2" href="facilities.php">Facilities</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2" href="contact.php">Contact Us</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2" href="about2.php">About</a>
			</li>
			
		</ul>
		<div class="d-flex" role="search">
			<!-- Add the below code for login and registration buttons -->
			<button type="submit" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel" id="login-link" style="<?php echo $loggedIn ? 'display: none' : 'display: block'; ?>">Login</button>
			<button type="submit" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel" id="register-link" style="<?php echo $loggedIn ? 'display: none' : 'display: block'; ?>">Register</button>
			<button type="submit" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="" id="logout-link" style="<?php echo $loggedIn ? 'display: inline' : 'display: none'; ?>">Logout</button>
		</div>
		</div>
	</div>
	</nav>

	<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="index.php">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" id="username" name="username">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" id="password" name="password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none" name="loginn">LOGIN</button>
                            <a href="JavaScript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
   
   <div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
				<form>
					<div class="modal-header">
					<h5 class="modal-title d-flex align-items-center">
					<i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
					</h5>
					<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
						</span>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">Name</label>
									<input type="text" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0">
									<label class="form-label">Email</label>
									<input type="email" class="form-control shadow-none">
								</div>
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">Phone Number</label>
									<input type="number" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0">
									<label class="form-label">Picture</label>
									<input type="file" class="form-control shadow-none">
								</div>
								<div class="col-md-12 p-0">
									<label class="form-label">Address</label>
									<textarea class="form-control shadow-none" rows="1"></textarea>
								</div>
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">Pin Code</label>
									<input type="number" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0">
									<label class="form-label">Date of Birth</label>
									<input type="number" class="form-control shadow-none">
								</div>
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">Password</label>
									<input type="passport" class="form-control shadow-none">
								</div>
								<div class="col-md-6 p-0">
									<label class="form-label">Confirm Password</label>
									<input type="passport" class="form-control shadow-none">
								</div>
								<div class="text-center my-1">
									<button type="submit" class="btn btn-dark shadow-none">Register</button>
								</div>
							</div>
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	
	<script>
		const loginLink = document.getElementById('login-link');
		const registerLink = document.getElementById('register-link');
		const logoutLink = document.getElementById('logout-link');
		const loginForm = document.getElementById('login-form');
		const registerForm = document.getElementById('register-form');
		const usernameInput = document.getElementById('username');
		const passwordInput = document.getElementById('password');

		loginLink.addEventListener('click', showLoginForm);
		registerLink.addEventListener('click', showRegisterForm);
		logoutLink.addEventListener('click', logout);
		loginForm.addEventListener('submit', login);
		registerForm.addEventListener('submit', register);

		function showLoginForm() {
			loginLink.style.display = 'none';
			registerLink.style.display = 'none';
			loginForm.style.display = 'block';
		}

		function showRegisterForm() {
			loginLink.style.display = 'none';
			registerLink.style.display = 'none';
			registerForm.style.display = 'block';
		}

    function login(e) {
        e.preventDefault();
        const username = usernameInput.value;
        const password = passwordInput.value;

        // Send the login credentials to the server using AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = xhr.responseText;
                if (response === 'success') {
                    loginLink.style.display = 'none';
                    registerLink.style.display = 'none';
                    loginForm.style.display = 'none';
                    registerForm.style.display = 'none';
                    logoutLink.style.display = 'inline';
                    alert("Login successfully");
                    // Set loggedIn status in PHP session
                    <?php $_SESSION['loggedIn'] = true; ?>;
                } else {
                    alert("Invalid credentials. Please try again.");
                }
            }
        };
        xhr.send('username=' + username + '&password=' + password);
    }

    function register(e) {
        e.preventDefault();
        // Handle registration logic here
        alert("Registration successful");
        loginLink.style.display = 'block';
        registerLink.style.display = 'block';
        registerForm.style.display = 'none';
    }

    function logout() {
        // Send a request to the server to log out the user
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'logout.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Set loggedIn status in PHP session
                <?php $_SESSION['loggedIn'] = false; ?>;
                loginLink.style.display = 'block';
                registerLink.style.display = 'block';
                logoutLink.style.display = 'none';
            }
        };
        xhr.send();
    }
</script>

</body>
</html>
