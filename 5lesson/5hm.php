<?php
class GuestBook
{
    protected $way;
    protected $file;
    public $text;
    public $str;

    public function __construct($way)
    {
       $this->way = $way;
       $this->file = file($this->way);
    }

    public function getData()
    {
        foreach ($this->file as $str)
        {
            return $str;
        }
    }
    public function append($text)
    {
        $this->file[] = $text;
    }
    public function save()
    {
        $this->str = implode(",", $this->file);
        file_put_contents(__DIR__ . '/Quest.txt',$this->str);
    }

}

$files = new GuestBook(__DIR__ . '/Quest.txt');
$files->append('Anton');
$files->save();






?>