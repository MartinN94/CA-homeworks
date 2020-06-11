<?php
namespace MartinN94\Select;

abstract class ASelect{
    protected $name;
    protected $value;

    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name=$name;
    }

    function setValue($value){
        if (is_array($value)) {
          foreach ($value as $key => $browser) {
            $this->value[]=$browser;
          }
        }
  
    } 
   
    function getValue(){
        return $this-value;
    }

    protected function makeOptions($value){
        foreach ($value as $key => $browser) {
          echo "<option value='$browser'>$browser</option>";
        }
    }

    public abstract function makeSelect();
}