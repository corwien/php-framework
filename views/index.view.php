<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>将PHP代码嵌入到HTML中</title>
    <style>
        header {
            background-color: #f5f8fc;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li>Hello, <?= $name ?></li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>
