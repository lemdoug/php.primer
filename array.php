


    <?php
        $title = "Arrays and Printouts";
        include 'includes/header.php';
    ?>

    <h1><?php echo $title?></h1>

    <?php

        //a variable 
        $num = 3; 

        //an array
        //Homogenous Array - Only one data type being stored
        //multiple data types can be stored in PHP coding
        $numbers = array(1,2,3,4,5,6,7,8,9,10,443,344,534,566,7867,99,23,4,6576,324,45,656,757,456,34);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";
        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";
        
        for ($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";

        }
    ?>

 <?php

        require 'includes/footer.php';    
    ?>