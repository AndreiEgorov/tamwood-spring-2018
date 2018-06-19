(function($) {
    var $menuToggle = $('.menu-toggle');
    var $mainNavigation = $('.main-navigation');
    var $hamburgerMenu = $('.hamburger');
    var $subMenuToggle = $( '.menu-item-has-children' );
    var $subMenu = $( '.sub-menu' );
  
    $menuToggle.on('click', function(evt) {
      evt.preventDefault();
      $mainNavigation.toggleClass('toggled');
      $hamburgerMenu.toggleClass('is-active');
    });

    $subMenuToggle.children().on('click', function(evt) {
        evt.preventDefault();
        $(this).toggleClass('selected');
        $subMenu.toggleClass('show');
        $subMenuToggle.toggleClass('test');
      });
  
  })(jQuery);
  