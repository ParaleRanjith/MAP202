<?php require_once 'app/views/templates/templates2/header1.php' ?>
<div class="container">
        <div class="row">
            <div class="col">
                <h1>Sign up here!</h1>
        </div>
    </div>

    <?php
        if ($_SESSION['usernameCheck']  == 1) {
    ?>
            <div class="alert alert-danger" role="alert">
                Username is taken already!
            </div>
        <?php unset ($_SESSION['usernameCheck']); } ?>

        <?php
        if ($_SESSION['password']  == 0) {
    ?>
            <div class="alert alert-warning" role="alert">
              Your password does not meet the minimum requirement! Please read the instruction $ Try again
            </div>
        <?php unset ($_SESSION['password']); } ?>


<form class="row g-3" action="/register/verify"  method="post"  >
    <div class="col-12">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="col-12">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">
                <div id="passwordHelpBlock" class="form-text">
                    Your password mus be at least 4 characters & must not be user name!  
                </div>
			</div>
            <div class="col-12">
		            <button type="submit" class="btn btn-primary">Register</button>
            </div>
		</form> 
	

    <?php require_once 'app/views/templates/footer.php' ?>
