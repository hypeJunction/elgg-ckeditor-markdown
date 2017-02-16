require(['elgg'], function(elgg) {

	elgg.register_hook_handler('config', 'ckeditor', function (hook, type, params, config) {

		require(['ckeditor/markdown-loader']);
		
		var extraPlugins = config.extraPlugins || '';
		extraPlugins = extraPlugins.split(',');
		extraPlugins.push('markdown');
		config.extraPlugins = extraPlugins.join(',');

		config.toolbar.push(['Markdown']);
		return config;
	});

	elgg.register_hook_handler('prepare', 'ckeditor', function (hook, type, params, CKEDITOR) {
		CKEDITOR.plugins.addExternal('markdown', elgg.get_simplecache_url('ckeditor/plugins/markdown/'), '');
		return CKEDITOR;
	});
});