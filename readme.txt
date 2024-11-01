=== YouTube-Insert-Me ===
Donate link: http://www.toutest.net/donate
Contributors: oOXimOo
Tags: YouTube, Embed, Video, Playlist, Thumbnail, preview
Requires at least: 2.0
Tested up to: 3.0.4
Stable tag: 1.3.1

YouTube-Insert-Me allow to embed Youtube videos easily. That's the lightest plugin you can find for Wordpress.

== Screenshots ==
None

== Description ==

YouTube-Insert-Me allow to embed Youtube videos easily. The greatest advantage of this plugin is that your webpage will not nead three minutes to load ! That's the lightest plugin you can find for Wordpress

It works with all the current YouTube API parameters, including HD video, and produces XHTML valid output. It also, unlike many others similar plugins, works with videos with certain characters within their ID (e.g. double dashes).

Over the coming instructions I'll take you through the various ways to embed video.

To embed any Youtube video what you have to do is very easy ! You just have to insert the code as follow :

[youtube]id[/youtube]

Replacing 'id' by the id of the video than you can find in the shraring url. The url seam to http://www.youtube.com/watch/?v=id
So, you just have to copy and past the id video.

/!\ Caution : Take care to dont have any white space between both tags, moreover the code will not be replaced.

Technicaly, the code that you insert in your article is replace thinks to JQuery - Javascript. The JQuery library is automaticaly called from Google API

== Parameters ==

For the first version, no parameters are available except in php file, but soon an upgrade will allow you to use specific parameter for each video.

In PHP file : You can define the width and the height of the video like that : 
$('#content').youtubeInsert({
    width : 600
    height : 450
});
unit is Pixel.

== Installation ==

1. Upload the zip file from the Plugin menu in Wordpress or
   Upload the entire `youtube-insert-me` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= How do I find the ID of a YouTube video? =

If you play a YouTube video, look at the URL - it will probably look something like this...

`http://www.youtube.com/watch?v=L5Y4qzc_JTg`

The video ID is the list of letters and numbers after `v=`, in this case `L5Y4qzc_JTg`.

= How can I get help or request possible changes =

Feel free to report any problems, or suggestions for enhancements, to me either via [my contact form](http://www.toutestnet.fr/me-contacter "Contact me") or by [the plugins homepage](http://www.toutestnet.fr/youtube-insert-me "YouTube-Insert-Me").

== Changelog ==  
  
## 1.0 ##
* Initial release

== Upgrade Notice ==

## 1.0 ##
* Initial release