<!DOCTYPE html>
<html>
<body>

<?php
$t = 120;
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "6") {
    echo "Have a good morning!";
} elseif ($t < "1120") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
 
</body>
</html>