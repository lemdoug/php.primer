    <?php
        $title = "Index";
        include 'includes/header.php';
    ?>

    <!-- Basic HTML -->
    <h1><?php echo $title?></h1>
    <br/>

    <?php
        /*Printing to HTML using echo */
        echo 'Hello PHP!';
        
        //You can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';


        //variables need a '$'. They are not strongly typed
        $name = 'Lemar Douglas';
        $age = '20';

        //echo variables
        echo $name;


        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';
        //echo using double quotes and interpolation
        echo "<h1>My name is: $name</h1>";
    ?>

    <button type="button" class="btn btn-danger">CLICK ME TO CLAIM YOUR PRIZE!!!</button>
    <button type="button" class="btn btn-dark">CLICK ME TO CLAIM YOUR PRIZE!!!</button>
    <button type="button" class="btn btn-primary">CLICK ME TO CLAIM YOUR PRIZE!!!</button>

    <?php
        require 'includes/footer.php';    
    ?>
