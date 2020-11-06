<?php  #輸入帳號=john 密碼=john1234
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))
        echo "Welcome";
    else
        echo "fail login";
?>