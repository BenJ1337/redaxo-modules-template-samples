<?php
$rex_value_json_key = "text-input-1";
$value1 = rex_var::toArray("REX_VALUE[1]");
$rex_value_1 = $value1[$rex_value_json_key];

echo '<div class="form-group">'.
    '<label for="text1">Text:</label>'.
    '<input type="text" id="text1" name="REX_INPUT_VALUE[1]['.$rex_value_json_key.']" value="'.$rex_value_1.'" />'.
    '</div>';

?>