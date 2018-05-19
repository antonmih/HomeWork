<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
class View 
{
  protected $file;

  function __construct () 
  {
    
  }
  
  function assign ($name, $value) 
  {
    $this->file[$name] = $value; 
  }
  
  function display ($template) 
  {
    foreach ($this->file as $key => $var) {
        $$key = $var;
    }
    require __DIR__.'/'.$template;
  }
  
}

$class = new View();
$class->assign('message','крутой');
$class->display('test.php');
 
?>
</html>