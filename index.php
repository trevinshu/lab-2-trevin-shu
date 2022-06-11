<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
        .new-entry {
            border: 2px solid #343A40;
            border-radius: 10px;
            padding: 1rem;
            color: #343A40;
            margin: 1rem;
        }

        h2 {
            padding: 1rem 0;
            text-align: center;
        }

        .title {
            font-size: 2rem;
            text-align: center;
            font-weight: bold;
            color: #343A40;
        }

        .timedate {
            font-size: 0.8rem;
            font-style: italic;
            font-weight: 300;
            color: #343A40;
            padding-bottom: 0.7rem;
        }

        .entry {
            font-size: 1.4rem;
            padding-bottom: 2rem;
        }

        a {
            margin: 1rem;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1 0 auto;
        }
    </style>

<body>
    <div class="container">
        <h2>My Blog</h2>
        <?php
        include("admin/blogfile.txt");
        ?>
        <a href="admin/insert.php" class="btn btn-primary">Add New Entry</a>
    </div>
    <footer>
        <?php
        include("includes/footer.php");
        ?>
    </footer>
</body>

</html>