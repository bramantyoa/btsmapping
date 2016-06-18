<?php

require_once ("config.php");

class Connection{

    function getConnection() {
        $connection = mysqli_connect("localhost", "root", "", "bts") or die('Could not connect to MySQL Server.');
        return $connection;
    }
}

?>