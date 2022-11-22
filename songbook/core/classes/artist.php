<?php 
class Artist{
    public $id;
    public $name;
    public $created_at;
    public $update_at;

    private $db;

    public function __construct(){
        global $db;
        $this->db = $db;
    }

    public function listArtist() {
        $sql ="SELECT id, name
                FROM artist 
                ORDER BY name";
        return $this->db->query($sql);
    }
}
?>