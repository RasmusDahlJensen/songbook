<?php 
class User{

    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $birthday;

    public function showUserDetails() {
        echo "<p>" . $this->firstName . "</p>";
        echo "<p>" . $this->lastName . "</p>";
        echo "<p>" . $this->email . "</p>";
        echo "<p>" . $this->birthday . "</p>";
    }
    public function getFullName() {
        echo "<p> $this->firstName $this->lastName </p>";
    }

}
?>