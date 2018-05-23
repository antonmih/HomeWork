<?php
class View 
{
    protected $data;
    
    public function assign($name, $value)
    {
        $this->data1[$name] .= $value;
    }
    
    
    public function Display($templates)
    {
        foreach ($this->data1 as $key => $var) {
        $$key = $var;
    }
        include $templates;
    }
}





?>