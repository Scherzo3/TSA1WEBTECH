<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Today's Tasks</title>
</head>
<body>

<h1>Today's Tasks</h1>

<nav>
    <a href="<?= site_url('/'); ?>">Home</a> |
    <a href="<?= site_url('tasks'); ?>">Tasks</a> |
    <a href="<?= site_url('profile'); ?>">Profile</a> |
    <a href="<?= site_url('about'); ?>">About</a>
</nav>

<hr>

<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?= esc($task['title']); ?> -
            <?= esc($task['status']); ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>