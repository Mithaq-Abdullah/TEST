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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
        }
        h1 a {
            color: inherit;
            text-decoration: none;
        }
        h1 a:hover {
            text-decoration: underline;
        }
        p a {
            color: #333;
        }
    </style>
</head>
<body>
    <h1><a href="about.php"><?php echo htmlspecialchars($message); ?></a></h1>
    <p><a href="products.php">View Products</a></p>
    <p><a href="accounts.php">View Accounts</a></p>
</body>
</html>
