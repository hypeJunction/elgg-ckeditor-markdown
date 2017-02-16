<?php

return [
	'default' => [
		'ckeditor.js' => __DIR__ . '/vendors/ckeditor/ckeditor.js',
		'ckeditor/' => __DIR__ . '/vendors/ckeditor/',
		'jquery.ckeditor.js' => __DIR__ . '/vendors/ckeditor/adapters/jquery.js',

		// Line below doesnt work
		// 'ckeditor/plugins/markdown/plugin.js' => '/vendors/ckeditor/plugins/markdown/plugin.js',

		// Line below works ok, but make no difference since plugin.js is loaded ok without it?
		'ckeditor/plugins/markdown/plugin.js' =>  __DIR__ . '/vendors/ckeditor/plugins/markdown/plugin.js',

		// markdown plugin assets, maybe do something here??
		//'to-markdown.js' => __DIR__ . '/vendors/ckeditor/plugins/markdown/js/to-markdown.js',
		//'codemirror-gfm-min.js' => __DIR__ . '/vendors/ckeditor/plugins/markdown/js/codemirror-gfm-min.js',
	],
];
