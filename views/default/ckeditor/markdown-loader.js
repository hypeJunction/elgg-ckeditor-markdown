define(function(require) {

	var $ = require('jquery');
	require('jquery.ckeditor');
	var CKEDITOR = require('ckeditor');
	
	window.CodeMirror = require('ckeditor/plugins/markdown/js/codemirror-gfm-min');
	window.marked = require('ckeditor/plugins/markdown/js/marked');
	window.toMarkdown = require('ckeditor/plugins/markdown/js/to-markdown');
});