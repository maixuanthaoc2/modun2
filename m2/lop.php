<?php
class Person
{
    public $name;

    function soDo($dai,$rong)
    {
        $this->dai = $dai;
        $this->rong = $rong;
    }

    function getName()
    {
        return $this->name;
    }
}
?>