<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>

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
                  <h4 class="mt-1 mb-5 pb-1">Forgot Password</h4>
                </div>

                <form method="POST" action="proses_forgot_password.php">
                  <!-- Email -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" id="form2Example11" class="form-control" name="email" required>
                  </div>

                  <!-- Button -->
                  <div class="text-center pt-1 mb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Send Reset Link</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
              <img src="./assets/forgot_password.jpg" class="img-fluid h-100 w-100" alt="Forgot Password" style="object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
