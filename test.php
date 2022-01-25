<?php 
function showmessage()
{
   
    echo "<center>";
    echo "<br> เงินเดือน 100000 บาท ได้รับโบนัส 100 % </br>";
    
    echo "</center>";
}
function result(){
   echo "  เงินเดือน ";
   $price1=array(100000);
   return (100000);

}
function result2(){
    echo  "<br>  โบนัส  " ;
    $price1=array(100000);
    return( 100000*100/100 );
}
function result3(){
    echo  "<br>  เงินเดือนสุทธิ  " ;
    $price1=array(100000);
    return( 100000*100/100+100000 );
}

echo result() ; 
echo "  บาท  ";
echo result2(); 
echo "  บาท  ";
echo result3() ;
echo "  บาท " ;


?>