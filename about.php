<?php
$title = "About";
$description = "This is a simple PHP Hello World project. It demonstrates a basic page that greets the visitor with \"Hello World\" and links here for a short description of what the project does.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .content {
            max-width: 480px;
            text-align: center;
            padding: 0 20px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
            line-height: 1.5;
        }
        a {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1><?php echo htmlspecialchars($title); ?></h1>
        <p><?php echo htmlspecialchars($description); ?></p>
        <p><a href="index.php">&larr; Back to Hello World</a></p>
    </div>
</body>
</html>
