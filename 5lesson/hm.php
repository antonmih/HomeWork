<?php

class Item
{
    protected $color;
    public function show()
    {
        echo $this->color;
    }
}


class Table
    extends Item
{
    public $legs;
    public function show()
    {
        echo 'AAAAA';
        parent::show();
    }
    public function __construct($color)
    {
        $this->color = $color;
    }
}

$table1 = new Table('green');
$table1->show();
//echo $table1->color;
//echo $table1->legs;




?>