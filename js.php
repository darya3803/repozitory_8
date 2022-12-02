<?php
if (isset($_POST['login1'])) {
    $num11 = $_POST['num1'];
    $num22 = $_POST['num2'];
    $num33 =$_POST['num3'];
    $num44 =$_POST['num4'];
    $num55 = $_POST['num5'];
    $num66 = $_POST['num6'];
    $num77 = $_POST['num7'];
    $num88 = $_POST['num8'];
    $num99 = $_POST['num9'];
$number = array(
    array($num11,$num22,$num33),
    array($num44,$num55,$num66),
    array($num77,$num77,$num99)
); 
$s = 0;
for ($i = 0; $i <= count($number); $i++) {
    $s += $number[$i][$i];
}
echo $s;
}
?>