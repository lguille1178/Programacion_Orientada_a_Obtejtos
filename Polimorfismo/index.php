<?php   

/* */

abstract class Base{
    protected $name;

    private function getClassName(){
        return get_called_class();
    }

    public function login()
    {
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }
}

class Admin extends Base
{
    public function __construct($name){
        $this->name = $name;
    }
}

class User extends Base
{
    public function __construct($name){
        $this->name = $name;
    }
}

class Guest extends Base {
    protected $name = "Invitado";
}

//Esto nos puede dar distintas funcionalidades
$gest = new Guest;
echo $gest->login();

$admin = new Admin('Luis');
echo $admin->login();

$user = new User('Juan');
echo $user->login();