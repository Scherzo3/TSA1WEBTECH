<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h1>User Profile</h1>

<nav>
    <a href="<?= site_url('/'); ?>">Home</a> |
    <a href="<?= site_url('tasks'); ?>">Tasks</a> |
    <a href="<?= site_url('profile'); ?>">Profile</a> |
    <a href="<?= site_url('about'); ?>">About</a>
</nav>

<hr>

<p><strong>Username:</strong> <?= $user['username']; ?></p>
<p><strong>Full Name:</strong> <?= $user['full_name']; ?></p>
<p><strong>Email:</strong> <?= $user['email']; ?></p>

</body>
</html>