<?php 
class User{
	public $id;
	public $username;
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    private $db;

    public function __construct(){
        global $db;
        $this->db = $db;
    }

    //List af users
    public function listUsers() {
        $sql ="SELECT id, username, firstname
                FROM user 
                ORDER BY username";
        return $this->db->query($sql);
    }

    //User details
    public function details($id) {
		$params = array(
			'id' => array($id, PDO::PARAM_INT)
		);
    $sql = "SELECT u.id, u.username, u.firstname, u.lastname, u.email, u.password 
				FROM user u 
				WHERE u.id = :id";
		return $this->db->query($sql, $params, Db::RESULT_SINGLE);
	}


}
?>