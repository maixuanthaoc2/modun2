<?php
//Subclass: lop con
//Super class : lop cha.
    // class SubClass extends SupperClass
    // {
    //     //
    // }



    //vd 2 ghi de phuong thuc



    class Animal
    {
        function Say(){
            echo 'noi dieu gi ';
        }
    }
    class Cat extends Animal
    {
        function Say()
        {
            echo 'meo meo <br>';
        }
        
    }//ghi de.
    class Dog extends Animal
    {
        function Say()
        {
            echo 'go go <br>';
        
        }
        parent::Say();
        //goi phuong thuc lop cha
    
}
    $cat1 = new Cat ();
    $cat1->Say();
    $dog1 = new Dog();
    $dog1 ->Say();
?>