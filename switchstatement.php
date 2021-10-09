    <?php
        $title = "Switch Statement";
        include 'includes/header.php';
    ?>

    <h1><?php echo $title?></h1>
    <?php
        $grade = 'A';

        switch ($grade){
            case 'A':
                echo '<h2 style="color: green">You are a SUPERSTAR - You got a '.$grade.' </h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">YOU DID WELL - You got a '.$grade.' </h2>';
                break;
            case 'C':
                echo '<h2 style="color: purple">GOOD ATTEMPT - You got a '.$grade.' </h2>';
                break;
            case 'D':
                echo '<h2 style="color: orange">Try harder next time - You got a '.$grade.' </h2>';
                break;
            default: 
                echo '<h2 style="color: red">You have failed...</h2>';
                break;
        }
    
    ?>

<?php
        require 'includes/footer.php';    
    ?>