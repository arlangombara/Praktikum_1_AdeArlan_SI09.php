<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Gilang", "Autiyah", "Safitri", "Daud"];
    array_unshift($tims, "jono", "ikram");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>