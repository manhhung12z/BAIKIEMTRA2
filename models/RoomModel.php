<?Php
include_once 'config/ConnectDatabase.php';
class RoomModel{
    private $conn;
    private $ConnectDatabase;
    public function __construct(){
        $this->ConnectDatabase = new ConnectDatabase();
        $this->conn = $this->ConnectDatabase->connect();
    }
    public function getAllPhong() {
            $sql = "SELECT * FROM phong";
            $stmt = $this->conn->query($sql);
             if($stmt)
            {
              return $stmt;
            }
        }
}
?>