<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Blog</title>
</head>
<body>

    <!-- main page -->
    <div class="blog">
        <!-- header -->
        <?php
            if(isset($_SESSION["email"])) {
                include("header-logged-in.html");
            }
            else {
                include("header.html");
            }
        ?>

            <div class="blogpage">

                <div class="blogside">
                    <h4>Here you will be able to view what I post on my blog and see my open thoughts. <br>
                    In order to be able to add posts to the blog and view the blog you will have to be logged in.</h4>
                    <div class="buttons">
                        <div class="loginbutton">
                            <a href="login.php">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer -->
    <?php
        include("footer.html");
    ?>
</body>
</html>