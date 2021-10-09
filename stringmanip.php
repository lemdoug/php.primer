    <?php
        $title = "String Manipulation";
        include 'includes/header.php';
    ?>

    <h1><?php echo $title?></h1>

    <?php
        //Variable declarations
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "lemar douglas";

        echo "<h3>Individual lines</h3>";
        echo $phrase1;
        echo $phrase2;
                
        //Concatenation of strings
        echo "<h3>Concatenation</h3>";
        echo $phrase1." , named Tiffany, ".$phrase2;
        echo '<br/>';
        echo '<hr/>';

        //String transformation
        echo "<h3>Case Transformation</h3>";
        echo 'Upercase first letter: '.ucfirst($name).'<br/>';
        echo 'Upercase first letter of each word: '.ucwords($name).'<br/>';
        echo 'Upercase first letter: '.ucfirst($name).'<br/>';
        echo 'Uppercase: '. strtoupper($name).'<br/>';
        echo 'Uppercase: '. strtolower("THIS WAS UPPERCASE").'<br/>';
        echo '<hr/>';
        echo 'Repeats String: '. str_repeat('a <br/>',10).'<br/>';
        echo 'Repeats String in Uppercase: '. strtoupper(str_repeat('a',10)).'<br/>';

        echo 'Get a Substring: '.substr($name, 6, 10).'<br/>';

        echo 'Get position of string: '.strpos($name,'d').'<br/>';
        //Returns NULL
        //echo 'Get position of string: '.strpos($combine,'z').'<br/>';

        echo 'Find Character "r": '.strchr($name,'r').'<br/>';

        echo 'Find Length of String: '.strlen($name).'<br/>';

        echo 'Without Trim: '. "A"." B C D "."E".'<br/>';
        echo 'Trim spaces on both sides: '. "A".trim(" B C D "). "E".'<br/>';
        echo 'Trim spaces to the left: '. "A".ltrim(" B C D "). "E".'<br/>';
        echo 'Trim spaces to the right: '. "A".rtrim(" B C D "). "E".'<br/>';
        
        echo 'Replace string with another: '.str_replace("stand","sit", $phrase2).'<br/>';


?>
 <?php
        require 'includes/footer.php';    
    ?>