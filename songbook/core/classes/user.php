<?php 
class User{
	public $id;
	public $username;
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function showUserDetails() {
		echo "<p>" . $this->id . "</p>";
        echo "<p>" . $this->username . "</p>";
        echo "<p>" . $this->firstName . "</p>";
        echo "<p>" . $this->lastName . "</p>";
        echo "<p>" . $this->email . "</p>";

    }
    public function getFullName() {
        echo "<p> $this->firstName $this->lastName </p>";
    }
    //TODO:Add create user and select user details
}
?>