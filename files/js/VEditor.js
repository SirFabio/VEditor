/*
#******************************************************************************
# VEditor is plugin for MantisBT using TinyMCE extension
#******************************************************************************
*/

var tinycfg = document.getElementById('configTinyMCE').dataset;

let tiny_skin = (tinycfg.dark == 1 ? 'oxide-dark' : 'oxide');
let tiny_css = (tinycfg.dark == 1 ? 'dark' : 'default');

tinymce.init({
    selector: 'textarea',
    license_key: 'gpl',
    language: tinycfg.lang,
    menubar: tinycfg.menubar,
    plugins: tinycfg.plugins,
    toolbar: tinycfg.toolbar,
    toolbar_mode: tinycfg.toolbar_mode || 'sliding',
    height: parseInt(tinycfg.height || '600'),
    resize: tinycfg.resize === 'true' || tinycfg.resize === '1',
    statusbar: tinycfg.statusbar !== 'false',
    branding: tinycfg.branding === 'true',
    promotion: tinycfg.promotion === 'true',
    browser_spellcheck: true,
    link_default_target: '_blank',
    paste_data_images: tinycfg.pasteimages === 'true',
    paste_as_text: tinycfg.pastetext === 'true',
    forced_root_block: 'div',
    force_br_newlines: false,
    convert_newlines_to_brs: false,
    remove_linebreaks: true,
    skin: tiny_skin,
    content_css: tiny_css,
    content_style: `
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            margin: 10px;
        }

        table {
            border-collapse: collapse;
        }

        table td,
        table th {
            border: 1px solid #d0d0d0;
            padding: 4px;
        }
    `,
    setup: function (editor) {

        editor.on('change', function () {
            tinymce.triggerSave();
        });

        editor.on('keyup', function () {
            tinymce.triggerSave();
        });

        editor.on('undo', function () {
            tinymce.triggerSave();
        });

        editor.on('redo', function () {
            tinymce.triggerSave();
        });
    }
});