<div class="row">
    <div class="col-12 mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="<?= $article_title; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="content" cols="30" rows="10" class="form-control"><?= $article_content; ?></textarea>
                <?php if ($msg): ?>
                    <small class="form-text text-danger"><?= $msg ?></small>
                <?php endif; ?>
            </div>
            <input type="submit" value="Edit article" class="btn btn-primary">
        </form>
        <a href="<?= ROOT ?>/view/<?= $article['id'] ?>">Назад</a>
        <a href="<?= ROOT ?>" class="d-inline-block mt-3">На главную</a>
    </div>
</div>