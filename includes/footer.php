<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    footer>nav>p {
        color: white;
        text-align: center;
    }

    footer {
        flex-shrink: 0;
    }
</style>

<body>
    <footer>
        <nav class="navbar navbar-dark bg-dark d-flex justify-content-center align-items-center">
            <p>Trevin Shu's Blog &copy; <?php echo date("Y"); ?></p>
        </nav>
    </footer>
</body>

</html>