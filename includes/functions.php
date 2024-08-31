<?php
function Get2DAssoc($sql){
    $conn = new mysqli("localhost", "root", "", "toho");
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    $result  = $conn->query($sql);
    $DBA     = array();
    $counter = 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while($DBA[$counter] = $result->fetch_assoc()) {
          $counter = $counter + 1;
        }
    }
    $conn->close();
    return($DBA);
}

function GetSingleValue($sql){
    $conn = new mysqli("localhost", "root", "", "toho");
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    $result = $conn->query($sql);
    $row = null;

    if ($result->num_rows > 0) {
        $row = $result->fetch_row();
        $conn->close();
        return $row[0];
    } else {
        $conn->close();
        return null;
    }

    $conn->close();
    return($row);
}