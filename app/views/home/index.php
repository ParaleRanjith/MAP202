<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-3">Welcome to MAP 202</h1>
                <p class="lead"><small class="text-muted"> <?= date("F jS, Y"); ?></small></p>
            </div>
        </div>
    

    <div class="row">
        <div class="col">
            <p>Hi, <?=$data['name']?>. This is the site for all the course labs and content. </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
         <form class="row g-3" action="/home/search" method="post">
         <div class="col-12">
             <label for="search">Search</label>
             <input required type="text" class="form-control" name="search">
         </div>
         <div class="col-12">
             <button type="submit" class="btn btn-primary">Search</button>
         </div>
         </form>
        </div>
    </div>
         

    <?php require_once 'app/views/templates/footer.php' ?>
