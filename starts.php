<h2>正三角形</h2>
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
stars('正三角形',7);
stars('矩形',7);
stars('倒三角形',7);
stars('菱形',7);


function stars($shape,$size){
    switch($shape){
        case '正三角形':
            equilateral_triangle($size);
        break;
        case '倒三角形':
            inverted_equilateral_triangle($size);
        break;
        case '矩形':
            retangle($size);
        break;
        case '菱形':
            diamond($size);
        break;
    }
}

function equilateral_triangle($size)
{
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < ($size - 1 - $i); $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < ($i * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
}
?>

<h2>倒正三角形</h2>
<?php

function inverted_equilateral_triangle($size){
    for($i=$size-1;$i>=0;$i--){
        for($j=0;$j<($size-1-$i);$j++){
            echo "&nbsp;";
        }
        for($k=0;$k<($i*2+1);$k++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    
}

?>

<h2>矩形</h2>
<?php


function retangle($size){
    for ($i = 0; $i < $size; $i++) {

        for ($j = 0; $j < $size; $j++) {
            if ($i == 0 || $i == ($size-1)) {
                echo "*";
            } else if ($j == 0 || $j == ($size-1)) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<hr>";
}
?>


<h2>菱形</h2>
<?php

function diamond($size){
    $mid = floor(($size*2-1)/ 2);
    $tmp=0;
    for ($i = 0; $i < ($size * 2 - 1); $i++) {

        if ($i <= $mid) {
            $tmp = $i;
        } else {
            $tmp=$tmp-1;
        }

        for ($j = 0; $j < ($mid - $tmp); $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
}


?>