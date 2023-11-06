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
    <title>About Me</title>
</head>
<body>

    <!-- main page -->
    <div class="about">
        <!-- header -->
        <?php
            if(isset($_SESSION["email"])) {
                include("header-logged-in.html");
            }
            else {
                include("header.html");
            }
        ?>

            <div class="aboutmetext">
                <header class="aboutheader">
                    <h2>
                        About Me
                    </h2>
                </header>
                <article class="enzotext">
                    <img src="images/enzopic.png" id="enzo">
                    <p>
                        Hello, My name is Enzo Liuth and I am currently a 1st year Student studying <br>Computer Science at Queen Mary's University London.
                    </p>
                </article>
            </div>
        </section>
    </div>

    <!-- footer -->
    <?php
        include("footer.html");
    ?>
</body>
</html>