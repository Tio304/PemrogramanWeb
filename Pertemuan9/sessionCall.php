<?php
session_start();
?>

<html>
<body>
<?php
    echo "Favourite color is ".$_SESSION["favcolor"]."<br>";
    echo "Favourite animal is ".$_SESSION["favanimal"]."<br>";
?>
</body>
</html>
