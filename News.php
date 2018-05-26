<?php
require __DIR__.'/Article.php';
class News
{
    protected $file;
    
    public function __construct($file)
    {
        $this->file = $file;
    }
    
    public function getNews()
    {
        $data = file($this->file);
        foreach ($data as $line) {
            $ret[] = new Article($line);
        }
        return $ret;
    }
}


?>