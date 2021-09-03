/* jshint undef: true, unused: true */
/* globals _: false */
'use strict';
$(document).ready(function() {


    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // get body height and set content border onResize
    // $(window).resize(_.debounce(function(){
    //     // console.log('just resized...');
    //     // get/set main content body height and apply to border element
    //     var mainBodyHeight = $('.main-body').css('height');
    //     $('.main-body-border').css('height', mainBodyHeight);

    //     // TO-DO: account for tab content that changes page height
    // }, 300));

    // // set content onLoad
    // $(window).resize();

    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // handles global navigation initialization
    initSOEMenu();




    //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
    var MqL = 1200,
        soeduOverlay = $('.soedu-overlay'),
        soeduSearchTrigger = $('.soedu-search-trigger'),
        soeduPrimaryNav = $('.soedu-primary-nav'),
        soeduMainHeader = $('.soedu-main-header'),
        soeduMainContent = $('.soedu-main-content'),
        soeduNavTrigger = $('.soedu-nav-trigger'),
        soeduHasChildren = $('.has-children'),
        soeduSeeAll = $('.see-all a');

    //move nav element position according to window width
    moveNavigation();

    $(window).on('resize', function(){

        (!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);

    });

    //mobile - open lateral menu clicking on the menu icon
    soeduNavTrigger.on('click', function(event) {

        event.preventDefault();

        if (soeduMainContent.hasClass('nav-is-visible')) {

            closeNav();
            soeduOverlay.removeClass('is-visible');

        } else {

            $(this).addClass('nav-is-visible');
            $('.soedu-primary-nav, .soedu-main-header, .soedu-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                $('body').addClass('overflow-hidden');
            });
            toggleSearch('close');
            soeduOverlay.addClass('is-visible');

        }

    });

    //open search form
    soeduSearchTrigger.on('click', function(event) {

        event.preventDefault();
        toggleSearch();
        closeNav();

    });

    //close lateral menu on mobile
    // soeduOverlay.on('swiperight', function(){
    //  if($('.soedu-primary-nav').hasClass('nav-is-visible')) {
    //      closeNav();
    //      soeduOverlay.removeClass('is-visible');
    //  }
    // });
    // $('.nav-on-left .soedu-overlay').on('swipeleft', function(){
    //  if($('.soedu-primary-nav').hasClass('nav-is-visible')) {
    //      closeNav();
    //      soeduOverlay.removeClass('is-visible');
    //  }
    // });
    soeduOverlay.on('click', function() {

        closeNav();
        toggleSearch('close');
        soeduOverlay.removeClass('is-visible');

    });


    //prevent default clicking on direct children of .soedu-primary-nav
    soeduPrimaryNav.children('.has-children').children('a').on('click', function(event) {

        event.preventDefault();

    });

    //open submenu
    soeduHasChildren.children('a').on('click', function(event) {

        if ( !checkWindowWidth() ) {

            event.preventDefault();

        }

        var selected = $(this);

        if (selected.next('ul').hasClass('is-hidden')) {

            //desktop version only
            selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
            selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
            soeduOverlay.addClass('is-visible');

        } else {

            selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
            soeduOverlay.removeClass('is-visible');

        }

        toggleSearch('close');

    });

    //submenu items - go back link
    $('.go-back').on('click', function() {

        $(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');

    });

    // prevent clicking on Browse this section link
    // remove this when you are ready to link to actual page
    // dont forget to remove d-md-none class from list option li
    soeduSeeAll.on('click', function(event) {
        event.preventDefault();
    });











    function closeNav() {

        $('.has-children ul').addClass('is-hidden');
        $('.has-children a').removeClass('selected');
        $('.moves-out').removeClass('moves-out');

        $('.soedu-nav-trigger, .soedu-main-header, .soedu-primary-nav, .soedu-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            $('body').removeClass('overflow-hidden');
        });

    }

    function toggleSearch(type) {

        var soeduOverlay = $('.soedu-overlay'),
            soeduSearchTrigger = $('.soedu-search-trigger'),
            soeduSearch = $('.soedu-search');

        if (type=="close") {

            //close serach
            soeduSearch.removeClass('is-visible');
            soeduSearchTrigger.removeClass('search-is-visible');
            soeduOverlay.removeClass('search-is-visible');

        } else {

            //toggle search visibility
            soeduSearch.toggleClass('is-visible');
            soeduSearchTrigger.toggleClass('search-is-visible');
            soeduOverlay.toggleClass('search-is-visible');

            if ($(window).width() > MqL && soeduSearch.hasClass('is-visible')) {
            // if ($(window).width() > MqL) {

                soeduSearch.find('input[type="search"]').trigger('focus');

            }

            (soeduSearch.hasClass('is-visible')) ? soeduOverlay.addClass('is-visible') : soeduOverlay.removeClass('is-visible');

        }

    }

    function checkWindowWidth() {
        //check window width (scrollbar included)
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window )) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        if ( e[ a+'Width' ] >= MqL ) {
            return true;
        } else {
            return false;
        }
    }

    function moveNavigation() {
        var navigation = $('.soedu-nav');
        var desktop = checkWindowWidth();
        if ( desktop ) {
            navigation.detach();
            navigation.insertBefore('.soedu-header-buttons');
        } else {
            navigation.detach();
            navigation.insertAfter('.soedu-main-content');
        }
    }





}); // end $(document).ready(function(){})







function initSOEMenu() {

    // grab currentPath to show current menu being viewed
    var currentPath = location.pathname;
    // hack for bookmarking dynamic content
    // if (currentPath.match('#')) {
    //     currentPath = currentPath.split('#')[0];
    // }

    var linkPath = $('.soe-nav a[href$="' + currentPath + '"]');
    // check first div parent container
    var linkContainer = linkPath.parents('div:eq(0)');

    // check if selected link is part of a dropdown menu
    if (linkContainer.hasClass('collapse')) {

        // open dropdown menu
        linkContainer.addClass('show');
        // add active color to dropdown parent menu
        linkContainer.prev().addClass('parent-active');
        // add sub-active color to actual link being viewed
        linkPath.addClass('sub-active');


    }
    else {

        // if link is not part of a dropdown menu, simply apply active color
        linkPath.addClass('sub-active');

    }

}


