<?php
require_once('../controller/session_manager.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register</title>
</head>

<body>
    <div class="content">
        <h1>Register</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="register">
            <div class="error-msg"></div>
            <div class="input-field">
                <input type="text" placeholder="Name" name="name" id="name" required>
                <input type="date" name="dob" id="#dob" required>
                <input type="text" placeholder="Phone Number" name="phone-num" id="phone-num" required>
                <input type="email" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Password" name="pass" id="pass" required>
                <input type="password" placeholder="Re-type Password" name="retype-pass" id="retype-pass" required>
            </div>
            <div class="btn">
                <button type="submit" id="login">Register</button>
            </div>
        </form>
        <div class="login">
            <p>Have an account? <a href="./index.php">Login</a></p>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once('../controller/db_tools.php');

        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone-num'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass_confirm = $_POST['retype-pass'];

        if ($pass == $pass_confirm) {
            register($connection, $name, $dob, $phone, $email, $pass);
        }
    }
    ?>
</body>

</html>