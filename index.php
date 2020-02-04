<?php

// PARENT CLASSES

class User
{
    public $username;
    protected $age;
    public $role = 'member';

    public function __construct($name, $numberofYearsOnPlanet)
    {
        $this->username = $name;
        $this->age = $numberofYearsOnPlanet;
    }

    public function addFriend()
    {
        return "$this->username added a new fwend";
    }

    public function message()
    {
        return "$this->username is $this->age years old";
    }

    //  getters

    public function getAge()
    {
        return $this->age;
    }

    // setters

    public function setAge($val)
    {
        $this->age = $val;
    }

    // static methods

    public static function init()
    {

        echo 'this is a staic function from the User class <br>';
    }
};

User::init();


$userOne = new User('bob', 67);
$userTwo = new User('jane', 34);

echo $userOne->setAge(100);

echo $userOne->username . '<br>';
echo $userOne->getAge() . '<br>';
echo $userOne->addFriend() . '<br>';
echo $userOne->role . '<br>';
echo $userOne->message() . '<br>';

echo $userTwo->username . '<br>';
echo $userTwo->getAge() . '<br>';
echo $userTwo->addFriend() . '<br>';


class AdminUser extends User
{

    public $level;
    public $role = 'Admin';

    public function __construct($name, $numberofYearsOnPlanet, $level)
    {
        $this->level = $level;
        parent::__construct($name, $numberofYearsOnPlanet);
    }

    public function message()
    {
        return "$this->username is $this->age years old today!";
    }
}

$userThree = new AdminUser('john', 28, 5);

echo $userThree->username . '<br>';
echo $userThree->level . '<br>';
echo $userThree->role . '<br>';
echo $userThree->message() . '<br>';


// static utility function

class Bouncer
{
    public static $aged = ['no the night, pal...', 'time to party!'];

    public static function askAge($age)
    {
        if ($age < 18) {
            echo self::$aged[0];
        } else {
            echo self::$aged[1];
        }
    }
}

Bouncer::askAge(16);
