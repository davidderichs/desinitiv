<?php get_header(); ?>
<body>
    <div class="container">
            <div class="hero">
                <div class="layer layer-bg" data-type="parallax" data-depth="0.10"></div>
                <div class="layer layer-01" data-type="parallax" data-depth="0.20"></div>
                <div class="layer layer-overlay" data-type="parallax" data-depth="0.40"></div>
            </div>
            <div class="content layer layer-content" data-type="parallax" data-depth="0.10">
                <? include (get_template_directory().'/template-parts/desinitiv-content.php'); ?>
				<? include (get_template_directory().'/template-parts/desinitiv-content.php'); ?>
				<? include (get_template_directory().'/template-parts/desinitiv-content.php'); ?>
				<? include (get_template_directory().'/template-parts/desinitiv-content.php'); ?>
            </div>
    </div><!-- #container -->
</body>
<?php get_footer(); ?>
