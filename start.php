<?php

elgg_register_event_handler('init', 'system', 'ckeditor_md_init');

function ckeditor_md_init() {

	elgg_extend_view('elgg.js', 'ckeditor/markdown.js');
}