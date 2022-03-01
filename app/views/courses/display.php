<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-3"><?= $data['department']?></h1>
                
            </div>
        </div>
    

        <div class="row">
        <div class="col">
        <?php
            foreach ($data['programs'] as $program){
                echo "<p><a href=\"/courses/display/"
                . $data['department']
                . "/"
                 . $program['program']
                . "\"> "    
                . $program['program'] . "</a></p>";
            }
            ?>
            
        </div>
    </div>

    

    <?php require_once 'app/views/templates/footer.php' ?>
