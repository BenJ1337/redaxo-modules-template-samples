<?php

    $rex_value_1 = "REX_VALUE[1]";
    $checkbox_value = "Mein Wert";
    $checkbox_bezeichnung = "Meine Bezeichnung";

    $checked = "";
    if ($rex_value_1 == $checkbox_value) {
        $checked = "checked";
    }

    echo '<input name="REX_INPUT_VALUE[1]" type="checkbox" id="checkbox1" value="'.$checkbox_value.'"'.$checked.'>'.
        '<label for="checkbox1">'.$checkbox_bezeichnung.'</label>';

?>