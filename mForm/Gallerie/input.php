<?php
    $mForm = new MForm();
    $mForm->addTab('Einstellungen');
    $mForm->addMedialistField(1, array('label'=>'Bilder'));
    $mForm->addSelectField("2.pics_per_row", array(1=>'1',2=>'2',3=>'3',4=>'4',5=>'5'), array('label'=>'Bilder pro Reihe'));

    $mForm->addSelectField("2.gallery_theme_class", 
        array(''=>'','rand'=>'Rand','zoom'=>'Zoom','theme3'=>'TODO'), 
        array('label'=>'Theme'));   
    $mForm->closeTab();

    $mForm->addTab('Breite');
    $mForm->addSelectField("1.bootstrap_column_width", 
    	array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6', 7=>'7', 8=>'8', 9=>'9', 10=>'10', 11=>'11', 12=>'12'), 
    	array('label'=>'Spaltenbreite')); 
    $mForm->closeTab();
    
    echo $mForm->show();
?>
