<?php
/**
 * ReduxFramework Config File
 */
if (!class_exists('Redux')) {
    return;
}


// This is your option name where all the Redux data is stored.
$intellect_opt_name = "intellect_options";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * */

$intellect_theme = wp_get_theme(); // For use with some settings. Not necessary.

$intellect_opt_args = array(
    'opt_name' => $intellect_opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $intellect_theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $intellect_theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => false,
    // Show the sections below the admin menu item or not
    'menu_title' => $intellect_theme->get('Name') . esc_html__(' Options', 'intellect'),
    'page_title' => $intellect_theme->get('Name') . esc_html__(' Options', 'intellect'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,
    'admin_bar' => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,

    // OPTIONAL -> Give you extra features
    'page_priority' => 2,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => '',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'red',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    )
);
Redux::set_args($intellect_opt_name, $intellect_opt_args);
/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$intellect_opt_tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => esc_html__('Theme Information 1', 'intellect'),
        'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'intellect')
    ),
    array(
        'id' => 'redux-help-tab-2',
        'title' => esc_html__('Theme Information 2', 'intellect'),
        'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'intellect')
    )
);
Redux::set_help_tab($intellect_opt_name, $intellect_opt_tabs);

// Set the help sidebar
$intellect_opt_content = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'intellect');
Redux::set_help_sidebar($intellect_opt_name, $intellect_opt_content);


/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> START SECTIONS
 *
 */

// -> START option background

Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_setting',
    'title' => $intellect_theme->get('Name') . ' ' . $intellect_theme->get('Version'),
    'customizer_width' => '400px',
    'icon' => '',
));

// -> END option background

/* Start General Options */
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_general',
    'title' => esc_html__('General Options', 'intellect'),
    'desc' => esc_html__('General all config', 'intellect'),
    'customizer_width' => '400px',
    'icon' => 'el el-th-large',
    'fields' => array(
        array(
            'id' => 'intellect_opt_favicon_upload',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Upload Favicon Image', 'intellect'),
            'subtitle' => esc_html__('Favicon image for your website', 'intellect'),
            'desc' => esc_html__('', 'intellect'),
            'default' => false,
        ),

        array(
            'id' => 'intellect_opt_backtotop_show',
            'type' => 'switch',
            'title' => esc_html__('Back To Top On/Off', 'intellect'),
            'default' => true,
        ),
    )
));
/* End General Options */

/* Start Header Options */
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_header',
    'title' => esc_html__('Header Options', 'intellect'),
    'desc' => esc_html__('Header all config', 'intellect'),
    'customizer_width' => '400px',
    'icon' => 'el el-arrow-up',
    'fields' => array(
        array(
            'id' => 'intellect_opt_logo_image',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Upload logo', 'intellect'),
            'subtitle' => esc_html__('logo image for your website', 'intellect'),
            'desc' => esc_html__('', 'intellect'),
            'default' => false,
        ),

        array(
            'id' => 'intellect_opt_header_follow',
            'type' => 'text',
            'title' => esc_html__('Link follow', 'intellect'),
            'default' => 'https://www.facebook.com/khoahocuxui/',
        ),
    )
));
/* End Header Options */

// Contact us options
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_contact_us',
    'title' => esc_html__('Contact us', 'intellect'),
    'icon' => 'el el-inbox',
    'fields' => array(
        array(
            'id' => 'intellect_opt_contact_us_show',
            'type' => 'switch',
            'title' => esc_html__('Show contact us', 'intellect'),
            'on' => esc_html__('Yes', 'intellect'),
            'off' => esc_html__('No', 'intellect'),
            'default' => true,
        ),

        array(
            'id' => 'intellect_opt_contact_us_address',
            'type' => 'text',
            'title' => esc_html__('Address', 'intellect'),
            'default' => '988782, Our Street, S State',
            'required' => array('intellect_opt_contact_us_show', '=', true),
        ),

        array(
            'id' => 'intellect_opt_contact_us_mail',
            'type' => 'text',
            'title' => esc_html__('Mail', 'intellect'),
            'default' => 'info@domain.com',
            'required' => array('intellect_opt_contact_us_show', '=', true),
        ),

        array(
            'id' => 'intellect_opt_contact_us_phone',
            'type' => 'text',
            'title' => esc_html__('Phone', 'intellect'),
            'default' => '+1 234 567 186',
            'required' => array('intellect_opt_contact_us_show', '=', true),
        ),

    )
));

