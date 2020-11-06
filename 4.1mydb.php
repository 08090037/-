<?php
    #建立帳戶連結資料庫  localhost資料庫 root帳號 mydb密碼
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    
    #找出資料庫所需資料
    $result=mysqli_query($conn, "select * from user");

    #捏取每筆資料
    $row=mysqli_fetch_array($result);

    echo $row[id] + " " + $row[pwd]; 
?>