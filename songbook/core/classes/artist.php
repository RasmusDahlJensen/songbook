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

    //Artist list
    public function listArtist() {
        $sql ="SELECT id, name
                FROM artist 
                ORDER BY name";
        return $this->db->query($sql);
    }

    //Artist details
    public function details($id) {
		$params = array(
			'id' => array($id, PDO::PARAM_INT)
		);
		$sql = "SELECT a.id, a.name 
				FROM artist a 
				WHERE a.id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}

        //Opræt artist
        public function create(){
            $params = array(
                'name' => array($this->name, PDO::PARAM_STR),
            );
    
            $sql = "INSERT INTO artist(name)
                    VALUES(:name)";
    
            $this->db->query($sql, $params);
            return $this->db->lastInsertId();
        }

}

?>