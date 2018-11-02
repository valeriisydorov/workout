<div class="row">
    <div class="col-lg-6 offset-lg-3 mt-5">
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="login" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <?php if ($msg): ?>
                    <small class="form-text text-danger"><?= $msg; ?></small>
                <?php endif; ?>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="remember" class="form-check-input">
                <label class="form-check-label">Remember me</label>
            </div>
            <input type="submit" value="Sign in" class="btn btn-primary">
        </form>
        <p class="mt-4">
            <a href="<?= ROOT ?>">Return to Home Page</a>
        </p>
    </div>
</div>
