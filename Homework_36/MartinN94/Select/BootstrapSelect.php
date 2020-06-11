<?php
namespace MartinN94\Select;

class BootstrapSelect extends ASelect{
    const BOOTSTRAP_FORM_CLASS = "form-group";
    const BOOTSTRAP_SELECT_CLASS = "form-control";

    public function makeSelect(){
        echo "<div class=".BootstrapSelect::BOOTSTRAP_FORM_CLASS.">";
        echo "<select name=".$this->getName().' "class"='.BootstrapSelect::BOOTSTRAP_SELECT_CLASS.'>"';
        echo $this->makeOptions($this->value);
        echo "</select>";
        echo "</div>";
    }

}