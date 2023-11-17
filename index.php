<h1>自訂函式</h1>
<?php
function sum($a,$b,){   
    $sum=$a+$b;
    echo "輸入:".$a."`".$b;
    echo "<br>";
    return $sum;
}
 $sum=sum(10,20);
 echo "總和是:".$sum;
 echo "<hr>";
 $sum=sum(35,89);
 echo "總和是:".$sum;
 echo "<hr>";

 echo "總和是:".sum(58,45);
 echo "<hr>";
?>


<h2>不定參數用法</h2>
<?php
function sum2(...$arg){
    return array_sum($arg);
}

$result = sum2(1,2);
echo "結果: " . $result;
echo "<hr>";
$result = sum2(38,45,24);
echo "結果: " . $result;
echo "<hr>";
$result = sum2(98,54,23,45,25,63,45,6,78);
echo "結果: " . $result;
echo "<hr>";
?>
