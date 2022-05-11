<?php
 // khai bao lop User
    class User
    {
       protected string $name;
        protected string $email;
        public int $role;

        // public function __construct($name,$email,$role)
        // {
        //     $this->name = $name;
        //     $this->email = $email;
        //     $this->role = $role;
        // }
        public function getInfo(){
           return "ten : ".$this->name . "email:".$this->email;
        } 
        public function isAdmin(){
            if($this->role == 1){
               echo "admin" ;
            }
            else if($this->role ==2){ 
                echo "nguoi dung binh thuong";
            }
            
        }
        public function setName($name){
            $this->name = $name;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setRole($role){
            $this->role = $role;
        }
    }
    $user1 = new User();
    $user1 ->setName('thao').'<br>';
    $user1 ->setEmail('thao@123').'<br>';
    $user1 ->setRole(2);
    echo $user1->getInfo().'<br>';
    echo $user1->isAdmin();
    


