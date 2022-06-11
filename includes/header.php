<?php 
$thisPage = basename($_SERVER['PHP_SELF']);

switch($thisPage) {
    case "login.php":
        $pageTitle = "Login";
    break;

    case "index.php":
        $pageTitle = "Trevin's Blog";
    break;

    case "insert.php":
        $pageTitle = "Insert Blog Entry";
    break;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
header {
    background-color: #343A40;
    padding: 1rem 0;
}

h1 {
    color: white;
    text-align: center;
}
</style>
<body>
    <header>
        <h1>Trevin Shu's Blog</h1>
    </header>
</body>

</html>