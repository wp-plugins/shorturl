=== Plugin Name ===
Contributors: kolev
Donate link: http://nikolay.com/projects/sponsor/
Tags: short URL, URL shortener, shorturl, revcanonical, shortlink, seo, linkrot, permalink, redirect, twitter, wp.me
Requires at least: 2.7
Tested up to: 2.8
Stable tag: 0.4

The ShortURL plugin provides short canonical permalinks to your posts and pages similarly to WordPress.com via its WP.me service.

== Description ==

The ShortURL plugin allows you to use your blog as your own URL shorterning service by implementing both the HTML and the HTTP Short URL Autodiscovery specifications. Your short URLs will be in the form of `http://domain/-code`.

The autodiscovery feature allows third-party services that honor it to use your own short URLs instead of generating new ones using services such as TinyURL, bit.ly, and others. This gives your posts and pages canonical short URLs that give you all SEO benefits and don't leak traffic out to external domains and will prevent linkrot. The homepage short URLs is set to just `http://domain/` as a unique feature.

The other great benefit of the ShortURL plugin is that the generated short URLs won't break if you change the permalink structure of your blog or rename the slug of a particular post or page.

Due to the recent choice of both the microformats community and WordPress.com to use `rel="shortlink"` vs the alternative proposals, the ShortURL plugin is also using it now.

More on the topic:

http://microformats.org/wiki/rel-shortlink
http://en.blog.wordpress.com/2009/08/14/shorten/

== Installation ==

1. Upload `shorturl.zip` to the `/wp-content/plugins/` directory
1. Unzip the archive
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Update the settings

== Frequently Asked Questions ==

= Why did you choose Short URL vs RevCanonical or shortlink specifications? =

RevCanonical is not supported by HTML 5 and it seems that Short URL is getting wider support by big blogs such as Ars Technica and other sites such as php.net. We will closely monitor the developments and implement the winning specification.

= Are you planning to provide third-party URL shorteners? =

Yes, in the near future. Actually, third-party providers are already supported by the `Short URL` custom field, but it's not automatic and you have to shorten the URLs manually.

= Are you planning to support alternative domains for short URLs? =

Yes and this will also eliminate the dash in the URLs.

= Will you add support for custom short URL patterns? =

Yes. The dash-based one will continue to be the default one though.

== To Do ==

* Test against WordPress 2.9 and WordPress MU
* Add a settings page
* Add a widget
* Integrated with Google Analytics
* Integrate with Top 3 Twitter plugins to use ShortURL instead of 3rd party services

== Changelog ==

= 08/15/2009 - Version 0.4 =
* Added `[shorturl]` shortcode
* Added `the_shorturl()` and `get_shorturl()` functions for use in themes
* Switched to `rel="shortlink"` similarly to WP.me

= 04/27/2009 - Version 0.3 =
* Replaced the tilde (~) with dash (-) in the short URLs similarly to FriendFeed & Ginx, but the tilde is still supported for backward compatibility

= 04/20/2009 - Version 0.2 =
* Added a short URL for the homepage

= 04/20/2009 - Version 0.1.1 =
* Fixed a versioning issue

= 04/20/2009 - Version 0.1 =
* First release. Yay!

== Screenshots ==

Coming soon!
