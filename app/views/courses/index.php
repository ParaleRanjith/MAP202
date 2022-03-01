<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-3">Course Information</h1>
                
            </div>
        </div>
    

        <div class="row">
        <div class="col">
           <?php
            foreach ($data['departments'] as $department){
                echo "<p><a href=\"/courses/display/" . $department['department']
                . "\"> "    
                . $department['department'] . "</a></p>";
            }
            ?>
            
        </div>
    </div>

    

    <?php require_once 'app/views/templates/footer.php' ?>
