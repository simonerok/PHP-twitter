<?php 
$one = $_GET['one'] ?? 'one';
$two = $_GET['two'] ?? 'two';
$three = $_GET['three'] ?? 'three';
?>

searching for <?php echo "$one  $two  $three" ?>

<form action="bridge-search" method="POST">
    <input type="text" name="user_name" >
    <input type="submit" value="Search">
</form>
