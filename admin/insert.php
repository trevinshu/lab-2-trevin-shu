<?php
session_start();
if (isset($_SESSION['auyfgigafa'])) {
    // echo "Logged in";
} else {
    // echo "Not logged In";
    header("Location: login.php");
}
?>
<?php
include("../includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        .container {
            max-width: 600px;
        }

        h2 {
            padding: 1rem 0;
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .nav-item:last-of-type {
            visibility: hidden;
        }

        input[type=submit] {
            margin-right: 1rem;
        }

        .btn-secondary {
            margin-right: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>New Blog Entry</h2>

        <?php
        if (isset($_POST['mysubmit'])) { //Has the user pressed the button?
            // echo "submit";

            //Write to blog: 
            $title = trim($_POST['title']);
            $entry = trim($_POST['entry']);
            $today = date("F j, Y, g:i a");
            // echo "$title , $entry";

            $handle = fopen("blogfile.txt", "r");

            if (($handle) && ($title != "") && ($entry != "")) {
                while (!feof($handle)) {
                    $buffer = fgets($handle, 4096);
                    $existingText .= $buffer;
                }
                fclose($handle);


                //Old entries in $existingText

                // $newEntry = $title . "<br>" . $entry . "<br>";

                $newEntry = "\n<div class=\"new-entry\">";
                $newEntry .= "\n\t<div class=\"title\">$title</div>";
                $newEntry .= "\n\t<div class=\"timedate\">$today</div>";
                $newEntry .= "\n\t<div class=\"entry\">$entry</div>";
                $newEntry .= "\n</div>";
                $allEntries = $newEntry . $existingText;

                $handle = fopen("blogfile.txt", "w");
                fwrite($handle, $allEntries);
                fclose($handle);

                //End writing to blog.


                $msg = "New entry has been added!";
            } else {
                $msg = "Please fill out the form";
            }
        }
        ?>
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="entry">Entry:</label>
                <textarea name="entry" class="form-control"></textarea>
            </div>
            <input type="submit" name="mysubmit" class="btn btn-primary">
            <a href="../index.php" class="btn btn-secondary">Homepage</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
            <p>&nbsp;</p>
        </form>
        <?php
        if ($msg) {
            echo "\n<div class=\"alert alert-primary\">$msg</div>";
        }
        ?>
    </div>
    <?php
    include("../includes/footer.php");
    ?>
</body>

</html>