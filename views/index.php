<?php if (is_auth()): ?>
    <p>
        <a href="<?= ROOT ?>/add" class="btn btn-outline-primary">Add a new article</a>
    </p>
<?php endif; ?>

<?php foreach ($articles as $article): ?>
    <?php if (is_auth() || $article['status'] == 1): ?>
        <div class="mb-4">
            <time><?= date('j F Y', strtotime($article['date'])) ?></time>
            <h2><?= $article['title'] ?></h2>
            <a href="<?= ROOT ?>/view/<?= $article['id'] ?>" class="btn btn-sm btn-outline-primary">Read more</a>
            <?php if (is_auth()): ?>
                <a href="<?= ROOT ?>/edit/<?= $article['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                <a href="<?= ROOT ?>/delete/<?= $article['id'] ?>"
                   onclick="return confirm('Are you sure you want to delete this article?')"
                   class="btn btn-sm btn-outline-danger">Delete</a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
