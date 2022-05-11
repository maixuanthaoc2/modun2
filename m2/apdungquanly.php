<?php

    // class MyClass
    // {
    //     function __construct()
    //     {
    //         echo 'Calling constructor<br/>';
    //     }
    
    //     function some_method()
    //     {
    //         echo 'Calling a method<br/>';
    //     }
    
    //     function __destruct()
    //     {
    //         echo 'Calling destructor<br/>';
    //     }
    // }
    // ghi de phuong thuc,
        // class A
        // {
        //     function m(){
        //         echo 'ten tuoi bo .';
        //     }
        // }
        // class B extends A
        // {
        //     function m(){
        //         echo 'ten tuoi ban <br>';
        //         parent ::m();// them thuoc tinh tu cha
        //     }
        // }
        // $b1 = new B();//khoi tao lop .
        // $b1 ->m();

            class Eployee extends Person
            {
                function __construct(string $employee_name){
                    $this->setname($employee_name);
                }
            }
?>
