<?php
    // interface move{
    //     function move();
    // }
    // interface fly{
    //     function Fly();
    // }
    // class Bird implements fly{
    //     public function fly(){
    //         return "i can fly";
    //     }
    //     public function move(){
    //         return "go . lets go";
    //     }
    // }

   interface iTemplate
   {
       public function setVariable($name,$var);
       public function getHtml($template);
   } 
   // trien khai interface iTemplate
   // thuc hien dung , ma khong loi.
   class BadTemplate implements iTemplate
   {
       private array $vars = [];
       public function setVariable($name, $var)
       {
           $this -> vars[$name] = $var;
       }
       public function getHtml($template)
       {
           foreach ($this->vars as $name => $value){
               $template = str_replace ('{' . $name . '}', $value, $template);
           }
           return $template;
       }
   }

   // vd ke thua interface.//
   interface A
   {
       public function foo();
   }
   interface B extends A
   {
       public function baz( $baz);
   }
   // thuc hien dung ma khong gap loi.//
   class C implements B
   {
       public function foo(){

       }
       public function baz( $baz)
       {

       }
   }
   
   interface E
   {
       const VALUE = 'Interface constant';
   }
   // hien thi thuoc tinh hang gia tri
   echo E::VALUE;
   class D implements E
   {
       const VALUE = 'Class constant';
   }
?>