<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $reg = $_POST['reg'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if ($mysqli->query("INSERT INTO reg (name, regno, email, phone) VALUES ('$name', '$reg', '$email', '$phone')") === true) {
        header("Location: success.php");
    } else {
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="formstyle.css" />
    <title>ECSSV</title>
</head>

<body>
    <video src="assets/back.mp4" autoplay muted loop></video>

    <div class="login-box">
        <div class="suits"></div>
        <h2>Register</h2>
        <form method="post">
            <div class="user-box">
                <input type="text" name="name" required>
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="reg" required>
                <label>Registration Number</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="phone" required>
                <label>Phone</label>
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>

    </div>


</body>

</html>