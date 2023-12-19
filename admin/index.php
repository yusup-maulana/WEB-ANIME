<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet"> -->
    <!--Stylesheet-->
    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: black;
            background-image:
                radial-gradient(white, rgba(255, 255, 255, .2) 2px, transparent 40px),
                radial-gradient(white, rgba(255, 255, 255, .15) 1px, transparent 30px),
                radial-gradient(white, rgba(255, 255, 255, .1) 2px, transparent 40px),
                radial-gradient(rgba(255, 255, 255, .4), rgba(255, 255, 255, .1) 2px, transparent 30px);
            background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px;
            background-position: 0 0, 40px 60px, 130px 270px, 70px 100px;
        }



        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }




        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 25px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <style>
        @media only screen and (max-width: 600px) {
            form {
                width: 100% !important;
            }
        }
    </style>

</head>


<?php
// Now you can use the session functions and authenticateUser function in this file
if (isset($_POST["user"])) {
    include('session.php');
    // Example of using the authenticate function
    authenticate();

    // Example of using the getCurrentUserId function
    $user_id = getCurrentUserId();
    if ($user_id) {
        echo "User is logged in with ID: $user_id";
        var_dump("User is logged in with ID: $user_id");
    } else {
        echo "User is not logged in";
        var_dump("User is not logged in");
    }

    // Example of using the authenticateUser function
    $username = $_POST["user"];
    $password = $_POST["pass"];
    $user_id = authenticateUser($username, $password);

    if ($user_id) {
        // Login successful
        login($user_id);
        echo "Login successful. User ID: $user_id";
    } else {
        // Login failed
        echo "Login failed. Invalid username or password.";
    }
}
?>


<body>
    <form method="post" action="login_process.php">
        <h3>Login Here</h3>
        <?php
        if (isset($_GET["res"])) {
            if ($_GET["res"] == "1") {
                echo '
                <div class="alert alert-danger" role="alert">
                    Isian tidak boleh kosong!
                </div>';
            }
            if ($_GET["res"] == "2") {
                echo '
                <div class="alert alert-danger" role="alert">
                    Login failed
                </div>';
            }
        }
        ?>
        <label for="username">Username</label>
        <input type="text" id="username" name="user" placeholder="Email or Phone" autocomplete="off" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="pass" placeholder="Password" autocomplete="off" required>

        <button type="submit" name="btn_kirim">Log In</button>
        <div style="margin: 11px 2px 2px 2px;">
            <button class="btn"><a href="../">Open Web</a></button>
            <p style="    font-size: 10px;text-align: center;">
                <a href="https://yusup-maulana.github.io/">© yusup-maulana.github.io</a> - 2021 v1.2
            </p>
        </div>

    </form>



</body>

</html>