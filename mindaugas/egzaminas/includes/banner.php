<?php
if (isset($_SESSION['user']['username'])){
    ?>
<div class="logged_in_info">
    <span class="welcome-style">Sveiki <?php echo $_SESSION['user']['username']?></span>
    <span><a href="logout.php">iseiti</a></span>
</div>
<?php 
}
else {
?>
<div class="banner">

    <div class="login_div">
    <?php
    include (ROOT_PATH . '/includes/login.php');
    ?>
    </div>
</div>
<?php } ?>