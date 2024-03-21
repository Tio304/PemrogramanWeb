<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h2> Array Terindeks</h2>

<?php
 $Listdosen = ["Bashir Al-Hakim", "Yulius Wibowo", "James Satria"];

    echo $Listdosen[2]."<br>";
    echo $Listdosen[0]."<br>";
    echo $Listdosen[1]."<br>";

    foreach ($Listdosen as $urut){
        echo $urut ."<br>";
    }
?>

</body>
</html>

