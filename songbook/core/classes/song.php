<?php 
class Song{

    public $id;
    public $title;
    public $content;
    public $artist_id;
    public $created_at;
    public $update_at;

    private $db;

    public function __construct(){
        global $db;
        $this->db = $db;
    }

    // Listen af sange som er ordered efter sang titel

    public function listSong() {
        $sql ="SELECT id, title
                FROM song 
                ORDER BY title";
        return $this->db->query($sql);
    }

    // Sang detaljer som viser, title, content, navn og artist id

	public function details($id) {
		$params = array(
			'id' => array($id, PDO::PARAM_INT)
		);

		$sql = "SELECT s.title, s.content, a.name, s.artist_id 
				FROM song s 
				JOIN artist a 
				ON s.artist_id = a.id 
				WHERE s.id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}

    //Create sang
    public function create(){
        $params = array(
            'title' => array($this->title, PDO::PARAM_STR),
            'content' => array($this->content, PDO::PARAM_STR),
            'artist_id' => array($this->artist_id, PDO::PARAM_INT)
        );

        $sql = "INSERT INTO song(title, content, artist_id)
                VALUES(:title, :content, :artist_id)";

        $this->db->query($sql, $params);
        return $this->db->lastInsertId();
    }

    //Update sang

	public function update() {
		$params = array(
			'id' => array($this->id, PDO::PARAM_INT),
			'title' => array($this->title, PDO::PARAM_STR),
			'content' => array($this->content, PDO::PARAM_STR),
			'artist_id' => array($this->artist_id, PDO::PARAM_INT)
		);

		$sql = "UPDATE song SET 
				title = :title,
				content = :content,
				artist_id = :artist_id 
				WHERE id = :id";

		return $this->db->query($sql, $params);
	}

    //Delete per id
	public function delete($id) {
		$params = array(
			'id' => array($id, PDO::PARAM_INT)
		);
		
		$sql = "DELETE FROM song 
				WHERE id = :id";
		return $this->db->query($sql, $params);
	}


}
?>