/* Start Blog Option */
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_blog',
    'title' => esc_html__('Blog', 'intellect'),
    'customizer_width' => '400px',
    'icon' => 'el el-blogger',
    'fields' => array(

        array(
            'id' => 'intellect_opt_blog_sidebar_archive',
            'type' => 'image_select',
            'title' => esc_html__('Sidebar Archive', 'intellect'),
            'desc' => esc_html__('Use for archive, index, page search', 'intellect'),
            'default' => 'right',
            'options' => array(
                'hide' => array(
                    'alt' => 'None Sidebar',
                    'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                ),

                'left' => array(
                    'alt' => 'Sidebar Left',
                    'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                ),

                'right' => array(
                    'alt' => 'Sidebar Right',
                    'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                ),

            ),
        ),

        array(
            'id' => 'intellect_opt_blog_per_row',
            'type' => 'select',
            'title' => esc_html__('Blog Per Row', 'intellect'),
            'default' => 2,
            'options' => array(
                2 => '2 Column',
                3 => '3 Column',
                4 => '4 Column',
            )
        ),

    )
));

Redux::set_section($intellect_opt_name, array(
    'title' => esc_html__('Single Post', 'intellect'),
    'id' => 'intellect_opt_single_post',
    'desc' => esc_html__('', 'intellect'),
    'subsection' => true,
    'fields' => array(

        array(
            'id' => 'intellect_opt_single_post_sidebar',
            'type' => 'image_select',
            'title' => esc_html__('Sidebar Single', 'intellect'),
            'default' => 'right',
            'options' => array(
                'hide' => array(
                    'alt' => 'None Sidebar',
                    'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                ),

                'left' => array(
                    'alt' => 'Sidebar Left',
                    'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                ),

                'right' => array(
                    'alt' => 'Sidebar Right',
                    'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                ),

            ),
        ),

        array(
            'id' => 'intellect_opt_single_post_share',
            'type' => 'switch',
            'title' => esc_html__('Show Share Post', 'intellect'),
            'on' => esc_html__('Yes', 'intellect'),
            'off' => esc_html__('No', 'intellect'),
            'default' => true,
        ),

        array(
            'id' => 'intellect_opt_single_related_show',
            'type' => 'switch',
            'title' => esc_html__('Show Related Post', 'intellect'),
            'on' => esc_html__('Yes', 'intellect'),
            'off' => esc_html__('No', 'intellect'),
            'default' => true,
        ),

        array(
            'id' => 'intellect_opt_single_related_limit',
            'type' => 'slider',
            'title' => esc_html__('Related Post Limit', 'intellect'),
            'min' => 1,
            'step' => 1,
            'max' => 250,
            'default' => 3,
            'required' => array('intellect_opt_single_related_show', '=', true),
        ),

    )
));
/* End Blog Option */

/* Start Social Network */
Redux::set_section($intellect_opt_name, array(
    'title' => esc_html__('Social Network', 'intellect'),
    'id' => 'intellect_opt_social_network',
    'customizer_width' => '400px',
    'icon' => 'el el-globe-alt',
    'fields' => array(

        array(
            'id' => 'intellect_opt_social_network_facebook',
            'type' => 'text',
            'title' => esc_html__('Facebook', 'intellect'),
            'default' => '#',
        ),

        array(
            'id' => 'intellect_opt_social_network_youtube',
            'type' => 'text',
            'title' => esc_html__('Youtube', 'intellect'),
            'default' => '#',
        ),

        array(
            'id' => 'intellect_opt_social_network_twitter',
            'type' => 'text',
            'title' => esc_html__('Twitter', 'intellect'),
            'default' => '#',
        ),

        array(
            'id' => 'intellect_opt_social_network_instagram',
            'type' => 'text',
            'title' => esc_html__('Instagram', 'intellect'),
            'default' => '#',
        ),

    )
));
/* End Social Network */

/* Start Typography Options */
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_typography',
    'title' => esc_html__('Typography', 'intellect'),
    'desc' => esc_html__('Typography all config', 'intellect'),
    'customizer_width' => '400px',
    'icon' => 'el el-fontsize'
));

// Body font
Redux::set_section($intellect_opt_name, array(
    'title' => esc_html__('Body Typography', 'intellect'),
    'id' => 'intellect_opt_typography_body',
    'desc' => esc_html__('', 'intellect'),
    'subsection' => true,
    'fields' => array(

        array(
            'id' => 'intellect_opt_typography_body_font',
            'type' => 'typography',
            'output' => array('body'),
            'title' => esc_html__('Body Font', 'intellect'),
            'subtitle' => esc_html__('Specify the body font properties.', 'intellect'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-size' => '',
                'font-family' => '',
                'font-weight' => '',
            ),
        ),

        array(
            'id' => 'intellect_opt_link_color',
            'type' => 'link_color',
            'output' => array('a'),
            'title' => esc_html__('Link Color', 'intellect'),
            'subtitle' => esc_html__('Controls the color of all text links.', 'intellect'),
            'default' => ''
        ),
    )
));

// Header font
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_custom_typography',
    'title' => esc_html__('Custom Typography', 'intellect'),
    'subsection' => true,
    'fields' => array(

        array(
            'id' => 'intellect_opt_custom_typography_1',
            'type' => 'typography',
            'title' => esc_html__('Custom 1 Typography', 'intellect'),
            'subtitle' => esc_html__('These settings control the typography for all Custom 1.', 'intellect'),
            'google' => true,
            'default' => array(
                'font-size' => '',
                'font-family' => '',
                'font-weight' => '',
                'color' => '',
            ),
        ),

        //selector custom typo 1
        array(
            'id' => 'intellect_opt_custom_typography_1_selector',
            'type' => 'textarea',
            'title' => esc_html__('Selectors 1', 'intellect'),
            'desc' => esc_html__('Import selectors. You can import one or multi selector.Example: #selector1,#selector2,.selector3', 'intellect'),
            'default' => ''
        ),

        array(
            'id' => 'intellect_opt_custom_typography_2',
            'type' => 'typography',
            'title' => esc_html__('Custom 2 Typography', 'intellect'),
            'subtitle' => esc_html__('These settings control the typography for all Custom 2.', 'intellect'),
            'google' => true,
            'default' => array(
                'font-size' => '',
                'font-family' => '',
                'font-weight' => '',
                'color' => '',
            ),
        ),

        //selector custom typo 2
        array(
            'id' => 'intellect_opt_custom_typography_2_selector',
            'type' => 'textarea',
            'title' => esc_html__('Selectors 2', 'intellect'),
            'desc' => esc_html__('Import selectors. You can import one or multi selector.Example: #selector1,#selector2,.selector3', 'intellect'),
            'default' => ''
        ),

        array(
            'id' => 'intellect_opt_custom_typography_3',
            'type' => 'typography',
            'title' => esc_html__('Custom 3 Typography', 'intellect'),
            'subtitle' => esc_html__('These settings control the typography for all Custom 3.', 'intellect'),
            'google' => true,
            'default' => array(
                'font-size' => '',
                'font-family' => '',
                'font-weight' => '',
                'color' => '',
            ),
            'output' => '',
        ),

        //selector custom typo 3
        array(
            'id' => 'intellect_opt_custom_typography_3_selector',
            'type' => 'textarea',
            'title' => esc_html__('Selectors 3', 'intellect'),
            'desc' => esc_html__('Import selectors. You can import one or multi selector.Example: #selector1,#selector2,.selector3', 'intellect'),
            'default' => ''
        ),

    )
));

