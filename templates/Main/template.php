<!DOCTYPE html>
<html lang="de">
REX_TEMPLATE[2]
<body>
REX_TEMPLATE[5]
<main>
    <?php
    REX_TEMPLATE[4];
    // All slices of one article
    $arr = rex_article_slice::getSlicesForArticle(REX_ARTICLE_ID);
    $content .= ContentBuilder::buildContent( $arr );
    echo $content;
    //REX_ARTICLE[]
    ?>
</main>
REX_TEMPLATE[3]
</body>
</html>
