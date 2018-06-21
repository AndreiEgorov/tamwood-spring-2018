(function ($) {
    var $menuToggle = $('.menu-toggle');
    var $mainNavigation = $('.main-navigation');
    var $hamburgerMenu = $('.hamburger');
    var $subMenuToggle = $('.menu-item-has-children a');
    var $subMenu = $('.sub-menu');
    var $searchToggle = $('.search-icon');
    var $searchBar = $('.search-field');

    $menuToggle.on('click', function (evt) {
        evt.preventDefault();
        $mainNavigation.toggleClass('toggled');
        $hamburgerMenu.toggleClass('is-active');
    });

    /**
     * Accordion Menus
     */
    $subMenuToggle.on('click', function () {
        //evt.preventDefault();
        // $subMenuToggle.removeClass('selected');
        toggleState($(this), 'selected');
        toggleState($(this).next($subMenu), 'show');
        // $subMenuToggle.toggleClass('test');
    });

    /**
     * Search Bar
     */
    $searchToggle.on('click', function (evt) {
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




    // flickity carousel  front page

    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true
    });

    //carousel student support page

    $('.student-support-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true
    });










})(jQuery);
