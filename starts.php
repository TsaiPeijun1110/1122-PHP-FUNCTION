<h2>正三角形</h2>
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
equilateral_triangle(5);
equilateral_triangle(9);
equilateral_triangle(7);
equilateral_triangle(6);
equilateral_triangle(10);


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
inverted_equilateral_triangle(4);
inverted_equilateral_triangle(6);
inverted_equilateral_triangle(11);
inverted_equilateral_triangle(13);
function inverted_equilateral_triangle($amount){
    for($i=$amount-1;$i>=0;$i--){
        for($j=0;$j<($amount-1-$i);$j++){
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
rectangle(3);
rectangle(8);
rectangle(15);
rectangle(16);

function rectangle($size)
{
    for ($i = 0; $i < $size; $i++) {

        for ($j = 0; $j < $size; $j++) {
            if ($i == 0 || $i == ($size - 1)) {
                echo "*";
            } else if ($j == 0 || $j == ($size - 1)) {
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
diamond(3);
diamond(6);
diamond(9);
function diamond($size)
{
    $mid = floor(($size * 2 - 1 / 2));
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