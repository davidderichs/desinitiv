<?php get_header(); ?>
    <div class="container">
            <div class="hero">
                <div class="layer layer-bg" data-type="parallax" data-depth="0.10"></div>
                <div class="layer layer-01" data-type="parallax" data-depth="0.20"></div>
                <div class="layer layer-overlay" data-type="parallax" data-depth="0.40"></div>
            </div>
            <div class="content layer layer-content" data-type="parallax" data-depth="0.05">
                <?php


                // Loop through all available Pages and display Content correspondently
                $pages = get_pages();

                $pictureIndex = 1;
                $float = "left";

                // var_dump(array_values($pages)[0]);
                foreach($pages as $page) {

                    echo('<div class="pageContentPart">' );
                    $pictureIndex += 1;
                    if($pictureIndex>3) $pictureIndex=1;
                    
                    echo('<img class="pageContentBackgroundImage '.$float.'" src="'.get_template_directory_uri().'/img/contentPagePartImage'.$pictureIndex.'.png">' );    
                    
                    echo('<div class="pageText'.$float.'">' );
                        echo('<h1 class="">'.$page->post_title.'</h1>');
                        echo('<p class="">'.$page->post_content.'</p>');
                    echo('</div>' );

                    echo('</div>' );

                    if ($float=="left") $float="right";
                    else $float="left";
                }


                
                ?>
            </div>
    </div><!-- #container -->
<?php get_footer(); ?>
