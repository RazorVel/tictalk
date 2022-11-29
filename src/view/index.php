<?php
require_once('../controller/session_manager.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/index.css" />
    <title>Login</title>
</head>

<body>
    <div class="content">
        <h1>TickTalk</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login">
            <div class="error-msg"></div>
            <div class="input-field">
                <input type="email" placeholder="Email" name="email" id="email" required />
                <input type="password" placeholder="Password" name="pass" id="pass" required />
            </div>
            <div class="forgot-pass"><a href="#">Forgot Password?</a></div>
            <div class="btn">
                <button type="submit" id="login">Login</button>
            </div>
        </form>
        <div class="register">
            <p>Don't have an account? <a href="./register.php">Register</a></p>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once('../controller/db_tools.php');

        $email = $_POST['email'];
        $password = $_POST['pass'];

        if (sign_in($connection, $email, $password)) {
            $_SESSION['name'] = $email;
            $_SESSION['last-login'] = time();
            header('location: ./chat.php');
        } else {
            session_demolish();
        }
    }
    ?>
</body>

</html>