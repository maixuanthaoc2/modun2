<?php


class CustomeException extends Exception
{
    public function errorMessage()
    {
        return ' loi o dong ' . $this->getLine() . '</br> khong phai so can chon';
    }
}

try

{
    if( $number==0){
        throw new CustomException()
    }
}