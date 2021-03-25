<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "omc";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if($conn) {
        
        $tablename = "custmers";
        $colomns = "
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            theday MEDIUMTEXT,
            thedate MEDIUMTEXT,

            cumpname MEDIUMTEXT,
            besnestype MEDIUMTEXT,
            location MEDIUMTEXT,
            custname MEDIUMTEXT,
            phone MEDIUMTEXT,
            email MEDIUMTEXT,

            tspeple MEDIUMTEXT,
            tsuniform MEDIUMTEXT,
            tsother MEDIUMTEXT,
            
            resdone MEDIUMTEXT,
            resreq MEDIUMTEXT,
            resvist MEDIUMTEXT,

            flwdate MEDIUMTEXT,
            
            res2sent MEDIUMTEXT,
            res2vist MEDIUMTEXT,
            res2regect MEDIUMTEXT,
            res2accept MEDIUMTEXT,

            notes LONGTEXT

        ";

        $sql = "CREATE TABLE IF NOT EXISTS $tablename($colomns)";
        $res = mysqli_query($conn, $sql);

    } else {
        die("<b>لا يمكن الاتصال بقاعده البيانات</b>");
    }