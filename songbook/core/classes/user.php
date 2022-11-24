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

        //FIXME: can't get details to show for individual users
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

    //Create user
    public function create(){
        $params = array(
            'username' => array($this->username, PDO::PARAM_STR),
            'firstname' => array($this->firstname, PDO::PARAM_STR),
            'lastname' => array($this->lastname, PDO::PARAM_STR),
            'email' => array($this->email, PDO::PARAM_STR),
            'password' => array($this->password, PDO::PARAM_INT)
        );

        $sql = "INSERT INTO user(username, firstname, lastname, email, password)
                VALUES(:username, :firstname, :lastname, :email, :password)";

        $this->db->query($sql, $params);
        return $this->db->lastInsertId();
    }

}
?>