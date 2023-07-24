<?php

$x="munir";
echo $x."<br/>";



function myname(){
    echo "munir"."<br/>";
}

echo myname();


class human{
    public $name;
}

$people = new human();
$people->name="munir";
echo $people->name;