<?php get_header(); ?>


    <div id="preload">
        <img src='<? echo get_template_directory_uri();?>/img/bg1.jpg'>
        <img src='<? echo get_template_directory_uri();?>/img/bg2.jpg'>
        <img src='<? echo get_template_directory_uri();?>/img/bg3.jpg'>
        <img src='<? echo get_template_directory_uri();?>/img/bg4.jpg'>
    </div>

    <main>
        <? $pages = get_pages(); ?>     
        
        <? $slideNr = 1; ?>

        <? foreach($pages as $page){ ?>

            <section id=<?="slide-".$slideNr?> class="homeSlide">
                <div class="bcg"  data-type="parallax" data-depth="0.10">
                    <div class="hsContainer">
                        <img src='<? echo get_template_directory_uri();?>/img/transition.png'></img>
                        <div class="hsContent">
                            <h1><?=$page->post_title;?></h1>
                            <p><?=$page->post_content;?></p>
                        </div>
                    </div>
                </div>
            </section>    
            <? $slideNr += 1; ?>
        <?}?>



                <?php
                // Loop through all available Pages and display Content correspondently
                // echo('<section>' );
                //     foreach($pages as $page) { 

                //         echo ('<div class="parallax-window"');  
                //             echo('<div class="parallax-slider">');
                //                 echo('<h1>'.$page->post_title.'</h1>');
                //                 echo('<p class="">'.$page->post_content.'</p>');
                //             echo('</div>' );
                //         echo('</div>' );
                //     }
                // echo('</section>');
                ?>
    </main>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src='<? echo get_template_directory_uri();?>/js/imagesloaded.js'></script>
    <script src='<? echo get_template_directory_uri();?>/js/skrollr.js'></script>
    <script src='<? echo get_template_directory_uri();?>/js/_main.js'></script>

<?php get_footer(); ?>

