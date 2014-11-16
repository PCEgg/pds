!function($){"use strict";$.fn.bjqs=function(e){var t={width:700,height:300,animtype:"fade",animduration:450,animspeed:4e3,automatic:!0,showcontrols:!0,centercontrols:!0,nexttext:"",prevtext:"",showmarkers:!0,centermarkers:!0,keyboardnav:!0,hoverpause:!0,usecaptions:!0,randomstart:!1,responsive:!1},i=$.extend({},t,e),n=this,h=n.find("ul.bjqs"),d=h.children("li"),s=null,a=null,r=null,c=null,l=null,o=null,u=null,w=null,g={slidecount:d.length,animating:!1,paused:!1,currentslide:1,nextslide:0,currentindex:0,nextindex:0,interval:null},f={width:null,height:null,ratio:null},p={fwd:"forward",prev:"previous"},m=function(){d.addClass("bjqs-slide"),i.responsive?v():q(),g.slidecount>1?(i.randomstart&&I(),i.showcontrols&&y(),i.showmarkers&&T(),i.keyboardnav&&b(),i.hoverpause&&i.automatic&&j(),"slide"===i.animtype&&k()):i.automatic=!1,i.usecaptions&&C(),"slide"!==i.animtype||i.randomstart||(g.currentindex=1,g.currentslide=2),h.show(),d.eq(g.currentindex).show(),i.automatic&&(g.interval=setInterval(function(){W(p.fwd,!1)},i.animspeed))},v=function(){f.width=n.outerWidth(),f.ratio=f.width/i.width,f.height=i.height*f.ratio,"fade"===i.animtype&&(d.css({height:i.height,width:"100%"}),d.children("img").css({height:i.height,width:"100%"}),h.css({height:i.height,width:"100%"}),n.css({height:i.height,"max-width":i.width,position:"relative"}),f.width<i.width&&(d.css({height:f.height}),d.children("img").css({height:f.height}),h.css({height:f.height}),n.css({height:f.height})),$(window).resize(function(){f.width=n.outerWidth(),f.ratio=f.width/i.width,f.height=i.height*f.ratio,d.css({height:f.height}),d.children("img").css({height:f.height}),h.css({height:f.height}),n.css({height:f.height})})),"slide"===i.animtype&&(d.css({height:i.height,width:i.width}),d.children("img").css({height:i.height,width:i.width}),h.css({height:i.height,width:i.width*i.slidecount}),n.css({height:i.height,"max-width":i.width,position:"relative"}),f.width<i.width&&(d.css({height:f.height}),d.children("img").css({height:f.height}),h.css({height:f.height}),n.css({height:f.height})),$(window).resize(function(){f.width=n.outerWidth(),f.ratio=f.width/i.width,f.height=i.height*f.ratio,d.css({height:f.height,width:f.width}),d.children("img").css({height:f.height,width:f.width}),h.css({height:f.height,width:f.width*i.slidecount}),n.css({height:f.height}),o.css({height:f.height,width:f.width}),x(function(){W(!1,g.currentslide)},200,"some unique string")}))},x=function(){var e={};return function(t,i,n){n||(n="Don't call this twice without a uniqueId"),e[n]&&clearTimeout(e[n]),e[n]=setTimeout(t,i)}}(),q=function(){d.css({height:i.height,width:i.width}),h.css({height:i.height,width:i.width}),n.css({height:i.height,width:i.width,position:"relative"})},k=function(){u=d.eq(0).clone(),w=d.eq(g.slidecount-1).clone(),u.attr({"data-clone":"last","data-slide":0}).appendTo(h).show(),w.attr({"data-clone":"first","data-slide":0}).prependTo(h).show(),d=h.children("li"),g.slidecount=d.length,o=$('<div class="bjqs-wrapper"></div>'),i.responsive&&f.width<i.width?(o.css({width:f.width,height:f.height,overflow:"hidden",position:"relative"}),h.css({width:f.width*(g.slidecount+2),left:-f.width*g.currentslide})):(o.css({width:i.width,height:i.height,overflow:"hidden",position:"relative"}),h.css({width:i.width*(g.slidecount+2),left:-i.width*g.currentslide})),d.css({"float":"left",position:"relative",display:"list-item"}),o.prependTo(n),h.appendTo(o)},y=function(){if(s=$('<ul class="bjqs-controls"></ul>'),a=$('<li class="bjqs-next"><a href="#" data-direction="'+p.fwd+'">'+i.nexttext+"</a></li>"),r=$('<li class="bjqs-prev"><a href="#" data-direction="'+p.prev+'">'+i.prevtext+"</a></li>"),s.on("click","a",function(e){e.preventDefault();var t=$(this).attr("data-direction");g.animating||(t===p.fwd&&W(p.fwd,!1),t===p.prev&&W(p.prev,!1))}),r.appendTo(s),a.appendTo(s),s.appendTo(n),i.centercontrols){s.addClass("v-centered");var e=(n.height()-a.children("a").outerHeight())/2,t=e/i.height*100,h=t+"%";a.find("a").css("top",h),r.find("a").css("top",h)}},T=function(){if(c=$('<ol class="bjqs-markers"></ol>'),$.each(d,function(e,t){var n=e+1,h=e+1;"slide"===i.animtype&&(h=e+2);var d=$('<li><a href="#">'+n+"</a></li>");n===g.currentslide&&d.addClass("active-marker"),d.on("click","a",function(e){e.preventDefault(),g.animating||g.currentslide===h||W(!1,h)}),d.appendTo(c)}),c.appendTo(n),l=c.find("li"),i.centermarkers){c.addClass("h-centered");var e=(i.width-c.width())/2;c.css("left",e)}},b=function(){$(document).keyup(function(e){g.paused||(clearInterval(g.interval),g.paused=!0),g.animating||(39===e.keyCode?(e.preventDefault(),W(p.fwd,!1)):37===e.keyCode&&(e.preventDefault(),W(p.prev,!1))),g.paused&&i.automatic&&(g.interval=setInterval(function(){W(p.fwd)},i.animspeed),g.paused=!1)})},j=function(){n.hover(function(){g.paused||(clearInterval(g.interval),g.paused=!0)},function(){g.paused&&(g.interval=setInterval(function(){W(p.fwd,!1)},i.animspeed),g.paused=!1)})},C=function(){$.each(d,function(e,t){var i=$(t).children("img:first-child").attr("title");i||(i=$(t).children("a").find("img:first-child").attr("title")),i&&(i=$('<p class="bjqs-caption">'+i+"</p>"),i.appendTo($(t)))})},I=function(){var e=Math.floor(Math.random()*g.slidecount)+1;g.currentslide=e,g.currentindex=e-1},D=function(e){e===p.fwd?d.eq(g.currentindex).next().length?(g.nextindex=g.currentindex+1,g.nextslide=g.currentslide+1):(g.nextindex=0,g.nextslide=1):d.eq(g.currentindex).prev().length?(g.nextindex=g.currentindex-1,g.nextslide=g.currentslide-1):(g.nextindex=g.slidecount-1,g.nextslide=g.slidecount)},W=function(e,t){if(!g.animating&&(g.animating=!0,t?(g.nextslide=t,g.nextindex=t-1):D(e),"fade"===i.animtype&&(i.showmarkers&&(l.removeClass("active-marker"),l.eq(g.nextindex).addClass("active-marker")),d.eq(g.currentindex).fadeOut(i.animduration),d.eq(g.nextindex).fadeIn(i.animduration,function(){g.animating=!1,g.currentslide=g.nextslide,g.currentindex=g.nextindex})),"slide"===i.animtype)){if(i.showmarkers){var n=g.nextindex-1;n===g.slidecount-2?n=0:-1===n&&(n=g.slidecount-3),l.removeClass("active-marker"),l.eq(n).addClass("active-marker")}g.slidewidth=i.responsive&&f.width<i.width?f.width:i.width,h.animate({left:-g.nextindex*g.slidewidth},i.animduration,function(){g.currentslide=g.nextslide,g.currentindex=g.nextindex,"last"===d.eq(g.currentindex).attr("data-clone")?(h.css({left:-g.slidewidth}),g.currentslide=2,g.currentindex=1):"first"===d.eq(g.currentindex).attr("data-clone")&&(h.css({left:-g.slidewidth*(g.slidecount-2)}),g.currentslide=g.slidecount-1,g.currentindex=g.slidecount-2),g.animating=!1})}};m()}}(jQuery);