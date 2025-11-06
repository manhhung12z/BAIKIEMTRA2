<?php 
class ConnectDatabase{
 private $servername ="localhost";
 private $database="quanliphong";
 private $username="root";
 private $password="";
 private $conn;
 public function connect(){
$this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database);
if($this->conn->connect_error)
{
    die("connect failed.".mysqli_connect_error());
}
else
    
    return $this->conn;
}
public function close()
{
    $this->conn->close();
} 
}
?>
