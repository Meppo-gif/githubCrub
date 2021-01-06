<?php

function inputElement($icon,$placeholder,$name,$value){
    $ele="
     <div class=\"input-group\">
    <div class=\"input-group-text bg-warning\">$icon</i></div>
    <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder'class=\"form-control\" id=\"autoSizingInputGroup\" placeholder=\"Username\">
    </div>
    
    ";
    echo $ele;
}

function buttonElement($btnid,$styleclass,$text,$name,$attr){
    $btn="
        <button name='$name''$attr' class='$styleclass' id='$btnid'>$text</button>
    ";

    echo $btn;
}
?>