<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Gilang", "Baihaqi", "Autiyah", "Safitri"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>