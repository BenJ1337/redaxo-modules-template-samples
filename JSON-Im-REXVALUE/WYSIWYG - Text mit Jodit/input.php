<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.js"></script>

<?php

    $rex_value_json_key = "jodit-textarea-1";
    $value1 = rex_var::toArray("REX_VALUE[1]");
    $rex_value_1 = $value1[$rex_value_json_key];

    echo '<textarea id="editor" name="REX_INPUT_VALUE[1]['.$rex_value_json_key.']"></textarea>' .
        '<input type="text" style="display: none;" value=\'' .
        $rex_value_1 .
        '\' id="textInDb">';

?>
<script>
    function initJodit() {
        if (typeof Jodit != "undefined") {
            console.log("Jodit is loaded.");
            var editor = new Jodit('#editor');
            editor.value = document.getElementById("textInDb").value;
        } else {
            console.log("Jodit is not loaded yet.");
            setTimeout(initJodit, 50);
        }
    }
    initJodit();
</script>