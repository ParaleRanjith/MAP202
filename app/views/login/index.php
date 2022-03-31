<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in</h1>
            </div>
        </div>

        <?php
        if ($_SESSION['register']  == 1) {
    ?>
            <div class="alert alert-success" role="alert">
                Your account has been created! Please login!
            </div>
        <?php unset ($_SESSION['register']); } ?>
    

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="name">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
		  <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
	
		</form> 

       

    <?php require_once 'app/views/templates/templates2/footer1.php' ?>
