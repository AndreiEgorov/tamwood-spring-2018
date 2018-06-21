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




    //  Learn more button for Instructor-info

    var $learnBtn = $('.learn-more');
    var $hiddenText = $('.instructor-info');

    $learnBtn.on('click', function (event) {
        event.preventDefault();
        showText($hiddenText, 'instructor-info-shown');
    })

    function showText(element, nameOfClass) {
        if (!element.hasClass(nameOfClass)) {
            element.addClass(nameOfClass);
        } else {
            element.removeClass(nameOfClass);
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

    // flickity carousel  : instructors

    $('.instructors-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true
    });








})(jQuery);
