<?php

$nav = rex_navigation::factory();
$nav->setClasses(array('nav-item', 'nav-item', 'nav-item'));
$nav->setLinkClasses(array('nav-link', 'nav-link', 'nav-link'));

$navHtml = $nav->get(0, 1, TRUE, TRUE);

$navHtml = preg_replace('/rex-current/', 'current',$navHtml);
$navHtml = preg_replace('/rex-active/', 'active', $navHtml);
$navHtml = preg_replace('/rex-normal/', '', $navHtml);
$navHtml = preg_replace('/rex-navi1\s+/', 'navbar-nav mr-auto', $navHtml);
$navHtml = preg_replace('/my-currentrex-article-[0-9]+\s+/', '', $navHtml);
$navHtml = preg_replace('/rex-navi-depth-[0-9]+\s+/', '', $navHtml);
$navHtml = preg_replace('/rex-navi-has-[0-9]+\-elements/', '', $navHtml);
$navHtml = preg_replace('/rex-article-[0-9]+\s+/', '', $navHtml);
$navHtml = preg_replace('/rex-navi-[0-9]+/', '', $navHtml);

?>
<nav class="navbar fixed-top navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-dark">

   <div class='d-none d-md-block d-lg-block theme-switch-wrapper'>
     <input type="checkbox" id="template-switch" class="m_switch_check" value="0">
   </div>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigationToggle" aria-controls="mainNavigationToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavigationToggle">
        <?php
        echo $navHtml;
        ?>
    </div>
    <?php
    /*
    	function consolelog($string) {
    		echo "<script>console.log(\"".$string."\");</script>";
    	}


    	$dao = rex_sql::factory();

    	$dao->setQuery("CREATE TABLE IF NOT EXISTS hacker_pageviews (
    		ID INT NOT NULL AUTO_INCREMENT,
    		pageid INT NOT NULL,
    		count INT NOT NULL,
    		PRIMARY KEY (ID)
    	)");
    	$query = "SELECT * FROM hacker_pageviews WHERE pageid = 'REX_ARTICLE_ID'";
    	//consolelog($query);
    	$dao->setQuery($query);
    	$result = $dao->getDBArray();
    	//consolelog(str_replace("\"", "'", json_encode($result)));
    	//consolelog($result["pageid"]);
    	if(!isset($result[0]["pageid"])) {
    		$query = "INSERT INTO hacker_pageviews (pageid, count) VALUES (REX_ARTICLE_ID, 1)";
    		//consolelog($query);
    		$dao->setQuery($query);
    	} else {
    		$query = "UPDATE hacker_pageviews SET count = count + 1 WHERE pageid = 'REX_ARTICLE_ID';";
    		//consolelog($query);
    		$dao->setQuery($query);
    	}
	    $query = "SELECT * FROM hacker_pageviews WHERE pageid = 'REX_ARTICLE_ID';";
    	//consolelog($query);
	    $dao->setQuery($query);
	    $result = $dao->getDBArray();
    	if(isset($result[0]["pageid"])) {
    		foreach($result as $item) {
    			if($item['pageid'] == 'REX_ARTICLE_ID') {
    				//consolelog($item['count']);
    				echo "<span id='pagecount' class='d-none d-md-block d-lg-block'>0</span>";
                    echo "<script>
                        var pagecount = ".$item['count'].";
                    </script>";
    			} else {
    				consolelog("[DB ERROR]: pagecount not in table.");
    			}
    		}
	    } else {
	    	echo "<script>console.log('[DB ERROR]: pagecount not in table');</script>";
	    }
    */
    ?>
</nav>
