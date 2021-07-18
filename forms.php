<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
    Name:
    <input type="text" name="uName"><br>
    Email:
    <input type="email" name="uEmail">
    <input type="submit">
    </form>
    <h1>User profile</h1>
    <p><strong>Name:</strong><?php echo $_GET["uName"]?></p>
    <p><strong>Email:</strong><?php echo $_GET["uEmail"]?></p>
</body>
</html>