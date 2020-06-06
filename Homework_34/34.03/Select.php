<?php
class Select{
    //Property
    //Create String variable $name.
    //Create Array variable $value.
  public $name;
  public $value;
   
    //Methods
    // create methods getName() and  setName($name)
    //The string set by this method will be the name of the select field.
  function getName(){
    return $this->name;
  }

  function setName($name){
    $this->name=$name;
  }

   
    //Create method setVallue($value)
    //This methods provides the values used for the options
    //in the select field and checks to be sure the value is an array.
    function setValue($value){
      if (is_array($value)) {
        foreach ($value as $key => $browser) {
          $this->value[]=$browser;
        }
      }

    } 
 
    //Create method getValue()
    function getValue(){
      return $this-value;
    }
   
    // Create method makeOptions($value)
    //This method creates the actual select options. It is private, 
    //since there is no need for it outside the operations of the class.
    private function makeOptions($value){
      foreach ($value as $key => $browser) {
        echo "<option value='$browser'>$browser</option>";
      }
    }

 
    // Create method makeSelect()
    //This method puts it all together to create the select field.
    function makeSelect(){
      echo "<select name=".$this->getName().'>"';
      echo "<option value='0' selected>Choose browser</option>";
      echo $this->makeOptions($this->value);
      echo "</select>";
    }
 
  } 
  