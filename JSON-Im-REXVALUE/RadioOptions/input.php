<?php
$rex_value_json_key = "radio1";
$options = array(
    "Bezeichnung Option 1" => "Wert Option 1",
    "Bezeichnung Option 2" => "Wert Option 2",
    "Bezeichnung Option 3" => "Wert Option 3"
);

$value1 = rex_var::toArray("REX_VALUE[1]");
$rex_value_1 = $value1[$rex_value_json_key];
echo $rex_value_1;
foreach ($options as $key => $value) {
    $checked = '';
    if($value == $rex_value_1) {
        $checked = 'checked';
    }
    echo '<input name="REX_INPUT_VALUE[1]['.$rex_value_json_key.']" type="radio" id="'.$key.'" value="'.$value.'"'.$checked.'>';
    echo '<label for="'.$key.'">'.$key.'</label>';
}
?>