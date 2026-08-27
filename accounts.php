<?php
$title = "Accounts";

$accounts = [
    [
        "name" => "Alice Johnson",
        "username" => "alicej",
        "email" => "alice.johnson@example.com",
        "role" => "Administrator",
    ],
    [
        "name" => "Brian Smith",
        "username" => "briansmith",
        "email" => "brian.smith@example.com",
        "role" => "Editor",
    ],
    [
        "name" => "Carla Mendes",
        "username" => "carlam",
        "email" => "carla.mendes@example.com",
        "role" => "Viewer",
    ],
    [
        "name" => "David Lee",
        "username" => "dlee",
        "email" => "david.lee@example.com",
        "role" => "Editor",
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
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        th, td {
            text-align: left;
            padding: 12px 16px;
            font-size: 0.9rem;
        }
        th {
            background-color: #eee;
            color: #333;
        }
        tr:not(:last-child) td {
            border-bottom: 1px solid #eee;
        }
        .role {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
            background-color: #e0e0e0;
            color: #333;
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
        <p class="subtitle">A few sample accounts for demonstration.</p>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accounts as $account): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($account["name"]); ?></td>
                        <td><?php echo htmlspecialchars($account["username"]); ?></td>
                        <td><?php echo htmlspecialchars($account["email"]); ?></td>
                        <td><span class="role"><?php echo htmlspecialchars($account["role"]); ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="back-link" href="index.php">&larr; Back to Hello World</a>
    </div>
</body>
</html>
