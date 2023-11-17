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


<h1>不定參數用法</h1>
<?php
function sum2(...$arg){
    return array_sum($arg);
}

$result = sum2(1,2);
echo "結果: " . $result;
echo "<hr>";
$result = sum2(38,45,86);
echo "結果: " . $result;
echo "<hr>";
$result = sum2(98,54,23,45,25,63,45,6,78);
echo "結果: " . $result;
echo "<hr>";
?>


<h1>自訂函式預設值</h1>
<?php
function sum3($a,$b,$c=9){
    $sum=($a+$b)*$c;
    echo "$a ` $b , 倍數 $c <br>";
    return $sum;
}

echo "總和是".sum3(25,36,54);
echo "<hr>";
echo "總和是".sum3(36,89,71);
echo "<hr>";
echo "總和是".sum3(25,36,67);
echo "<hr>";
?>