<?php
include_once("classwork1.php");
class Admin extends User {
    public $username;

    public function __construct($name) {
        parent::__construct($name);
        $this->username = $name;
    }

    public function sayHello() {
        return "Hello admin, {$this->username}";
    }
}

$admin1 = new Admin("Munir");
echo $admin1->sayHello();