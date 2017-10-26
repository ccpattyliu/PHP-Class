<?php

include_once "Animal.php";
class cat extends Animal
{
    private $petName;

    public function __construct($petNameFromOut)
    {
        parent::__construct("貓");//需要呼叫父類別初始化的方法，否則父類別不會做預定的初始值動作
        $this->petName=$petNameFromOut;
    }
    public function getPetName(){
       //$this->getAnimalType();
        return $this->petName;
    }

}

$cat=new cat("kitty");
echo $cat->getAnimalType();//繼承後可以直接使用父類別的public 方法
