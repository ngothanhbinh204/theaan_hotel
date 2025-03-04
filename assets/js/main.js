/**
 * WordPress Custom Menu JavaScript
 * With support for multi-level menus
 */
(function($) {
    $(document).ready(function() {
        // Toggle mobile menu
        $('#mobile-menu-toggle').on('click', function() {
            $('#mobile-menu-content').toggleClass('active');
            $('#menu-icon, #close-icon').toggleClass('hidden');
        });

        // Desktop menu toggle
        $('.menu-toggle').on('click', function(e) {
            e.preventDefault();
            const parent = $(this).parent();
            
            // If this menu is already active, close it
            if (parent.hasClass('active')) {
                parent.removeClass('active');
            } else {
                // Close any open menus at the same level
                parent.siblings('.active').removeClass('active');
                
                // Open this menu
                parent.addClass('active');
            }
            
            // Stop propagation to prevent document click handler from immediately closing the menu
            e.stopPropagation();
        });

        // Close menus when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.menu-item-has-children').length) {
                $('.menu-item-has-children').removeClass('active');
            }
        });

        // Mobile submenu toggle
        $(document).on('click', '.mobile-submenu-toggle', function() {
            const submenuId = $(this).data('submenu');
            const currentMenu = $(this).closest('ul');
            
            // Hide current menu
            currentMenu.addClass('hidden');
            
            // Show submenu
            $('#' + submenuId).addClass('active');
        });

        // Back to main menu
        $(document).on('click', '.back-to-main-menu', function() {
            // Hide all submenus
            $('.mobile-submenu').removeClass('active');
            
            // Show main menu
            $('#mobile-main-menu').removeClass('hidden');
        });
        
        // Back to parent menu
        $(document).on('click', '.back-to-parent-menu', function() {
            const parentId = $(this).data('parent');
            const currentMenu = $(this).closest('.mobile-submenu');
            
            // Hide current submenu
            currentMenu.removeClass('active');
            
            // Show parent menu
            if (parentId === 'main') {
                $('#mobile-main-menu').removeClass('hidden');
            } else {
                $('#' + parentId).addClass('active');
            }
        });
        
        // Handle submenu items with their own submenus
        $('.submenu .menu-item-has-children > a, .sub-menu .menu-item-has-children > a').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const parent = $(this).parent();
            
            // If this submenu is already active, close it
            if (parent.hasClass('active')) {
                parent.removeClass('active');
            } else {
                // Close any open submenus at the same level
                parent.siblings('.active').removeClass('active');
                
                // Open this submenu
                parent.addClass('active');
            }
        });
    });
})(jQuery);