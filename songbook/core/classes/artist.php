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

        //create artist
        public function create(){
            $params = array(
                'name' => array($this->name, PDO::PARAM_STR),
            );
    
            $sql = "INSERT INTO artist(name)
                    VALUES(:name)";
    
            $this->db->query($sql, $params);
            return $this->db->lastInsertId();
        }

        //update artist
        public function update(){
            $params = array(
                'id' => array($this->id, PDO::PARAM_INT),
                'name' => array($this->name, PDO::PARAM_STR)
            );
    
            $sql = "UPDATE artist SET
                    name = :name
                    WHERE id = :id";
    
            return $this->db->query($sql, $params);
        }

        //delete artist

        public function delete($id) {
            $params = array(
                'id' => array($id, PDO::PARAM_INT)
            );
            
            $sql = "DELETE FROM artist 
                    WHERE id = :id";
            return $this->db->query($sql, $params);
        }
}

?>