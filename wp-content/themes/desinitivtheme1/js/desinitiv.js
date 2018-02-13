
$( document ).ready(function() {


      // Variables and DOM Caching.
      var $body = $( 'body' ),
      $customHeader = $body.find( '.custom-header' ),
      $branding = $customHeader.find( '.site-branding' ),
      $navigation = $body.find( '.navigation-top' ),
      $navWrap = $navigation.find( '.wrap' ),
      $navMenuItem = $navigation.find( '.menu-item' ),
      $menuToggle = $navigation.find( '.menu-toggle' ),
      $menuScrollDown = $body.find( '.menu-scroll-down' ),
      $sidebar = $body.find( '#secondary' ),
      $entryContent = $body.find( '.entry-content' ),
      $formatQuote = $body.find( '.format-quote blockquote' ),
      isFrontPage = $body.hasClass( 'twentyseventeen-front-page' ) || $body.hasClass( 'home blog' ),
      navigationFixedClass = 'site-navigation-fixed',
      navigationHeight,
      navigationOuterHeight,
      navPadding,
      navMenuItemHeight,
      idealNavHeight,
      navIsNotTooTall,
      headerOffset,
      menuTop = 0,
      resizeTimer;

      // Ensure the sticky navigation doesn't cover current focused links.
      $( 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex], [contenteditable]', '.site-content-contain' ).filter( ':visible' ).focus( function() {
      if ( $navigation.hasClass( 'site-navigation-fixed' ) ) {
        var windowScrollTop = $( window ).scrollTop(),
          fixedNavHeight = $navigation.height(),
          itemScrollTop = $( this ).offset().top,
          offsetDiff = itemScrollTop - windowScrollTop;

        // Account for Admin bar.
        if ( $( '#wpadminbar' ).length ) {
          offsetDiff -= $( '#wpadminbar' ).height();
        }

        if ( offsetDiff < fixedNavHeight ) {
          $( window ).scrollTo( itemScrollTop - ( fixedNavHeight + 50 ), 0 );
        }
      }
      });





    window.addEventListener('scroll', function(event) {
      const topDistance = this.pageYOffset;
      const layers = document.querySelectorAll("[data-type='parallax']");

      for (let layer of Array.from(layers)) {
        const depth = layer.getAttribute('data-depth');
        const movement = -(topDistance * depth);
        const translate3d = `translate3d(0, ${movement}px, 0)`;
        layer.style['-webkit-transform'] = translate3d;
        layer.style['-moz-transform'] = translate3d;
        layer.style['-ms-transform'] = translate3d;
        layer.style['-o-transform'] = translate3d;
        layer.style.transform = translate3d;
      }
    });


});
