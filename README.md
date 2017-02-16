This repo contains a non working version of ckeditor+markdown bundled as elgg plugin.

Hope someone can help to make it work! :)

## Error description

markdown plugin got 3 js dependencies stored in ```vendors/ckeditor/plugins/markdown/js/``` (```codemirror-gfm-min.js```, ```marked.js``` and ```to-markdown.js```). After clicking in the ckeditor's markdown button:

```
plugin.js?t=F0RD:2 Uncaught ReferenceError: toMarkdown is not defined
plugin.js?t=F0RD:7 Uncaught ReferenceError: CodeMirror is not defined
```

Both the markdown's plugin.js and the 3 libraries and loaded ok by elgg and are accesible both as direct link URL (i.e. ```/mod/ckeditor/vendors/ckeditor/plugins/markdown/js/to-markdown.js```) or by simplecache URL (i.e. ```/cache/0/default/ckeditor/plugins/markdown/js/to-markdown.js```). It seems that the functions inside the dependencies can't be accesed for some reason, maybe scope?

I played a bit with configs in ```views.php```, but no luck. Take a look there.
