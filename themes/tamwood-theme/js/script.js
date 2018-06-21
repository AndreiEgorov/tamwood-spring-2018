(function($) {
    var $menuToggle = $('.menu-toggle');
    var $mainNavigation = $('.main-navigation-mobile');
    var $hamburgerMenu = $('.hamburger');
    var $subMenuToggle = $('.menu-item-has-children a');
    var $subMenu = $('.sub-menu');
    var $searchToggle = $('.search-icon');
    var $searchBar = $('.search-field');
  
    $menuToggle.on('click', function(evt) {
        evt.preventDefault();
        $mainNavigation.toggleClass('toggled');
        $hamburgerMenu.toggleClass('is-active');
        $subMenuToggle.removeClass('selected');
        $subMenu.removeClass('show');
    });
  
    /**
     * Accordion Menus
     */
    $subMenuToggle.on('click', function() {
        //evt.preventDefault();
        // $subMenuToggle.removeClass('selected');
        toggleState($(this), 'selected');
        toggleState($(this).next($subMenu), 'show');
        // $subMenuToggle.toggleClass('test');
    });

    /**
     * Search Bar
     */
    $searchToggle.on('click', function(evt) {
        evt.preventDefault();
        toggleState($searchBar, 'reveal');
    });
  
    function toggleState(elem, className) {
        if (!elem.hasClass(className)) {
            elem.addClass(className);
            elem.focus();
        } else {
            elem.removeClass(className);
        }
    }
    
  })(jQuery);
  