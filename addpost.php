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
    <script src="js/script.js"></script>
    <title>Add Post</title>
</head>
<body>
    <div class="addpost">
        <!-- header -->
        <?php
            if(isset($_SESSION["email"])) {
                include("header-logged-in.html");
            }
            else {
                include("header.html");
            }
        ?>

        <section class="addpostform">
            <form method="GET" action="addpost.php">
                <legend>
                    Post to the Blog
                </legend>

                <fieldset class="fieldset">
                    <label id="title-label">&ast; Title:</label> <br>
                    <input id="title-text-box" type="text" name="title" /> <br>
                    <label id="content-label">&ast; Content:</label> <br>
                    <textarea id="content-text-area" name="content" rows="5" cols="35">Enter what you want to post to the blog.</textarea>
                </fieldset>

                <div class="buttons">
                    <input type="submit" class="buttons" value="Post" name="post" onclick="return preventDefault('title-text-box', 'content-text-area') " />
                    <input type="button" class="buttons" value="Clear" onclick="clearConfirm('title-text-box', 'content-text-area')" />
                </div>
            </form>
        </section>
    </div>

    <?php
        include("database.php");

        if(isset($_GET["post"])) {

            if(!empty($_GET["title"]) && !empty($_GET["content"])) {
                $temp_title = filter_input(INPUT_GET, "title", FILTER_SANITIZE_SPECIAL_CHARS);
                $temp_content = filter_input(INPUT_GET, "content", FILTER_SANITIZE_SPECIAL_CHARS);

                $sql = "INSERT INTO blogentry (title, content) VALUES ('$temp_title', '$temp_content')";

                try {
                    mysqli_query($connection, $sql);

                    header("Location: viewblog.php");
                }
                catch(mysqli_sql_exception) {
                    echo "error";
                }

            }
        }


    ?>

    <!-- footer -->
    <?php
        include("footer.html");
    ?>
</body>
</html>