var TubePressAjax=(function(){var d=function(g,i,f,h,j){if(typeof h==="function"){h()}jQuery.ajax({url:g,type:"GET",dataType:"html",complete:function(l){var k=f?jQuery("<div>").append(l.responseText).find(f):l.responseText;jQuery(i).html(k);if(typeof j==="function"){j()}}})},b=function(g,h,i,f){jQuery.ajax({url:g,type:"GET",data:h,dataType:f,complete:i})},e=function(f){jQuery(f).fadeTo(0,0.3)},c=function(f){jQuery(f).fadeTo(0,1)},a=function(g,j,f,i,k){e(j);var h=function(){c(j)};if(typeof k==="function"){h=function(){c(j);k()}}d(g,j,f,i,h)};return{load:d,applyLoadingStyle:e,removeLoadingStyle:c,loadAndStyle:a,get:b}}());var TubePressCss=(function(){var a=function(c){var b=document.createElement("link");b.setAttribute("rel","stylesheet");b.setAttribute("type","text/css");b.setAttribute("href",c);document.getElementsByTagName("head")[0].appendChild(b)};return{load:a}}());var TubePressEvents=(function(){return{NEW_THUMBS_LOADED:"tubepressNewThumbnailsLoaded",NEW_GALLERY_LOADED:"tubepressNewGalleryLoaded",THUMBNAIL_CLICKED:"tubepressThumbnailClicked",PLAYER_INVOKE:"tubepressPlayerInvoke",PLAYER_POPULATE:"tubepressPlayerPopulate"}}());var TubePressGallery=(function(){var b={},a={},d=function(k){return b[k].fluidThumbs},j=function(k){return b[k].shortcode},e=function(k){return b[k].playerLocationName},c=function(k){return b[k].ajaxPagination},g=function(k){return b[k].embeddedHeight},f=function(k){return b[k].embeddedWidth},h=function(k){return b[k].themeCSS},i=function(k,m){b[k]=m;var l=decodeURIComponent(h(k));if(l!==""&&a[l]!==true){TubePressCss.load(getTubePressBaseUrl()+l);a[l]=true}jQuery(document).trigger(TubePressEvents.NEW_GALLERY_LOADED,k)};return{isAjaxPagination:c,isFluidThumbs:d,getShortcode:j,getPlayerLocationName:e,getEmbeddedHeight:g,getEmbeddedWidth:f,init:i}}());var TubePressPlayers=(function(){var a={},b=jQuery,f=b(document),e=TubePressGallery,g=TubePressEvents,d=function(m,k){var j=getTubePressBaseUrl(),i=e.getPlayerLocationName(k),l=j+"/sys/ui/static/players/"+i+"/"+i+".js";if(a[i]===true){return}else{a[i]=true}b.getScript(l)},c=function(i){return i!=="vimeo"&&i!=="youtube"&&i!=="solo"&&i!=="static"},h=function(n,o,r){var k=e.getPlayerLocationName(r),q=e.getEmbeddedHeight(r),j=e.getEmbeddedWidth(r),l=e.getShortcode(r),p=function(u){var s=jQuery.parseJSON(u.responseText),v=decodeURIComponent(s.title),t=decodeURIComponent(s.html);f.trigger(g.PLAYER_POPULATE+k,[v,t,q,j,o,r])},m={tubepress_video:o,tubepress_shortcode:l},i=getTubePressBaseUrl()+"/sys/scripts/ajax/playerHtml.php";f.trigger(g.PLAYER_INVOKE+k,[o,r,j,q]);if(c(k)){TubePressAjax.get(i,m,p,"json")}};f.bind(g.NEW_GALLERY_LOADED,d);f.bind(g.THUMBNAIL_CLICKED,h)}());var TubePressThumbs=(function(){var e=function(k){return"#tubepress_gallery_"+k+"_thumbnail_area"},i=function(k){return jQuery(e(k))},g=function(k){return k[3]},j=function(l){var k=l.lastIndexOf("_");return l.substring(16,k)},c=function(k){return i(k).find("img:first").width()},h=function(){var k=jQuery(this).attr("rel").split("_"),l=g(k),m=j(jQuery(this).attr("id"));jQuery(document).trigger(TubePressEvents.THUMBNAIL_CLICKED,[m,l])},a=function(p){i(p).css({width:"100%"});var n=e(p),r=c(p),l=jQuery(n),q=l.width(),m=Math.floor(q/r),o=Math.floor(q/m),k=jQuery(n+" div.tubepress_thumb");l.css({width:"100%"});l.css({width:q});k.css({width:o})},f=function(k){var l=1,n="div#tubepress_gallery_"+k+" div.tubepress_thumbnail_area:first > div.pagination:first > span.current",m=jQuery(n);if(m.length>0){l=m.html()}return l},d=function(l,k){jQuery("#tubepress_gallery_"+k+" a[id^='tubepress_']").click(h);if(TubePressGallery.isFluidThumbs(k)){a(k)}},b=TubePressEvents.NEW_THUMBS_LOADED+" "+TubePressEvents.NEW_GALLERY_LOADED;jQuery(document).bind(b,d);return{getCurrentPageNumber:f,getGalleryIdFromRelSplit:g,getThumbAreaSelector:e,getVideoIdFromIdAttr:j}}());var TubePressAjaxPagination=(function(){var c=function(e){jQuery(document).trigger(TubePressEvents.NEW_THUMBS_LOADED,e)},d=function(g,m){var k=getTubePressBaseUrl(),f=TubePressGallery.getShortcode(m),l=g.attr("rel"),e=TubePressThumbs.getThumbAreaSelector(m),i=function(){c(m)},j=k+"/sys/scripts/ajax/shortcode_printer.php?shortcode="+f+"&tubepress_"+l+"&tubepress_galleryId="+m,h=e+" > *";TubePressAjax.loadAndStyle(j,e,h,"",i)},b=function(f){var e=function(){d(jQuery(this),f)};jQuery("#tubepress_gallery_"+f+" div.pagination a").click(e)},a=function(g,f){if(TubePressGallery.isAjaxPagination(f)){b(f)}};jQuery(document).bind(TubePressEvents.NEW_THUMBS_LOADED,a);jQuery(document).bind(TubePressEvents.NEW_GALLERY_LOADED,a)}());var TubePressCompat=(function(){var a=function(){jQuery.getScript=function(c,d,b){jQuery.ajax({type:"GET",url:c,success:d,dataType:"script",cache:b})};jQuery.fn.fadeTo=function(b,d,c){return this.animate({opacity:d},b,function(){if(d===1&&jQuery.browser.msie){this.style.removeAttribute("filter")}if(jQuery.isFunction(c)){c()}})}};return{init:a}}());var TubePressDepCheck=(function(){var a=function(){var b=jQuery.fn.jquery;if(/1\.6|7|8|9\.[0-9]+/.test(b)===false){console.log("TubePress requires jQuery 1.6 or higher. This page is running version "+b)}};return{init:a}}());var tubePressBoot=function(){TubePressCompat.init();TubePressDepCheck.init()};if(!jQuery.browser.msie){var oldReady=jQuery.ready;jQuery.ready=function(){try{oldReady.apply(this,arguments)}catch(a){console.log("Caught exception when booting TubePress: "+a)}tubePressBoot()}}else{jQuery(document).ready(function(){tubePressBoot()})};