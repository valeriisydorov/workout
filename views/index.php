<?php if (is_auth()): ?>
    <a href="<?= ROOT ?>/add">Add a new article</a>
<?php endif; ?>

<?php foreach ($articles as $article): ?>
    <time><?= date('j F Y', strtotime($article['date'])) ?></time>
    <h2><?= $article['title'] ?></h2>
    <a href="<?= ROOT ?>/view/<?= $article['id'] ?>">Подробнее</a>
    <?php if (is_auth()): ?>
        <a href="<?= ROOT ?>/edit/<?= $article['id'] ?>">Изменить</a>
        <a href="<?= ROOT ?>/delete/<?= $article['id'] ?>"
           onclick="return confirm('Are you sure you want to delete this article?')">Удалить</a>
    <?php endif; ?>
<?php endforeach; ?>