/* End Typography Options */

/* Start 404 Options */
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_404',
    'title' => esc_html__('404 Options', 'intellect'),
    'desc' => esc_html__('404 page all config', 'intellect'),
    'customizer_width' => '400px',
    'icon' => 'el el-warning-sign',
    'fields' => array(

        array(
            'id' => 'intellect_opt_404_background',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('404 Background', 'intellect'),
            'default' => false,
        ),

        array(
            'id' => 'intellect_opt_404_title',
            'type' => 'text',
            'title' => esc_html__('404 Title', 'intellect'),
            'default' => 'Awww...Do Not Cry',
        ),

        array(
            'id' => 'intellect_opt_404_editor',
            'type' => 'editor',
            'title' => esc_html__('404 Content', 'intellect'),
            'default' => esc_html__('It is just a 404 Error! What you are looking for may have been misplaced in Long Term Memory.', 'intellect'),
            'args' => array(
                'wpautop' => false,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny' => false,
                'quicktags' => true,
            )
        ),

    )
));
/* End 404 Options */

/* Start Footer Options */
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_footer',
    'title' => esc_html__('Footer Options', 'intellect'),
    'desc' => esc_html__('Footer all config', 'intellect'),
    'customizer_width' => '400px',
    'icon' => 'el el-arrow-down'
));

