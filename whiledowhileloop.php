    <?php
        $title = "While Loop";
        include 'includes/header.php';
    ?>

    
    <h1><?php echo $title?></h1>
    <?php
        $grade = 0;
        //Infinite loop
        // while ($grade < 10){
        //     echo '<p>I am less than 10!</p>';
        // }
        
        //Pre-Condition Loop

        while ($grade < 10){
            echo '<p>I am less than 10! I am: '.$grade.' </p>';
            $grade++;
        }

        echo 'EXIT WHILE LOOP';
    
    ?>

    
    <h1>Do While Loop</h1>
    <?php
        //Post-condition Loop
        $grade = 0;

        do {
            echo '<p>I am a do while loop and less than 10!</p>';
            $grade++;

        }   while ($grade < 10);

        echo 'EXIT DO WHILE LOOP';
    ?>
 <?php
        require 'includes/footer.php';    
    ?>