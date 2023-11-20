<?php
 $dsn="mysql:host=localhost;charset=utf8;dbname=school";
 $pdo=new PDO($dsn,'root','');

//$rows=all('students',['dept'=>'3']);
//$row=find('students',20);
$row=find('students',['dept'=>'99','graduate_at'=>'23']);
//$row=ll('students',['dept'=>'1','graduate_at'=>'23']);
//echo "<h3>相同條件使用find()</h3>";
dd($row);
//ecjo "<hr>";
//echo "<h3>相同條件使用all()</h3>";
//($rows);
//$up=update("students",'3',['dept'=>'16','name'=>'張明珠']);
//$up=update("students",['dept'=>2, 'students_code'=>'001'],['dept'=>'99','name'=>'張明珠']);
//insert('dept',['code'=>'112','name'=>'圖書館系']);

//del('students',['dept'=>5,'status_code'=>'001']);

function pdo($db){
    $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
    $pdo=new PDO($dsn,'root','');

    return $pdo;
}

//dd($up);
//all()-給定資料表名後，會回傳整個資料表的資料
function all($table=null,$where='',$other=''){
    //$dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=pdo('schoo');
    $sql="select * from `$table` ";
    
    if(isset($table) && !empty($table)){

        if(is_array($where)){
            /**
             * ['dept'=>'2','graduate_at'=>12] =>  where `dept`='2' && `graduate_at`='12'
             * $sql="select * from `$table` where `dept`='2' && `graduate_at`='12'"
             */
            if(!empty($where)){
                foreach($where as $col => $value){
                    $tmp[]="`$col`='$value'";
                }
                $sql .= " where ".join(" && ",$tmp);
            }
        }else{
            $sql .=" $where";
        }

            $sql .=$other;
        //echo $sql;
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }else{
        echo "錯誤:沒有指定的資料表名稱";
    }
}
//find()-會回傳資料表指定id的資料
function find($table,$id){
    global $pdo;
    // $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    // $pdo=new PDO($dsn,'root','');
    $sql="select * from `$table`";

    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$col`='$value'";
        }
        $sql .=" where ".join(" && ",$tmp); 
    }else if(is_numeric($id)){
        $sql .= "ehere `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態比斯是數字或陣列";
    }
    //echo 'find=>' .$$sql;
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return  $row;
}
//update()-給定資料表的條件後，會去更新相應的資料。
function update($table,$id,$cols){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');

    $sql="update `$table` set";

    if(!empty($cols)){
    foreach($cols as $col => $value){
        $tmp[]="`$col`='$value'";
    }
    }else{
        echo "錯誤:缺少要編輯的欄位陣列";
    }
    $sql .= join(",",$tmp);
    $tmp=[];

    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$col`='$value'";
        }
        $sql .=" where ".join(" && ",$tmp); 
    }else if(is_numeric($id)){
        $sql .= "where `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    return $pdo->exec($sql); 

} 

//insert()-給定資料內容後，會去新增資料到資料表

function insert($table,$values){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');

    $sql="insert into `$table` ";
    $cols="(`".join("`,`",array_keys($values))."`)";
    $vals="('".join("','",$values)."')";

    $sql=$sql . $cols ." values ".$vals;

    //echo $sql;
    return $pdo->exec($sql);
}

//del()-給定條件後，會去刪除指定的資料

function del($table,$id){
   include "./pdo.php";
    $sql="delete from `$table` where ";

    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$col`='$value'";
        }
        $sql.= join(" && ",$tmp);

    }else if(is_array($id)){
        $sql .= " `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    //echo $sql;
    return $pdo->exec($sql);
}

 function dd($array){
     echo "<pre>";
     print_r($array);
     echo "</pre>";
 }



 //function insert($table,這邊可以放[數字,字串,陣列]欄位);
                          //['col1'=>'val1','col2'=>'val2'];
                          //會從橫的變直的,像是個陣列
                          //$cols="(`col1`,`col2` ,``,``,)";
                          //$vals="('val1','val2' ,'','',)";

 