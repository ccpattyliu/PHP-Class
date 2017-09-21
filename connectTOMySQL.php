<!DOCTYPE html>
<html lang="en">
<head>Holle
    <meta charset="UTF-8">
    <title>連接到mysql~~~~</title>
</head>
<body>
    <h1>連接到mysql~~~~~~</h1>
    <?php
        echo "測試連結資料庫~";
    //註解：變數 用來設定連線資料 在命令列上可以打my sql  --user="homestead '"--password="secret"來登入
        $host = "localhost";
        $user = "homestead";
        $password = "secret";
        $databases="test";

    //執行連線到資料庫的動作，並將回傳的東西存放到 $dblink 中
        $dbLink=new mysqli($host,$user,$password,$databases);

    //檢查是否連線錯誤
        if($dbLink->connect_error)
    {
//        die("連線錯誤".$dbLink->connect_error);物件導向
        die("連線錯誤".mysqli_connect_error()); //程序導向
    }
    else
        echo "連線成功<br>";

    //新增一筆資料
    $sql="INSERT INTO students VALUES ('mike','m','XingZhu','ZhongShan Rd.')";

     if($dbLink->query($sql))
         echo "<br>成功新增資料";
    else
        echo "新增資料錯誤".$sql."<br>".$dbLink->query($sql);
    //讀取資料
    $sql="select*from students";//要執行的sql語法
    $result=$dbLink->query($sql);//叫mysql執行

    var_dump($result);//列出除錯用的資訊

    if($result->num_rows>0)//檢查是否有資料
    {
        while ($row=$result->fetch_array())//將資料取出 列印
        {
            echo "<br>name:".$row["name"].
                ",gender:".$row["gender"].
                ",address:".$row["addressArea"].$row["addressDetail"]."<br>";
        }
    }
    else
        echo" no data";
        $dbLink->close()
?>
</body>
</html>