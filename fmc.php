<?php
 class fnc{
    var $fname;
    public $username;
    protected $email_address;
    private $password;

public function computer_user( $fname){
    return $fname;
}

public function user_age($fname, $yob){
    $age= date('Y')- $yob;
    return  $fname. " is " .$age;

}

}


$Obj = new fnc();
print $Obj->user_age("Alex", 2004);

?>