<?php

form_security_validate( 'plugin_VEditor_config' );

access_ensure_global_level(
    config_get( 'manage_plugin_threshold' )
);

function config_set_if_needed( $p_name, $p_value ) {
    if( $p_value != plugin_config_get( $p_name ) ) {
        plugin_config_set( $p_name, $p_value );
    }
}

$t_redirect_url = plugin_page( 'config_page', true );

layout_page_header( null, $t_redirect_url );
layout_page_begin();

config_set_if_needed(
    'height',
    gpc_get_int( 'height', 600 )
);

config_set_if_needed(
    'dev_plugins',
    gpc_get_string( 'dev_plugins', '' )
);

config_set_if_needed(
    'dev_toolbar',
    gpc_get_string( 'dev_toolbar', '' )
);

config_set_if_needed(
    'reporter_plugins',
    gpc_get_string( 'reporter_plugins', '' )
);

config_set_if_needed(
    'reporter_toolbar',
    gpc_get_string( 'reporter_toolbar', '' )
);

config_set_if_needed(
    'show_menubar',
    gpc_get_int( 'show_menubar', 0 )
);

config_set_if_needed(
    'menubar',
    gpc_get_string( 'menubar', '' )
);

config_set_if_needed(
    'access_level',
    gpc_get_int( 'access_level', REPORTER )
);

config_set_if_needed(
    'dev_level',
    gpc_get_int( 'dev_level', DEVELOPER )
);

config_set_if_needed(
    'pasteimages',
    gpc_get_int( 'pasteimages', 0 ) ? 'true' : 'false'
);

config_set_if_needed(
    'pastetext',
    gpc_get_int( 'pastetext', 0 ) ? 'true' : 'false'
);

config_set_if_needed(
    'conv_img_to_file',
    gpc_get_int( 'conv_img_to_file', 0 )
);

config_set_if_needed(
    'toolbar_mode',
    gpc_get_string( 'toolbar_mode', 'sliding' )
);

config_set_if_needed(
    'statusbar',
    gpc_get_int( 'statusbar', 0 )
);

config_set_if_needed(
    'resize',
    gpc_get_int( 'resize', 1 )
);

config_set_if_needed(
    'branding',
    gpc_get_int( 'branding', 0 )
);

config_set_if_needed(
    'promotion',
    gpc_get_int( 'promotion', 0 )
);

form_security_purge( 'plugin_VEditor_config' );

html_operation_successful( $t_redirect_url );

layout_page_end();