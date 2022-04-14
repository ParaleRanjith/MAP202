<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
        </ol>
    </nav>
        <div class="row">
            <div class="col">
                <h1 class="display-3">Inventory</h1>
            </div>
        </div>

        <?php
        if ($_SESSION['roleMessage']) {
    ?>
            <div class="alert alert-warning" role="alert">
                <?=$_SESSION['roleMessage']?>
            </div>
        <?php unset ($_SESSION['roleMessage']); } ?>

        

        <div class="row">
            <div class="col">
                <p><a href="/inventory/admin">Admin Controls</a></p>
                <p><a href="/inventory/manager">Manager Controls</a></p>
                <p><a href="/inventory/staff">Staff Controls</a></p>
            </div>
        </div>

    

    <?php require_once 'app/views/templates/footer.php' ?>
