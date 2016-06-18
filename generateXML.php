<?php
require("database/connection.php");

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}

// Opens a connection to a MySQL server
$connection = mysqli_connect("localhost", "root", "", "bts");

// Select all the rows in the markers table
$query = "SELECT * FROM btsloc WHERE 1";
$result = mysqli_query($connection, $query);
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = mysqli_fetch_array($result)){
  // ADD TO XML DOCUMENT NODE
  echo '<marker name="' . parseToXML($row['name']) . '" address="'.parseToXML($row['address']).'" lat="'.$row['lat'].'" lng="'.$row['lng'].'" />';
  
}

// End XML file
echo '</markers>';

?>