<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','on');
define("HOSTNAME","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","sds lab");

// var_dump($_POST);
if(isset($_POST["Relocate"])){
$table = $_POST["Relocate"];
// $user=$_POST['user'];

$con=mysqli_connect(HOSTNAME,DBUSER,DBPASS) or die("connection failed".myspli_error());
$mysqlcon=mysqli_select_db($con, DBNAME);
//selection of table comments
//var_dump($_POST);
//die();
$sq1="SELECT * from ".$table;

$result=$con->query($sq1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row['INDEX NO.']==1)
        {
        echo "NAME: " . $row["NAME"]."<br>";
    echo "MOBILE NO.: " . $row["MOBILE NO."]."<br>";
}
}
}
}
?>