// Footer Sidebar Multi Column
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_footer_sidebar_multi_column',
    'title' => esc_html__('Sidebar Footer Multi Column', 'intellect'),
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'intellect_opt_footer_multi_column',
            'type' => 'image_select',
            'title' => esc_html__('Number of Footer Columns', 'intellect'),
            'subtitle' => esc_html__('Controls the number of columns in the footer', 'intellect'),
            'default' => 4,
            'options' => array(
                0 => array(
                    'alt' => 'No Footer',
                    'img' => get_theme_file_uri('/extension/assets/images/no-footer.png')
                ),

                1 => array(
                    'alt' => '1 Columnn',
                    'img' => get_theme_file_uri('/extension/assets/images/1column.png')
                ),

                2 => array(
                    'alt' => '2 Columnn',
                    'img' => get_theme_file_uri('/extension/assets/images/2column.png')
                ),

                3 => array(
                    'alt' => '3 Columnn',
                    'img' => get_theme_file_uri('/extension/assets/images/3column.png')
                ),

                4 => array(
                    'alt' => '4 Columnn',
                    'img' => get_theme_file_uri('/extension/assets/images/4column.png')
                ),
            ),
        ),

        array(
            'id' => 'intellect_opt_footer_multi_column_1',
            'type' => 'slider',
            'title' => esc_html__('Column width 1', 'intellect'),
            'subtitle' => esc_html__('Select the number of columns to display in the footer', 'intellect'),
            'desc' => esc_html__('Min: 1, max: 12, default value: 1', 'intellect'),
            'default' => 3,
            'min' => 1,
            'step' => 1,
            'max' => 12,
            'display_value' => 'label',
            'required' => array(
                array('intellect_opt_footer_multi_column', 'equals', '1', '2', '3', '4'),
                array('intellect_opt_footer_multi_column', '!=', '0'),
            )
        ),

        array(
            'id' => 'intellect_opt_footer_multi_column_2',
            'type' => 'slider',
            'title' => esc_html__('Column width 2', 'intellect'),
            'subtitle' => esc_html__('Select the number of columns to display in the footer', 'intellect'),
            'desc' => esc_html__('Min: 1, max: 12, default value: 1', 'intellect'),
            'default' => 3,
            'min' => 1,
            'step' => 1,
            'max' => 12,
            'display_value' => 'label',
            'required' => array(
                array('intellect_opt_footer_multi_column', 'equals', '2', '3', '4'),
                array('intellect_opt_footer_multi_column', '!=', '1'),
                array('intellect_opt_footer_multi_column', '!=', '0'),
            )
        ),

        array(
            'id' => 'intellect_opt_footer_multi_column_3',
            'type' => 'slider',
            'title' => esc_html__('Column width 3', 'intellect'),
            'subtitle' => esc_html__('Select the number of columns to display in the footer', 'intellect'),
            'desc' => esc_html__('Min: 1, max: 12, default value: 1', 'intellect'),
            'default' => 3,
            'min' => 1,
            'step' => 1,
            'max' => 12,
            'display_value' => 'label',
            'required' => array(
                array('intellect_opt_footer_multi_column', 'equals', '3', '4'),
                array('intellect_opt_footer_multi_column', '!=', '1'),
                array('intellect_opt_footer_multi_column', '!=', '2'),
                array('intellect_opt_footer_multi_column', '!=', '0'),
            )
        ),

        array(
            'id' => 'intellect_opt_footer_multi_column_4',
            'type' => 'slider',
            'title' => esc_html__('Column width 4', 'intellect'),
            'subtitle' => esc_html__('Select the number of columns to display in the footer', 'intellect'),
            'desc' => esc_html__('Min: 1, max: 12, default value: 1', 'intellect'),
            'default' => 3,
            'min' => 1,
            'step' => 1,
            'max' => 12,
            'display_value' => 'label',
            'required' => array(
                array('intellect_opt_footer_multi_column', 'equals', '4'),
                array('intellect_opt_footer_multi_column', '!=', '1'),
                array('intellect_opt_footer_multi_column', '!=', '2'),
                array('intellect_opt_footer_multi_column', '!=', '3'),
                array('intellect_opt_footer_multi_column', '!=', '0'),
            )
        ),
    )

));

//Copyright
Redux::set_section($intellect_opt_name, array(
    'id' => 'intellect_opt_footer_copyright',
    'title' => esc_html__('Copyright', 'intellect'),
    'desc' => esc_html__('', 'intellect'),
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'intellect_opt_footer_copyright_editor',
            'type' => 'editor',
            'title' => esc_html__('Enter content copyright', 'intellect'),
            'full_width' => true,
            'default' => '&copy; Copyright 2018 Sarah Nguyen. All rights reserved',
            'args' => array(
                'wpautop' => false,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny' => false,
                'quicktags' => true,
            )
        ),
    )
));

/* End Footer Options */


/*
 * <--- END SECTIONS
 */

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if (!function_exists('compiler_action')) {
    function compiler_action($options, $css, $changed_values)
    {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r($changed_values); // Values that have changed since the last save
        echo "</pre>";
        print_r($options); //Option values
        print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}