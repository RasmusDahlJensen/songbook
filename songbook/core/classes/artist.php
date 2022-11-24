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

    public function details($id) {
		$params = array(
			'id' => array($id, PDO::PARAM_INT)
		);

		$sql = "SELECT a.id, a.name 
				FROM artist a 
				WHERE a.id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}
}

?>