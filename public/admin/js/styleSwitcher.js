/**
 * **************************************************
 * ******* Name: quixnav
 * ******* Description: A whole navigation for admin dashboard
 * ******* Version: 1.0.0
 * ******* Released on 2019-02-13 12:10:02
 * ******* Support Email :
 * ******* Support Skype :
 * ******* Development/Code Author:
 * ******* Author URL:
 * ******* Themeforest URL (Development):
 * ******* Design Author:
 * ******* License: ISC
 * ***************************************************
 */

(function($) {
    "use strict"

    const body = $('body');
    const html = $('html');

    //get the DOM elements from right sidebar
    const versionSelect = $('#theme_version');
    const layoutSelect = $('#theme_layout');
    const sidebarStyleSelect = $('#sidebar_style');
    const sidebarPositionSelect = $('#sidebar_position');
    const headerPositionSelect = $('#header_position');
    const containerLayoutSelect = $('#container_layout');
    const themeDirectionSelect = $('#theme_direction');

    //change the theme version controller
    versionSelect.on('change', function() {
        body.attr('data-theme-version', this.value);
    });

    //change the sidebar position controller
    sidebarPositionSelect.on('change', function() {
        this.value === "fixed" && body.attr('data-sidebar-style') === "modern" && body.attr('data-layout') === "vertical" ?
        alert("Sorry, Modern sidebar layout dosen't support fixed position!") :
        body.attr('data-sidebar-position', this.value);

        if(body.attr('data-sidebar-position') === "fixed") {
            $('.quixnav-scroll').slimscroll({
                position: "right",
                size: "5px",
                height: "100%",
                color: "dark"
            })
        } else {
            $('.quixnav-scroll').slimscroll({
                destroy: true
            })
        }
    });

    //change the header position controller
    headerPositionSelect.on('change', function() {
        body.attr('data-header-position', this.value);
    });

    //change the theme direction (rtl, ltr) controller
    themeDirectionSelect.on('change', function() {
        html.attr('dir', this.value);
        html.attr('class', '');
        html.addClass(this.value);
        body.attr('direction', this.value);
    });

    //change the theme layout controller
    layoutSelect.on('change', function() {
        if(body.attr('data-sidebar-style') === 'overlay') {
            body.attr('data-sidebar-style', 'full');
            body.attr('data-layout', this.value);
            return;
        }

        body.attr('data-layout', this.value);
    });

    //change the container layout controller
    containerLayoutSelect.on('change', function() {
        if(this.value === "boxed") {

            if(body.attr('data-layout') === "vertical" && body.attr('data-sidebar-style') === "full") {
                body.attr('data-sidebar-style', 'overlay');
                body.attr('data-container', this.value);
                return;
            }
        }

        body.attr('data-container', this.value);
    });

    //change the sidebar style controller
    sidebarStyleSelect.on('change', function() {
        if(body.attr('data-layout') === "horizontal") {
            if(this.value === "overlay") {
                alert("Sorry! Overlay is not possible in Horizontal layout.");
                return;
            }
        }

        if(body.attr('data-layout') === "vertical") {
            if(body.attr('data-container') === "boxed" && this.value === "full") {
                alert("Sorry! Full menu is not available in Vertical Boxed layout.");
                return;
            }

            if(this.value === "modern" && body.attr('data-sidebar-position') === "fixed") {
                alert("Sorry! Modern sidebar layout is not available in the fixed position. Please change the sidebar position into Static.");
                return;
            }
        }

        body.attr('data-sidebar-style', this.value);

        if(body.attr('data-sidebar-style') === 'icon-hover') {
            $('.quixnav').hover(function() {
                $('#main-wrapper').addClass('icon-hover-toggle');
            }, function() {
                $('#main-wrapper').removeClass('icon-hover-toggle');
            });
        }
    });

    //change the nav-header background controller
    $('input[name="navigation_header"]').on('click', function() {
        body.attr('data-nav-headerbg', this.value);
    });

    //change the header background controller
    $('input[name="header_bg"]').on('click', function() {
        body.attr('data-headerbg', this.value);
    });

    //change the sidebar background controller
    $('input[name="sidebar_bg"]').on('click', function() {
        body.attr('data-sibebarbg', this.value);
    });

})(jQuery);


