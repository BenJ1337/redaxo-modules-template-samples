<?php
	$rex_values_content = json_decode(rex_article_slice::getArticleSliceById(REX_SLICE_ID)->getValue(2), true);
	echo '<div class="text-block">'.$rex_values_content['jodit_editor'].'</div>';
?>

