<?php

require_once '../database/connection.php';

class Add {

    private $db, $connection;
    private $name, $address, $lng, $lat, $provider;
    
    function __construct() {
        $this->db = new DB_Connection();
        $this->connection = $this->db->getConnection();
    }
    
    public function addNew($name, $address, $lng, $lat, $provider)
    {
        $this->name = $name;
        $this->address = $address;
        $this->lng = $lng;
        $this->lat = $lat;
        $this->provider = $provider;

        $query = "INSERT INTO btsloc (name, address, lng, lat, type) VALUES ('$name', '$address', '$lng', '$lat', '$provider')";
        $insert = mysqli_query($this->connection, $query);
    }
}

$inputProcess = new Add();
if(isset($_POST)){
    $name = $_POST['NAME'];
    $address = $_POST['ADDR'];
    $lng = $_POST['LNG'];
    $lat = $_POST['LAT'];
    $provider = $_POST['TYPE'];

    foreach ($name as $key => $value) {
        $inputProcess->addNew($name[$key], $address[$key], $lng[$key], $lat[$key], $provider[$key]);
    }
}
header("Location: ../map.html");
?>