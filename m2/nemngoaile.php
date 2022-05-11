<?php

use CustomException as GlobalCustomException;

class customException extends Exception
{
    public function errorMessage()
    {
        return $this -> getMessage() . 'is not a valid number';

    }
}
$email = "someone@example.com";
try{
    try{
        if(str_contains($email, "example")){
            throw new Exception($email);
        }
    }catch(Exception $e){
            throw new CustomException($email);
        }
    }catch(CustomException $e){
        echo $e ->errorMessage();
    }finally{
       echo 'secon finally .<br>'; 
    }
    echo "hello word";
