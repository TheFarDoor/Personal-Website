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
    <title>Enzo's Website</title>
</head>
<body>

    <!-- main page -->
    <div class="mainpage">

        <!-- header -->
        <?php
            if(isset($_SESSION["email"])) {
                include("header-logged-in.html");
            }
            else {
                include("header.html");
            }
        ?>

        <div class="headerwelcome">
            <h1>Welcome to Enzo's Website</h1>
            <p>Here you will be able to find out more about my life journey, what inspired me, what I regularly <br>
                post on my blog, as well as having access to all of my social media links in just one website.
            </p>
        </div>
    </div>
    
    <!-- footer -->
    <?php
        include("footer.html");
    ?>

</body>
</html>

