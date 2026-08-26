<?php
$message = "Hello World";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1><?php echo htmlspecialchars($message); ?></h1>
</body>
</html>
