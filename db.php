<?php
$rows=all('dept');

dd($rows);

function all($table=null){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');

    if(isset($table) && !empty($table)){
        $sql="select * from `$table` ";
        $rows=$pdo->query($sql)->fetchALL();
        return $rows;
    }else{
        echo "錯誤:沒有指定的資料";
    }
    
}
    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "<pre>";
    }
?>