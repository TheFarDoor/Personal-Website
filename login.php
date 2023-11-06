<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Import CSS Files -->
        <link rel="stylesheet" href="css/reset.css" type="text/css"/>
        <link rel="stylesheet" href="css/desktop.css" type="text/css"/>
        <!-- Import the Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Nunito:wght@500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
        <!-- Importing JS -->
        <script src="https://kit.fontawesome.com/07abf397ca.js" crossorigin="anonymous"></script>
        <title>Login</title>
    </head>
    <body>
</head>
<body>

    <div class="login">
        <!-- header -->
        <?php
            if(isset($_SESSION["email"])) {
                include("header-logged-in.html");
            }
            else {
                include("header.html");
            }
        ?>

        <section class="loginform">
            <form method="post" action="login.php">
                <legend>
                    Login to Blog
                </legend>

                <fieldset class="fieldset">
                    <label>Email:</label> <br>
                    <input type="email" name="email"> <br>
                    <label>Password:</label> <br>
                    <input type="password" name="password" minlength="6">
                </fieldset>

                <div class="buttons">
                    <input type="submit" value="Login" class="buttons" name="login">
                    <input type="submit" value="Register" class ="buttons" name="register">
                </div>
            </form>
        </section>
    </div>

    <!-- getting the input from the user -->
    <?php

        include("database.php");

        if(isset($_POST["login"])) {
            
            if(!empty($_POST["email"]) && !empty($_POST["password"])) {
                $temp_email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                $temp_password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

                $sql = "SELECT * FROM users WHERE email = '$temp_email'";

                try {
                    $got_row = mysqli_query($connection, $sql);

                    if(mysqli_num_rows($got_row) > 0) {

                        $email_row = mysqli_fetch_assoc($got_row);
    
                        if(password_verify($temp_password, $email_row["password"])) {
    
                            session_start();
                            $_SESSION["email"] = $temp_email;

                            header("Location: addpost.php");

                            mysqli_close($connection);
                        }
                        else {
                            echo "error";
                        }
                    }
                    else {
                        echo "no email found";
                    }
                }
                catch(mysqli_sql_exception) {
                    echo "no email found";
                }

            }
        }

        if(isset($_POST["register"])) {
            $temp_email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $temp_password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            $hash = password_hash($temp_password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO users (email, password) VALUES ('$temp_email', '$hash')";

            try {
                mysqli_query($connection, $sql);

                session_start();
                $_SESSION["email"] = $temp_email;

                header("Location: addpost.php");
                
                mysqli_close($connection);
            }
            catch(mysqli_sql_exception) {
                echo "email already in use";
            }
        }
    ?>

    <!-- footer -->
    <?php
        include("footer.html");
    ?>
</body>
</html>