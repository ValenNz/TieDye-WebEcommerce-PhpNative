<?php
session_start();
require "../connection.php";

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verify the token
    $stmt = $conn->prepare("SELECT * FROM password_resets WHERE token = ? AND DATE_ADD(created_at, INTERVAL 1 HOUR) > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Token is valid
        $tokenValid = true;
    } else {
        // Token is invalid or expired
        $tokenValid = false;
    }
} else {
    // Token is not set
    $tokenValid = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
                                    <h4 class="mt-1 mb-5 pb-1">Reset Password</h4>
                                </div>

                                <?php if ($tokenValid): ?>
                                    <form method="POST" action="proses_reset_password.php">
                                        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

                                        <!-- New Password -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="newPassword">New Password</label>
                                            <input type="password" id="newPassword" class="form-control" name="new_password" required>
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="confirmPassword">Confirm Password</label>
                                            <input type="password" id="confirmPassword" class="form-control" name="confirm_password" required>
                                        </div>

                                        <!-- Button -->
                                        <div class="text-center pt-1 mb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="reset_password">Reset Password</button>
                                        </div>
                                    </form>
                                <?php else: ?>
                                    <div class="text-center">
                                        <p class="text-danger">Invalid or expired token.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="./assets/forgot_password.jpg" class="img-fluid h-100 w-100" alt="Reset Password" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
