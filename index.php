<?php
    // Import dependencies
    include "./includes/header.php";
    include ('./utils/functions.php');
    
    // Verify authenticated access
	$user = is_auth();
?>
<div class="form">
    <?php include "./includes/nav.php"; ?>

    <div class="homepage__content">
        <h1>Hi <?php echo $user['name'] ?> </h1>
        <h2>WELCOME TO THE MEN'S TABLE</h2>
        <P class="homepage__detail">You are now logged in, grab a seat while the secretary prepares your folder. While you wait, feel free to point at something and it would be killed for you. Yes, it is a Point-and-Kill something.</P>
        <br><br>

        <form method="POST" action="logout.php">
            <div class="form-group form-button">
                <button type="submit" class="btn center">Sign Out</button>
            </div>
        </form>
    </div>
</div>

<?php
    include "./includes/footer.php";
?>
