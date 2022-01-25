
<?php
$price = 10050;
$bonus = 0;
if($price>1000000)
$bonus=$price * 100;
elseif($price>50000)
$bonus=$price * 2.00;
elseif($price>10000)
$bonus=$price * 3.00;
else $bonus=0;
$coin=$price+$bonus;
echo "เงินเดือน : $price<br>";
echo "คุณได้โบนัส : $bonus<br>";
echo "เงินเดือนสุทธิ : $coin";
?>