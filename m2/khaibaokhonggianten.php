<?php
// namespace Html;

class Student
{
    // public  $name  ;
    // private  $email  ;
    // protected $favorites;
    private static $school='cg';
    
    // public function __construct($name,$email,$favorites)
    // {
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->favorites = $favorites;
       
    // }
    //get lay gia tri.
    // public function getEmail(){
    //     return $this->email;
    // }
    public static function  school(){
        return self::$school;
    }

}   
    //set thay doi gia tri.
    // $studen = new Student ('thao','thaomx@gmail.com', 22);
    // echo $studen->name.'<br>';
    // echo $studen -> getEmail();
   
    echo Student ::school();
?>