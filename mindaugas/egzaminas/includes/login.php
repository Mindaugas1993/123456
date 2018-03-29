<div style="width: 40%; margin: 20px auto;">
    <form method="post" action="index.php">
        <h2>Login</h2>
        <?php include(ROOT_PATH . '/includes/errors.php')  ?>

        <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" class="btn" name="login_btn">Login</button>

        <p>
            Ne memberis? <a href="register.php">Registruokis</a>
        </p>
    </form>
</div>