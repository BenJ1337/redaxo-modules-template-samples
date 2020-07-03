<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<style>
    .slick-dots {
        bottom: 10px;
    }
    .slick-dots li.slick-active button::before {
        color: #FFF;
    }
    .slick-dots li button::before {
        color: #cacaca;
    }
    .slick-next {
        right: 20px;
    }
    .slick-prev {
        left: 20px;
    }
    .slick-prev::before,
    .slick-next::before {
        color: #cacaca;
    }
</style>


<div class="slick-slider" style="height: 500px; width: 100%; display: block; overflow: hidden;"
     data-slick='{ "slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "dots": true }'>
    <?php
    foreach (explode(',', "REX_MEDIALIST[id=1]") as $image) {
        echo '<div style="width: 100%; height: 100%; background: url(/media/' . $image . ') no-repeat center;"></div>';
    }
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(".slick-slider").slick();
</script>