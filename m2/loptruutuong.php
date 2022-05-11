<?php
// // khai bao lop truu tuong tu khoa abstract
//     abstract class Xehoinuoc{
//         public abstract function drink();
//     }
//     abstract class Car extends Xehoinuoc{
//         public abstract function move();
//         public abstract function stop();

//     }
//     class Vinfast extends Car
//     {
//         public function move()
//         {
//             echo "ok <br>";
//         }
//         public function stop()
//         {
//             echo "go <br>";
//         }
//         public function drink()
//         {
//             echo "bro";
//         }
//     }
    // $alo =new Vinfast();
    // $alo -> move();
    // $alo -> stop();
    // $alo -> drink();
// check in 2 tạo Interface
   
    class Vinfast  implements Bird,Fish
    {
        public function fly()
        {
            echo "ok <br>";
        }
        public function swim()
        {
            echo "go <br>";
        }  
    }
    interface Bird{
        public function fly();
   }
   interface Fish{
       public function swim();
   }   
    $bird = new Vinfast();
    $bird -> fly();
    $bird -> swim();
?>