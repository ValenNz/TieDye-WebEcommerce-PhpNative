<?php 
session_start();
if (isset($_SESSION["status_login_admin"])) {
    header("Location: data_penjualan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>

  <!-- External CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
  <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
      <div class="col-lg-8 col-md-10 col-sm-12 d-flex justify-content-center mx-auto">
        <div class="card rounded-3 text-black w-100">
          <div class="row g-0">
            <div class="col-lg-6 d-flex align-items-center justify-content-center p-4">
              <div class="card-body">

                <div class="text-center">
                  <img src="./assets/logo.png" class="img-fluid" style="width: 150px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Tie Dye</h4>
                </div>

                <form method="POST" action="proses_login.php">
                  <!-- Username -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Username</label>
                    <input type="text" id="form2Example11" class="form-control" placeholder="username" name="username" 
                      value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>" 
                      required>
                  </div>

                  <!-- Password -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" class="form-control" name="password" required>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="checkbox" name="remember" id="remember" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                    <label for="remember">Remember Me</label>
                  </div>
<!-- Forgot Password Link -->
<div class="text-center pt-1 mb-1">
  <a href="forgot_password.php">Forgot Password?</a>
</div>
                  <!-- Button -->
                  <div class="text-center pt-1 mb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login">Login</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
              <img src="./assets/login1.webp" class="img-fluid h-100 w-100" alt="Login image" style="object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
  