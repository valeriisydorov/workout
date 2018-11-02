<h1><?= $article['title'] ?></h1>
<time><?= date('j F Y', strtotime($article['date'])) ?></time>
<p><?= $article['content'] ?></p>
<?php if (is_auth()): ?>
    <a href="<?= ROOT ?>/edit/<?= $article['id'] ?>" class="btn btn-outline-primary">Edit article</a>
<?php endif; ?>
<p class="mt-4">
    <a href="<?= ROOT ?>">Return to Home Page</a>
</p>
