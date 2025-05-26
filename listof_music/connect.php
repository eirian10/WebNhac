<?php
    $connect = mysqli_connect("localhost", "root", "", "musicdata") or die ("Not Found!!!");
    mysqli_select_db($connect, "musicdata") or die ("Can't connect to db!!");
?>