<?php
class Fruit{
    public $name;
    public $color;

    public function set_name($setnameoffruit){
        return $setnameoffruit;

    }

    public function get_name($setnameoffruit){
        return"the fruit name is $setnameoffruit";

}
}

$fruit1 = new Fruit();
$fruit2 = new Fruit();
$fruit3 = new Fruit();
$fruit4 = new Fruit();

$fruit1->name="Orange";
$fruit2->name="Watermelon";
$fruit3->name="Pinneapple";
$fruit4->name="grape";




$fruit1->set_name("Orange");
$fruit2->set_name("Watermelon");
$fruit3->set_name("Pinneapple");
$fruit4->set_name("grape");

echo $fruit1->get_name("Orange");
echo $fruit2->get_name("Watermelon");
echo $fruit3->get_name("Pinneapple");
echo $fruit4->get_name("grape");













