<?php

// class CustomException extends Exception
// {
//     public function errorMessage()
//     {
//         return 'loi ' . $this->getMessage() . ' tai vi tri ' . $this->getLine();
        
//     }
// }
  
// function checkNumber($number){
//     if ($number == 0){
//         throw new CustomException('co loi',1);
      
//     }else{
//         return $number;
//     }
// }

// try{
//    echo checkNumber(9);
//     echo 'so chia can khac 0 ';
// }
// catch(Exception $e){
//     echo $e-> getMessage();
// }


// --------------------------------------------------
//Định nghĩa exception tuỳ biến


class CustomException extends Exception
{
    public function errorMessage()
    {
        return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
    }
}

$email = "someone@example..com";

try {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new CustomException($email);
    }
} catch (CustomException $e) {
    echo $e->errorMessage();
}





