<?php
$rex_value_json_key = "checkbox1";
$value1 = rex_var::toArray("REX_VALUE[1]");
$rex_value_1 = $value1[$rex_value_json_key];
$checkbox_value = "Mein Wert";
$checkbox_bezeichnung = "Meine Bezeichnung";

$checked = "";
if ($rex_value_1 == $checkbox_value) {
    $checked = "checked";
}

echo    '<div class="checkbox">'.
        '<label for="checkbox1">'.
        '<input name="REX_INPUT_VALUE[1]['.$rex_value_json_key.']" type="checkbox" id="checkbox1" value="'.$checkbox_value.'"'.$checked.'>'.
        $checkbox_bezeichnung.'</label>'.
        '</div>';

?>