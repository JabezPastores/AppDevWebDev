<?php
class User
{
    public $name;
    public $email;

    //constructor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . 'The user is logged in';
    }

    public function logemail()
    {
        echo $this->name . 'The user email logged in';
    }
}

$user1 = new user('Jabez Pastores', 'Jabez@email.com');
echo '<br>';

$user1->login();
echo '<br>';

$user1->logemail();
?>