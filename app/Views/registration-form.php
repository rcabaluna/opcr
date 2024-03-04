<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background: rgba(255, 255, 255, 0.8);
            background-image: url(background.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .card-header img {
            height: 60px;
            display: block;
            margin: 0 auto;
        }
        .card-body {
            background-color: #f5f5f5;
        }
        .card-header {
            background-color: #f5f5f5;
        }
        .card-footer {
            background-color: #f5f5f5;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <img src="logo.png" alt="Department of Science and Technology Region X OPCR Logo">
                    </div>
                    <div class="card-body">
                        <form action="<?=base_url('auth-register')?>" method="POST">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="float-right">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $username = "admin";
        $password = "password";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input_username = $_POST["username"];
            $input_password = $_POST["password"];

            if ($input_username == $username && $input_password == $password) {
                header("Location: auth-register");
            } else {
                echo "<div class='alert alert-danger mt-3'>Invalid username or password</div>";
            }
        }
    ?>
</body>
</html>