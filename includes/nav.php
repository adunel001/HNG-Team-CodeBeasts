<div class="form__nav">
    <div>
        <a href="homepage.html" class="form__heading">THE MEN'S TABLE</a>
    </div>
    <ul class="form__list">
        <?php 
            if(!isset($_SESSION['user'])){
        ?>
            <!-- <li><a href="#" class="form__list-1">About Us</a></li> -->
            <!-- <li><a href="#" class="form__list-1">Contact</a></li> -->
            <li><a href="login.php" class="form__list-1">Login</a></li>
            <li><a href="register.php" class="form__list-1">Register</a></li>
        
        <?php 
            }else{
        ?>

        <li><a href="index.php" class="form__list-1">Home</a></li>
        <li><a href="logout.php" class="form__list-1">Sign out</a></li>

        <?php } ?>
    </ul>
</div>