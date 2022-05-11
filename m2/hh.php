<?php



    interface Bird{
        public function fly();
   }
   interface Fish{
       public function swim();
   }   
   class Vinfast implements Bird,Fish
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
   $bird = new Vinfast();
   $bird -> fly();
   $bird -> swim();
?>