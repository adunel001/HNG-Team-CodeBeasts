<?php
    // Import dependencies
    include "./includes/header.php";
    include ('./utils/functions.php');
    
    // Register when there is a post request
    if( isset($_POST["register_form"]) ){
        $register = register();
    }
?>
<div class="form">
    <?php include "./includes/nav.php"; ?>
    
    <div class="regpage__content">
        <form method="POST">                
            <div class="regpage__group">
                <input name="name" type="text" class="regpage__input" placeholder="USERNAME" id="name" required minlength="4">
                <label for="name" class="regpage__label">Username</label>
            </div>
        
            <div class="regpage__group">
                <input name="email" type="email" class="regpage__input" placeholder="EMAIL" id="email" required>
                <label for="email" class="regpage__label">Email</label>
            </div>
            <div class="regpage__group">
                <input name="password" type="password" class="regpage__input" placeholder="PASSWORD"  required>
                <label for="email" class="regpage__label">Password</label>
            </div>
        
            <div class="regpage__group">            
                <input name="confirm_password" type="password" class="regpage__input" placeholder="CONFIRM PASSWORD"  required>
                <label for="email" class="regpage__label">Confirm Password</label>
            </div>
            
            <!-- Error / success display section -->
            <div>
                <?php 
                    if(isset($register)){
                        if(count($register['errors']) > 0){
                            foreach($register['errors'] as $error) 
                            echo "<p class='error'> {$error}</p>";
                        }elseif($register['success']){
                            echo "<p class='success'> Registeration Successfull</p>";
                        }
                    }
                ?>            
            </div>
            <!-- Error / success section end -->

            <button type="submit" class="regpage__button" name="register_form">SIGN UP</button>  
        </form>

    </div>

</div>

<?php
    include "./includes/footer.php";
?>
