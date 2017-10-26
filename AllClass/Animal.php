<?php

//1.定義Animal類別
//2.屬性position可被繼承
//3.初始化時可以設定物稱名稱及初始化位置
//4.可以取得物名稱
//5.可以從外部得到食物
class Animal{
    private $animalType="default animal Type";//若沒有呼叫父類別的建構子，會印出這個
    protected $position;

    public function __construct($animalTypeFromOut)
    {
        $this->animalType =$animalTypeFromOut;
        $this->position=["x"=>0,"y"=>0];
    }
//    protected function  getAnimalType(){
//        return $this->animalType;
//    }
    public function  getAnimalType(){
        return $this->animalType;
    }

    public function getFood($foodName){
        echo "得到食物:$foodName<br>";
    }


}

//$animal=new Animal("test");

