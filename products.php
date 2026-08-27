<?php
$title = "Products";

$products = [
    [
        "name" => "Wireless Headphones",
        "price" => 59.99,
        "description" => "Over-ear headphones with noise cancellation and 20-hour battery life.",
    ],
    [
        "name" => "Smart Water Bottle",
        "price" => 24.99,
        "description" => "Tracks your daily water intake and glows to remind you to drink.",
    ],
    [
        "name" => "Mechanical Keyboard",
        "price" => 89.99,
        "description" => "Compact tactile keyboard with hot-swappable switches and RGB backlight.",
    ],
    [
        "name" => "Canvas Backpack",
        "price" => 45.00,
        "description" => "Durable everyday backpack with a padded laptop sleeve.",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 8px;
        }
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 32px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .card h2 {
            margin: 0 0 8px;
            font-size: 1.1rem;
            color: #333;
        }
        .card .price {
            font-weight: bold;
            color: #2a7a2a;
            margin-bottom: 8px;
        }
        .card p {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #555;
            margin: 0;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 32px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($title); ?></h1>
        <p class="subtitle">A few sample products for demonstration.</p>
        <div class="grid">
            <?php foreach ($products as $product): ?>
                <div class="card">
                    <h2><?php echo htmlspecialchars($product["name"]); ?></h2>
                    <div class="price">$<?php echo number_format($product["price"], 2); ?></div>
                    <p><?php echo htmlspecialchars($product["description"]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="back-link" href="index.php">&larr; Back to Hello World</a>
    </div>
</body>
</html>
