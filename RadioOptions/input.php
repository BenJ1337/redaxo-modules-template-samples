<?php
$options = array(
    "Bezeichnung Option 1" => "Wert Option 1",
    "Bezeichnung Option 2" => "Wert Option 2",
    "Bezeichnung Option 3" => "Wert Option 3"
);
$rex_value_1 = "REX_VALUE[1]";
echo $rex_value_1;
foreach ($options as $key => $value) {
    $checked = '';
    if($value == $rex_value_1) {
        $checked = 'checked';
    }
    echo '<input name="REX_INPUT_VALUE[1]" type="radio" id="'.$key.'" value="'.$value.'"'.$checked.'>';
    echo '<label for="'.$key.'">'.$key.'</label>';
}
?>