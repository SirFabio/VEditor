<?php

access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

layout_page_header( 'VEditor' );

layout_page_begin( 'manage_overview_page.php' );

print_manage_menu( 'manage_plugin_page.php' );

?>

<div class="col-md-12 col-xs-12">
    <div class="space-10"></div>

    <div class="form-container">
        <form action="<?php echo plugin_page( 'config' ) ?>" method="post">

            <?php echo form_security_field( 'plugin_VEditor_config' ) ?>

            <div class="widget-box widget-color-blue2">

                <div class="widget-header widget-header-small">
                    <h4 class="widget-title lighter">
                        <i class="ace-icon fa fa-edit"></i>
                        VEditor Configuration
                    </h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">

                        <div class="table-responsive">
                            <table class="table table-bordered table-condensed table-striped">

                                <tr>
                                    <td class="category">Height</td>
                                    <td>
                                        <input type="number"
                                               name="height"
                                               value="<?php echo plugin_config_get( 'height', 600 ); ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Developer Plugins</td>
                                    <td>
                                        <input type="text"
                                               size="120"
                                               name="dev_plugins"
                                               value="<?php echo string_attribute( plugin_config_get( 'dev_plugins', '' ) ); ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Developer Toolbar</td>
                                    <td>
                                        <textarea name="dev_toolbar"
                                                  rows="4"
                                                  cols="120"><?php echo string_attribute( plugin_config_get( 'dev_toolbar', '' ) ); ?></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Reporter Plugins</td>
                                    <td>
                                        <input type="text"
                                               size="120"
                                               name="reporter_plugins"
                                               value="<?php echo string_attribute( plugin_config_get( 'reporter_plugins', '' ) ); ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Reporter Toolbar</td>
                                    <td>
                                        <textarea name="reporter_toolbar"
                                                  rows="4"
                                                  cols="120"><?php echo string_attribute( plugin_config_get( 'reporter_toolbar', '' ) ); ?></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Show Menubar</td>
                                    <td>
                                        <input type="checkbox"
                                            name="show_menubar"
                                            value="1"
                                            <?php echo plugin_config_get( 'show_menubar', true ) ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Menubar</td>
                                    <td>
                                        <input type="text"
                                               size="120"
                                               name="menubar"
                                               value="<?php echo string_attribute( plugin_config_get( 'menubar', '' ) ); ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Access Level</td>
                                    <td>
                                        <input type="number"
                                               name="access_level"
                                               value="<?php echo plugin_config_get( 'access_level', REPORTER ); ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Developer Level</td>
                                    <td>
                                        <input type="number"
                                               name="dev_level"
                                               value="<?php echo plugin_config_get( 'dev_level', DEVELOPER ); ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Paste Images</td>
                                    <td>
                                        <input type="checkbox"
                                               name="pasteimages"
                                               value="1"
                                               <?php echo plugin_config_get( 'pasteimages', 'true' ) == 'true' ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Paste As Text</td>
                                    <td>
                                        <input type="checkbox"
                                               name="pastetext"
                                               value="1"
                                               <?php echo plugin_config_get( 'pastetext', 'true' ) == 'true' ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Convert Images To Attachments</td>
                                    <td>
                                        <input type="checkbox"
                                               name="conv_img_to_file"
                                               value="1"
                                               <?php echo plugin_config_get( 'conv_img_to_file', 1 ) ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Toolbar Mode</td>
                                    <td>
                                        <input type="text"
                                               name="toolbar_mode"
                                               value="<?php echo string_attribute( plugin_config_get( 'toolbar_mode', 'sliding' ) ); ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Status Bar</td>
                                    <td>
                                        <input type="checkbox"
                                               name="statusbar"
                                               value="1"
                                               <?php echo plugin_config_get( 'statusbar', false ) ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Resize</td>
                                    <td>
                                        <input type="checkbox"
                                               name="resize"
                                               value="1"
                                               <?php echo plugin_config_get( 'resize', true ) ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Branding</td>
                                    <td>
                                        <input type="checkbox"
                                               name="branding"
                                               value="1"
                                               <?php echo plugin_config_get( 'branding', false ) ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="category">Promotion</td>
                                    <td>
                                        <input type="checkbox"
                                               name="promotion"
                                               value="1"
                                               <?php echo plugin_config_get( 'promotion', false ) ? 'checked' : ''; ?>>
                                    </td>
                                </tr>

                            </table>
                        </div>

                    </div>

                    <div class="widget-toolbox padding-8 clearfix">
                        <input type="submit"
                               class="btn btn-primary btn-white btn-round"
                               value="Save">
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>

<?php
layout_page_end();