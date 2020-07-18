<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.js"></script>

<textarea id="editor" name="REX_INPUT_VALUE[1]"></textarea>
<input type="text" style="display: none;" value="REX_VALUE[1]" id="textInDb">
<script>
    function initJodit() {
        if(typeof Jodit != "undefined") {
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