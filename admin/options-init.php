<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "var_henrytrack";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.
	//echo basename(dirname(__FILE__)).'/henrytrack-plugin.php';
    $default_headers = array(
	                'Name' => 'Plugin Name',
	                'PluginURI' => 'Plugin URI',
	                'Version' => 'Version',
	                'Description' => 'Description',
	                'Author' => 'Author',
	                'AuthorURI' => 'Author URI',
                	'TextDomain' => 'Text Domain',
	                'DomainPath' => 'Domain Path',
	                'Network' => 'Network',
	                // Site Wide Only is deprecated in favor of Network.
	                '_sitewide' => 'Site Wide Only',
					'PluginIcon' => 'Icon URL',
					'DBVersion' => 'Db Version',
					'DbRemove' => 'Db Remove',
					'LICENSE_SERVER_URL' => 'License Srv Url',
					'LICENSE_SECRET' => 'License Secert',
					'UserDoc'	=> 'UserDocumentation',
					'DevDoc' => 'DevDocumentation',
					'HelpSup' => 'HelpAndSupport',
					'Environment' => 'Environment'
	        );
	
    $_plugindata = get_file_data(dirname(dirname(__FILE__)).'/henrytrack-plugin.php',$default_headers) ;
    
   // var_dump($_plugindata);
    
    $args = array(
        'opt_name' => 'var_'. $_plugindata['Text Domain'],
        'display_name' => $_plugindata['Name'],
        'display_version' =>$_plugindata['Version'],
        'page_slug' => $_plugindata['Text Domain'],
        'page_title' => $_plugindata['Name'],
        'update_notice' => TRUE,
        'intro_text' => 'Wordpress Plugin to Track Web Site Visitors',
        'footer_text' => 'Developed by <a href="'.$_plugindata['AuthorURI'].'" > '.$_plugindata['Author'].'</a>',
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => $_plugindata['Name'].' Options',
        'page_parent_post_type' => 'your_post_type',
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
		'dev_mode'             => false,
    	'update_notice'        => false,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
   /* $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );*/

     Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    //Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */
    
    /* Settings Page */ 
    
    Redux::setSection( $opt_name, array(
    		'title'      => __( 'Tracking Settings', $_plugindata['Text Domain'] ),
    		'id'         => 'required',
    		'desc'       => __( 'Plugin tracking configuration ', $_plugindata['Text Domain'] ) ,
    		'subsection' => false,
    		'fields'     => array(
    				array(
    						'id'       => 'opt-enable-tracking',
    						'type'     => 'switch',
    						'title'    => 'Enable Tracking',
    						'subtitle' => 'Click <code>On</code> to enable tracking option and see additional settings.',
    						'default'  => false
    				),
    				array(    						
    						'id'       => 'opt-enable-tracking-methods',
    						'type'     => 'checkbox',
    						'title'    => __( 'Select a tracking method', $_plugindata['Text Domain']  ),
    						'subtitle' => __( 'Please select options that you need to track users', $_plugindata['Text Domain']  ),
    						'desc'     => __( 'Available tracking options', $_plugindata['Text Domain']  ),
    						'required' => array( 'opt-enable-tracking', '=', true ),
    						//Must provide key => value pairs for multi checkbox options
    						'options'  => array(
    								'1' => 'By using login name',
    								'2' => 'By using IP address',
    								'3' => 'By using cookies'
    						)    						
    				),
    				array(
    						'id'   => 'opt-required-divide-1',
    						'type' => 'divide'
    				),
    				array(
    						'id'       => 'opt-enable-admin-tracking',
    						'type'     => 'switch',
    						'title'    => 'Enable Admin Tracking',
    						'subtitle' => 'Click <code>On</code> to enable admin pages tracking option .',
    						'default'  => false
    				),
    			)    		
    		)	
    	);
    Redux::setSection( $opt_name, array(
    		'title'            => __( 'Tracking Period', $_plugindata['Text Domain'] ),
    		'id'               => 'tracking_period',
    		'subsection'       => true,
    		'customizer_width' => '500px',
    		'desc'             => __( 'This section will allows to set the default data display of the tracking: ', $_plugindata['Text Domain'] ),
    		'fields'           => array(
    				array(
    						'id'       => 'tracking_period_days',
    						'type'     => 'radio',
    						'title'    => __( 'Number of Days', $_plugindata['Text Domain'] ),
    						'subtitle' => __( '', $_plugindata['Text Domain'] ),
    						'desc'     => __( 'Select the number of days to display data.', $_plugindata['Text Domain'] ),
    						//Must provide key => value pairs for radio options
    						'options'  => array(
    								'5' => '5 Days',
    								'10' => '10 Days',
    								'20' => '20 Days',
    								'30' => '30 Days'
    						),
    						'default'  => '2'
    				)
    		)
    ) );
    
    Redux::setSection( $opt_name, array(
    		'title'            => __( 'Notifications', $_plugindata['Text Domain'] ),
    		'id'               => 'tracking_notofication',
    		'subsection'       => true,
    		'customizer_width' => '500px',
    		'desc'             => __( 'This section will allows to set parameters related to tracking notifications.', $_plugindata['Text Domain'] ) ,
    		'fields'           => array(
    				array(
    						'id'       => 'opt-enable-tracking-notify',
    						'type'     => 'switch',
    						'title'    => 'Enable Tracking Notification',
    						'subtitle' => 'Click <code>On</code> to enable tracking notification .',
    						'default'  => false
    				),
		    		array(
		                'id'          => 'trigger-page-url',
		                'type'        => 'text',
		                'title'       => __( 'Primary Tracking Page', $_plugindata['Text Domain']),
		                'desc'        => __( 'Page that trigger the the user tracking notification. Ex: /anoutus , /contact , /me-contacter  etc..',  $_plugindata['Text Domain'] ),
		                'placeholder' => '/page-url/',
		    			'required' => array( 'opt-enable-tracking-notify', '=', true ),
		            ),
    				array(
    						'id'          => 'reciever-email',
    						'type'        => 'text',
    						'title'       => __( 'Email Address', $_plugindata['Text Domain']),
    						'desc'        => __( 'email address that recieve the user tracking notification.',  $_plugindata['Text Domain'] ),
    						'placeholder' => 'youremail@domain.com',
    						'required' => array( 'opt-enable-tracking-notify', '=', true ),
    				),
    				array(
    						'id'       => 'information_period_days',
    						'type'     => 'radio',
    						'title'    => __( 'Number of Past Days for Record', $_plugindata['Text Domain'] ),
    						'subtitle' => __( '', $_plugindata['Text Domain'] ),
    						'desc'     => __( 'Select the number of days to send data from past records.', $_plugindata['Text Domain'] ),
    						//Must provide key => value pairs for radio options
    						'required' => array( 'opt-enable-tracking-notify', '=', true ),
    						'options'  => array(
    								'5' => '5 Days',
    								'10' => '10 Days',
    								'20' => '20 Days',
    								'30' => '30 Days',
    								'90' => '90 Days',
    								'180' => '180 Days',
    								'365' => '365 Days'
    						),
    						'default'  => '2'
    				)
    		)
    ) );

     /*
     * <--- END SECTIONS
     */
