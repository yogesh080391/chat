<?php
class ChatHandler{
    private $db;

    public function __construct() {
        include('conn.php');
        $this->db = $conn;
    }
    public function getChatRoom($id=false){
        if($id==false) return false;
        
        $sql = "select * from chat_room where id=".$id;
        $result = $this->db->query($sql)  or die($this->db->error);;
        $chatRoom = $result->fetch_array(MYSQLI_ASSOC);
        return $chatRoom;
    }
    public function __destruct() {
        $this->db->close();
    }
}
?>