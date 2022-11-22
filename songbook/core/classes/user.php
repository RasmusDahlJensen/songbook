<?php 
class User{
	public $id;
	public $username;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $birthday;
	public $address;
    public $postcode;
    public $city;
    public $country;

    public function showUserDetails() {
		echo "<p>" . $this->id . "</p>";
        echo "<p>" . $this->username . "</p>";
        echo "<p>" . $this->firstName . "</p>";
        echo "<p>" . $this->lastName . "</p>";
        echo "<p>" . $this->email . "</p>";
        echo "<p>" . $this->birthday . "</p>";
		echo "<p>" . $this->address . "</p>";
        echo "<p>" . $this->postcode . "</p>";
        echo "<p>" . $this->city . "</p>";
        echo "<p>" . $this->country . "</p>";
    }
    public function getFullName() {
        echo "<p> $this->firstName $this->lastName </p>";
    }
	public function getFullAddress() {
        echo "<p> $this->address, $this->postcode, $this->city, $this->country </p>";
    }

}
?>