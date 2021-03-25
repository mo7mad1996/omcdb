<?php
    if( isset($_POST['add']) ) {

        $arr = $_POST ;
        array_shift($arr);

        $sql = "INSERT INTO $tablename(";
        
        $keys = array();
        foreach($arr as $key=>$value) {
            array_push($keys, "$key ");
        }
        $sql .= implode(", ", $keys);

        $sql .= ") VALUES (" ; // "INSERT INTO CUSTOMERS( KEYS ) VALUES ("
        
        $values = array();
        foreach($arr as $value) {
            array_push($values, "'$value'");
        }
        $sql .= implode(", ", $values);
        $sql .= ")";

        mysqli_query($conn, $sql);
    
    }
?>