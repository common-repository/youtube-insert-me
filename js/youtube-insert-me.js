/* 
 * Youtube Insert Me
 * By Maxime ORIOL
 * maxime.oriol@gmail.com
 *
 * @require  >= jquery V 1.4.2
 */

(function($) {
   $.fn.youtubeInsert = function(options) {
       var elt = this;
       var setting = {
            title : "YouTube video player",
            className : "youtube-player",
            width : 640,
            height : 390
       };
       $.extend(setting, options);
       
       var content = $(elt).html();
       var reg = /\[youtube\](\S+)\[\/youtube\]/gi;
       var matches = content.match(reg);
       if (matches != null) {
	       $.each(matches, function(index, code) {
		   code.match(reg);
		    var videoId = RegExp.$1;
		    var htmlToEmbed = "<iframe title='"+setting.title+"' class='"+setting.className+"' type='text/html'";
		    htmlToEmbed += "width='"+setting.width+"' height='"+setting.height+"' src='http://www.youtube.com/embed/"+videoId+"'";
		    htmlToEmbed += "frameborder='0' allowFullScreen></iframe>";
		    content = content.replace(code, htmlToEmbed);
		    $(elt).html(content);
		});
	}
   };
})(jQuery);

/*
* Youtube code to enable video
*<iframe title="YouTube video player" class="youtube-player" type="text/html"
*width="640" height="390" src="http://www.youtube.com/embed/VIDEO_ID"
*frameborder="0" allowFullScreen></iframe>
*/
