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
                    <small class="form-text text-danger"><?= nl2br($msg) ?></small>
                <?php endif; ?>
            </div>
            <input type="submit" value="Add article" class="btn btn-primary">
        </form>
    </div>
</div>
