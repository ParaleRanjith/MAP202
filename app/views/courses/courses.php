<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-3"><?= $data['program']?></h1>
                
            </div>
        </div>
    

        <div class="row">
        <div class="col">
        <?php


            foreach ($data['courses'] as $course){
                echo "<p>". $course['courseID']
                . " - "
                . $course['courseName']
                . "</p>";
            }
            
            ?>
            
        </div>
    </div>

    

    <?php require_once 'app/views/templates/footer.php' ?>
