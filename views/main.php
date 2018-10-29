<!doctype html>
<html lang="ru-UA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Workout - <?= $title; ?></title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark flex-md-nowrap mb-4 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= ROOT ?>">My Workout</a>
        <ul class="navbar-nav px-3 ml-auto">
            <li class="nav-item text-nowrap">
                <?php if (!is_auth()): ?>
                    <a class="nav-link" href="<?= ROOT ?>/login">Sign in</a>
                <?php else: ?>
                    <a class="nav-link" href="<?= ROOT ?>/login">Sign out</a>
                <?php endif; ?>
            </li>
        </ul>
    </nav>
    <main class="container">
        <?= $content; ?>
    </main>
</body>
</html>