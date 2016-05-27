<!DOCTYPE html>
<html>
<head>
    <title>Gokken</title>
</head>
<body>
<?php

function  dobbelsteen($worp){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 128, 128, 128);   
    $red = imagecolorallocate($im, 0, 0, 255);
    
    if($worp == 2 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 50, 50, 40, 40, $red); //1
    }
    
    if($worp == 3 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 150, 50, 40, 40, $red); //2
    }
    
    if($worp == 6) {
    imagefilledellipse($im, 50, 100, 40, 40, $red); //3
    }
    
    if($worp == 1 OR $worp == 3 OR $worp == 5) {
    imagefilledellipse($im, 100, 100, 40, 40, $red); //4
    }
    
    if($worp == 6) {
    imagefilledellipse($im, 150, 100, 40, 40, $red); //5
    }
    
    if($worp == 3 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 50, 150, 40, 40, $red); //6
    }
    
    if($worp == 2 OR $worp == 4 OR $worp == 5 OR $worp == 6) {
    imagefilledellipse($im, 150, 150, 40, 40, $red); //7
    }
    imagepng($im,$worp . ".png");
    imagedestroy($im);
}

$worp = rand(1 , 6);
dobbelsteen($worp);
print "<img src=$worp.png?".date("U").">";
echo " &nbsp;";

$worp2 = rand(1 , 6);
dobbelsteen($worp2);
print "<img src=$worp2.png?".date("U").">";
echo " &nbsp;";

$worp3 = rand(1 , 6);
dobbelsteen($worp3);
print "<img src=$worp3.png?".date("U").">";
echo " &nbsp;";

$worp4 = rand(1 , 6);
dobbelsteen($worp4);
print "<img src=$worp4.png?".date("U").">";
echo " &nbsp;";

$worp5 = rand(1 , 6);
dobbelsteen($worp5);
print "<img src=$worp5.png?".date("U").">";
?>

<form action="dobbelsteen.php">
    <input type="submit" value="randomize">
</form>

</body>
</html>