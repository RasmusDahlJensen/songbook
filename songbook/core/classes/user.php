<?php
class User {
	public $firstname;
	public $lastname;
	public $email;
	
	public function showUserDetails() {
		echo "<p><h2>Fornavn: ".$this->firstname."</h2><br />";
		echo "Efternavn: ".$this->lastname."<br />";
		echo "Email: ".$this->email."</p>";
	}


}
?>