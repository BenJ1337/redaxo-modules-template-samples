<?php
    $rex_values_content_settings = rex_var::toArray("REX_VALUE[2]");
?>

<div>
    <?php
    $images = explode(',', "REX_MEDIALIST[1]");
    $picturesPerRow = $rex_values_content_settings['pics_per_row'];

    $index = 0;

    echo "<div class='row gallery-wrapper ".$rex_values_content_settings['gallery_theme_class']."'>";
    foreach ( $images as $key=>$img)
    {
        $title = rex_media::get($img)->getTitle();
        echo '<div style="margin: 10px 0;" class="col-xs-12 col-sm-6 col-md-'.(12/$picturesPerRow).'">
                <div class="gallery-img">
                    <img class="img-fluid gallery-REX_SLICE_ID" alt="'.$title.'" id="gallery-REX_SLICE_ID-'.$key.'" src="/media/'.$img.'">
                </div>
              </div>';

    }
    echo "</div>";
    ?>
</div>

<script>
    function openPhotoSwipe(index=0) {
        var pswpElement = document.querySelectorAll('.pswp')[0];

        var items = [
           <?php
                $images = explode(',', "REX_MEDIALIST[1]");
                foreach ($images as $key=>$img) {
                    echo "{
                            src: '/media/".$img."',
                            w: ".rex_media::get($img)->getWidth().",
                            h: ".rex_media::get($img)->getHeight().",
                            pid: '".rex_media::get($img)->getFileName()."'";
                    if(sizeof($images)-1 == $key) {
                        echo "}";
                    }else {
                        echo "},";
                    }
                }
            ?>
        ];


        var options = {
            index: Number(index),
            showAnimationDuration: 0,
            hideAnimationDuration: 0,
            shareEl: false,
        };


        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    }

    $(document).ready(function() {
        $(".gallery-REX_SLICE_ID").click(function() {
            let classes = $(this).attr("id").split(" ");
            console.log(classes);
            classes.forEach(function(item) {
                if(item.includes("gallery")) {
                    let index = item.split("-")[2];
                        openPhotoSwipe(index);
                }
            })
        });
    });
</script>