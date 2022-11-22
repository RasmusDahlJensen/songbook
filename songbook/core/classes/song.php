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

}
?>