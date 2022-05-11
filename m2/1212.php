<?php
class User
{
    protected string $name;
    protected string $email;
    public int $role;
    public function __construct($name,$email,$role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setRole($role){
       $this->role = $role ;
    }
    public function getInfo(){
        return $this->name.'<br>'.$this->email;
    }
    public function isAdmin(){
        if($this->role==1){
            echo 'Admin';
        }
        if ($this->role==2){
            echo 'là người dùng bình thường';
        }
    }
}
$user = new User();
$user->setName('Trần Ngọc Linh');
$user->setEmail('nguyenlinh@gmail.com');
$user->setRole(2);
echo $user->getInfo().'<br>';
$user->isAdmin();