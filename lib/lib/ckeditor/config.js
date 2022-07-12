/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'id';
	config.uiColor = '#AA55FF';
    
    // Toolbar configuration generated automatically by the editor based on config.toolbarGroups.
    config.toolbar = [
    	
    	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Undo', 'Redo' ] },
    	{ name: 'links', items: [ 'Link', 'Unlink', '-' ] },
    	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', '-' ] },
    	 	
    	{ name: 'insert', items: [ '-', '-', 'Table', 'HorizontalRule', 'Smiley', '-', '-', '-' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-' ] },
        { name: 'colors', items: [ 'TextColor', '-' ] },
        
        
        '/',
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] }
    	
    ];
    
};
