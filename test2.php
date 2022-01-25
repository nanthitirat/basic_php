<?php
$salary = 100000;
if ($salary >= 100000){
    $bonus = $salary * 1;
}
else if ($salary >= 50000){
    $bonus = $salary *2 ;
}
else {
    $bonus = $salary *3;
}
$result = $salary+ $salary;
echo "เงินเดือน = $salary <br>";
echo "โบนัส = $bonus <br>";
echo "เงินเดือนสุทธิ = $result <br>";
?>
