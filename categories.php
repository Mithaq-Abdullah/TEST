<?php
$title = "Categories";

$categories = [
    [
        "name" => "Electronics",
        "description" => "Gadgets, devices, and accessories for everyday tech needs.",
        "item_count" => 128,
    ],
    [
        "name" => "Home & Kitchen",
        "description" => "Appliances, cookware, and essentials for the household.",
        "item_count" => 87,
    ],
    [
        "name" => "Fashion",
        "description" => "Clothing, footwear, and accessories for all seasons.",
        "item_count" => 214,
    ],
    [
        "name" => "Sports & Outdoors",
        "description" => "Gear and equipment for fitness and outdoor adventures.",
        "item_count" => 56,
    ],
    [
        "name" => "Books & Stationery",
        "description" => "Reading material, notebooks, and office supplies.",
        "item_count" => 73,
    ],
    [
        "name" => "Toys & Games",
        "description" => "Fun for kids and adults, from puzzles to board games.",
        "item_count" => 42,
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
        .card .count {
            font-weight: bold;
            color: #2a5a9a;
            margin-bottom: 8px;
            font-size: 0.85rem;
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
        <p class="subtitle">A few sample categories for demonstration.</p>
        <div class="grid">
            <?php foreach ($categories as $category): ?>
                <div class="card">
                    <h2><?php echo htmlspecialchars($category["name"]); ?></h2>
                    <div class="count"><?php echo (int) $category["item_count"]; ?> items</div>
                    <p><?php echo htmlspecialchars($category["description"]); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="back-link" href="index.php">&larr; Back to Hello World</a>
    </div>
</body>
</html>
