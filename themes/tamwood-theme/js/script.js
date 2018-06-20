(function($) {
    var $menuToggle = $('.menu-toggle');
    var $mainNavigation = $('.main-navigation');
    var $hamburgerMenu = $('.hamburger');
    var $subMenuToggle = $('.menu-item-has-children a');
    var $subMenu = $('.sub-menu');
  
    $menuToggle.on('click', function(evt) {
        evt.preventDefault();
        $mainNavigation.toggleClass('toggled');
        $hamburgerMenu.toggleClass('is-active');
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
  
    function toggleState(elem, className) {
        if (!elem.hasClass(className)) {
            elem.addClass(className);
            elem.focus();
        } else {
            elem.removeClass(className);
        }
    }
    
  })(jQuery);
  