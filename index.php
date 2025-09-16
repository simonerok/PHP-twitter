<?php
$title="Welcome";
require_once __DIR__.'/_header.php';
?>

<?php
$letters = ["a", "b", "c"];
?>

<main>
    INDEX
    <?php 
    foreach($letters as $letter){
        echo "<div> $letter</div>" ;
    }
    ?>


<?php 
foreach($letters as $letter):
    echo $letter;
endforeach;
?>


<?php 
require_once __DIR__.'/db.php';
// require 
// include
// include once 
?>

</main>

<?php 
    require_once __DIR__.'/_footer.php';
?>