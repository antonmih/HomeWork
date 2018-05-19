<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>OOP</title>
</head>
<body> 
<?php
class GuestBookRecord 
{
    protected $message;
    public function __construct($message) 
    {
        $this->message = $message;
    }
}  
class GuestBook
{
    protected $file;
    public function __construct($file)
    {
        $this->file = $file;
    }
    public function GetAll()
    {
        $data = file($this->file);
        $ret = [];
        foreach ($data as $line) {
        $ret[] = new GuestBookRecord($line);
        }
        return $ret; 
    }
} 
$gb = new GuestBook(__DIR__.'/db.txt', FILE_IGNORE_NEW_LINES);
var_dump($gb->GetAll());
?>
</body>
</html>