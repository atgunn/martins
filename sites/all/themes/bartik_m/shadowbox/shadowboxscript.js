
<!--//--><![CDATA[//><!--
	jQuery.extend(Drupal.settings, { "basePath": "/", "colorbox": { "transition": "elastic", "speed": 350, "opacity": "0.85", "slideshow": false, "slideshowAuto": false, "slideshowSpeed": 2500, "slideshowStart": "", "slideshowStop": "", "current": "{current} of {total}", "previous": "« Prev", "next": "Next »", "close": "Close", "overlayClose": true, "maxWidth": "100%", "maxHeight": "100%" }, "googleanalytics": { "trackOutgoing": 1, "trackMailto": 1, "trackDownload": 1, "trackDownloadExtensions": "7z|aac|arc|arj|asf|asx|avi|bin|csv|doc|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls|xml|z|zip" }, "shadowbox": { "animate": 1, "animateFade": 1, "animSequence": "wh", "auto_enable_all_images": 1, "auto_gallery": 1, "autoplayMovies": true, "continuous": 0, "counterLimit": "10", "counterType": "default", "displayCounter": 1, "displayNav": 1, "enableKeys": 1, "fadeDuration": "0.35", "handleOversize": "resize", "handleUnsupported": "link", "initialHeight": 160, "initialWidth": 320, "language": "en", "modal": false, "overlayColor": "#000", "overlayOpacity": "0.85", "players": null, "resizeDuration": "0.35", "showMovieControls": 1, "slideshowDelay": "6", "viewportPadding": 20, "useSizzle": 0 }, "quicktabs": { "qt_other_gallery": { "tabs": [ 0, 0 ] }, "qt_food_photo_gallery": { "tabs": [ { "vid": "photo_gallery", "display": "block_1", "args": [ "27,32" ], "get_displays": "vdisp_0", "title": "Premium Cakes", "weight": "-100", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,33" ], "get_displays": "vdisp_1", "title": "Cakes", "weight": "-99", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,34" ], "get_displays": "vdisp_2", "title": "Desserts", "weight": "-98", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,35" ], "get_displays": "vdisp_3", "title": "Luncheon", "weight": "-97", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,31" ], "get_displays": "vdisp_4", "title": "Displays", "weight": "-96", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,36" ], "get_displays": "vdisp_5", "title": "Hors D\'Oeuvres", "weight": "-95", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,37" ], "get_displays": "vdisp_6", "title": "Appetizers", "weight": "-94", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,85" ], "get_displays": "vdisp_8", "title": "Stations", "weight": "-93", "type": "view" }, { "vid": "photo_gallery", "display": "block_1", "args": [ "27,38" ], "get_displays": "vdisp_7", "title": "Entrees", "weight": "-92", "type": "view" } ] }, "qt_general_photo_gallery": { "tabs": [ 0, 0, 0, 0 ] } }, "views": { "ajax_path": [ "/views/ajax", "/views/ajax", "/views/ajax", "/views/ajax", "/views/ajax", "/views/ajax", "/views/ajax", "/views/ajax", "/views/ajax" ], "ajaxViews": [ { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,32", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,33", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,34", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,35", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,31", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,36", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,37", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,85", "view_path": "node/21" }, { "view_name": "photo_gallery", "view_display_id": "block_1", "view_args": "27,38", "view_path": "node/21" } ] } });
//--><!]]>

<!--//--><![CDATA[//><!--
	Shadowbox.path = "/sites/all/libraries/shadowbox/";
	Drupal.settings.shadowbox.onOpen = function(currentImage){Shadowbox.play();Shadowbox.pause();};
	Shadowbox.init(Drupal.settings.shadowbox);
//--><!]]>
