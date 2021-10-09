    <?php
        $title = "If or Else Statement";
        include 'includes/header.php';
    ?>


<h1><?php echo $title?></h1>

<?php 

    //An If statement that will carry out an action based on the value of the variable.

    echo '<h2>If Statement</h2>';

    $grade = 50;
    //Comparison operators: ===, ==, >, <, <=, >=

    if($grade >= 50){
        echo '<h3 style="color: green">You have passed</h3>';
    } else{
        echo '<h3 style="color: red">You have not passed</h3>';
    };

    $grade = 'C';
    //IF - Else If - If
    if ($grade == 'A'){
        echo '<h2 style="color: green">You are a SUPERSTAR - You got a '.$grade.' </h2>';
    } 
    elseif ($grade =='B'){
        echo '<h2 style="color: blue">YOU DID WELL - You got a '.$grade.' </h2>';
    }
    elseif ($grade =='C'){
        echo '<h2 style="color: purple">GOOD ATTEMPT - You got a '.$grade.' </h2>';
    }
    elseif ($grade =='D'){
        echo '<h2 style="color: orange">Try harder next time - You got a '.$grade.' </h2>';
    }
    else {
        echo '<h2 style="color: red">You have failed...</h2>';
    }
    
?>    
 <?php
        require 'includes/footer.php';    
    ?>