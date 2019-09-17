<?php
    // Import dependencies
    include "./includes/header.php";
    include ('./utils/functions.php');
        
    // Register when there is a post request
	if( isset($_POST["login_form"]) ){
		$login = login();
	}
?>
<div class="form">
    <?php include "./includes/nav.php"; ?>

    <div class="form__details">
        <form method="POST">
            <div class="input-container">
                <i class="fa fa-user fa-2x icon"></i>
                <input class="input-field" type="text" placeholder="Username:" name="email">
            </div>
            <div class="input-container">
                <i class="fa fa-lock fa-2x icon"></i>
                <input class="input-field" type="password" placeholder="Password:" name="password">
            </div>
            
            <div class="center">
                <!-- Error / success display section start-->
                <?php 
                    if(isset($login)){
                        if(count($login['errors']) > 0){
                            foreach($login['errors'] as $error) 
                            echo "<p class='error'> {$error}</p>";
                        }
                    }
                ?>
                <!-- Error / success display section end -->
                <button type="submit" class="btn" name="login_form">Sign In</button>
            </div>
        </form>
        
    </div>  
    <div class="form__radio-detail">
        <input type="radio" name="demo" value="one" id="radio-one" class="form-radio" unchecked>
        <label for="radio-one" class="form__radio-label">Keep me logged in</label>
        <a href="#" class="form__radio-label">Forget password?</a>
    </div>
    <span>
        <a href="#" class="join">join</a>
    </span>
</div>

<?php
    include "./includes/footer.php";
?>
