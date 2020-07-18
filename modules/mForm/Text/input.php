<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.1.39/jodit.min.js"></script>
<?php
    $mForm = new MForm();
  
    $mForm->addTab('Einstellungen');
    $mForm->addTextAreaField("2.jodit_editor", array('label'=>'Text',
    	'class'=>'jodit-editor'));
    $mForm->closeTab();

    $mForm->addTab('Breite');
    $mForm->addSelectField("1.bootstrap_column_width",
    	array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6', 7=>'7', 8=>'8', 9=>'9', 10=>'10', 11=>'11', 12=>'12'), 
    	array('label'=>'Spaltenbreite'));
    $mForm->closeTab();
    
    echo $mForm->show();
?>
<script>
    function initJodit() {
        if (typeof Jodit != "undefined") {
            console.log("Jodit is loaded.");
           new Jodit('.jodit-editor');
        } else {
            console.log("Jodit is not loaded yet. - " + new Date());
            setTimeout(initJodit, 50);
        }
    }
    initJodit();
</script>
