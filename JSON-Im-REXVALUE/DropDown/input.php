<?php
    $rex_value_json_key = "dropdown1";
    $options = array(
        "Bezeichnung Option 1" => "Wert Option 1",
        "Bezeichnung Option 2" => "Wert Option 2",
        "Bezeichnung Option 3" => "Wert Option3"
    );
    $value1 = rex_var::toArray("REX_VALUE[1]");
    $rex_value_1 = $value1[$rex_value_json_key];

    echo '<label for="options">Options:</label>
    <select name="REX_INPUT_VALUE[1]['.$rex_value_json_key.']" id="options">';
    foreach ($options as $key => $value) {
        $selected = '';
        if($value == $rex_value_1) {
            $selected = 'selected';
        }
        echo '<option value="'.$value.'"'.$selected.'>'.$key.'</option>';
    }
    echo '</select>';
?>