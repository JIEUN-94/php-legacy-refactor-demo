<!DOCTYPE html>
<html>
<head>
    <title>사용자 목록</title>
</head>
<body>
    <h1>사용자 목록</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>