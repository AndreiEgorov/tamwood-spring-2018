(function ($) {
    var $menuToggle = $('.menu-toggle');
    var $mainNavigation = $('.main-navigation-mobile');
    var $hamburgerMenu = $('.hamburger');
    var $subMenuToggle = $('.menu-item-has-children a');
    var $subMenu = $('.sub-menu');
    var $searchToggle = $('.search-icon');
    var $searchBar = $('.search-field');
    var $sectionNav = $('.section-navigation-option');
    var $backButton = $('.back-button');
    var $subSubMenuToggle = $('.menu-item-type-taxonomy');

    $subSubMenuToggle.append('<i class="fa fa-angle-down toggle-menu mobile"></i>');
    $subSubMenuToggle.append('<i class="fa fa-angle-up toggle-menu hidden"></i>');

    $menuToggle.on('click', function (evt) {
        evt.preventDefault();
        toggleState($mainNavigation, 'toggled');
        toggleState($hamburgerMenu, 'is-active');
        $subMenuToggle.removeClass('selected');
        $subMenu.removeClass('show');
        $searchBar.removeClass('reveal');
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
    $('.toggle-menu').on('click', function () {
        toggleState($(this).prevAll('a'), 'selected');
        toggleState($(this).prevAll($subMenu), 'show');
        toggleState($('.fa-angle-down'), 'hidden');
        toggleState($('.fa-angle-up'), 'hidden');
    });

    /**
     * Search Bar
     */
    $searchToggle.on('click', function (evt) {
        evt.preventDefault();
        toggleState($searchBar, 'reveal');
        $mainNavigation.removeClass('toggled');
        $hamburgerMenu.removeClass('is-active');
    });

    $sectionNav.on('click', function (evt) {
        evt.preventDefault();
        // $('.program-heading').prepend('<button class="back-button">Back</button>');
        if ($(this).hasClass('option-1')) {
            $('.program-section').addClass('hidden');
            toggleState($('.courses'), 'hidden');
        } else if ($(this).hasClass('option-2')) {
            $('.program-section').addClass('hidden');
            toggleState($('.requirements'), 'hidden');
        } else if ($(this).hasClass('option-3')) {
            $('.program-section').addClass('hidden');
            toggleState($('.start-dates'), 'hidden');
        } else if ($(this).hasClass('option-4')) {
            $('.program-section').addClass('hidden');
            toggleState($('.program-fees'), 'hidden');
        } else if ($(this).hasClass('option-5')) {
            $('.program-section').addClass('hidden');
            toggleState($('.certificates-and-hiring-partners'), 'hidden');
        }
    });
    $backButton.on('click', function () {
        // evt.preventDefault();
        // $backButton.addClass('hidden');
        $('.program-overview').removeClass('hidden');
        $('.program-nav').removeClass('hidden');
        $('.details').removeClass('hidden');
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

    if ($('.main-carousel').length) {
        $('.main-carousel').flickity({
            // options
            // cellAlign: left,
            contain: true,
            wrapAround: true,
        });
    }

    //carousel student support page

    if ($('.student-support-carousel').length) {
        $('.student-support-carousel').flickity({
            wrapAround: true,
            freeScroll: false,
            contain: true,
            prevNextButtons: false,
            pageDots: false,
            // cellAlign: 'left',
        });
    }


    // flickity carousel  : instructors

    if ($('.instructors-carousel').length) {
        $('.instructors-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            wrapAround: true,
            freeScroll: false,
            prevNextButtons: false,
            pageDots: false
        });
    }





})(jQuery);
