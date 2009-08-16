=== Plugin Name ===
Contributors: kolev
Donate link: http://nikolay.com/projects/sponsor/
Tags: short URL, URL shortener, shorturl, revcanonical, shortlink, seo, linkrot, permalink, redirect, twitter, wp.me
Requires at least: 2.7
Tested up to: 2.8
Stable tag: 0.4.2

The ShortURL plugin provides short canonical permalinks to your posts and pages similarly to WordPress.com via its WP.me service.

== Description ==

The ShortURL plugin allows you to use your blog as your own URL shorterning service by implementing the [Short URL Auto-Discovery](http://wiki.snaplog.com/short_url) specification. Your short URLs will be in the form of `http://domain/-code`.

The auto-discovery feature allows third-party services that honor it to use your own short URLs instead of generating new ones using services such as [TinyURL](http://tinyurl.com/), [bit.ly](http://bit.ly/), and others. This gives your posts and pages canonical short URLs that give you all SEO benefits and don't leak traffic out to external domains and will prevent linkrot. The homepage short URLs is set to just `http://domain/` as a unique feature.

The other great benefit of the ShortURL plugin is that the generated short URLs won't break if you change the permalink structure of your blog or rename the slug of a particular post or page.

Due to the recent choice of both the [Microformats](http://microformats.org/) community and [WordPress.com](http://wordpress.com/) to use `rel="shortlink"` vs the alternative proposals, the ShortURL plugin is also using it now.

More on the topic:

* [Microformats Wiki: rel="shortlink"](http://microformats.org/wiki/rel-shortlink)
* [WP.me - shorten your links](http://en.blog.wordpress.com/2009/08/14/shorten/)

== Installation ==

1. Upload `shorturl.zip` to the `/wp-content/plugins/` directory
1. Unzip the archive
1. Activate the plugin through the 'Plugins' menu in WordPress Admin
1. Update the settings

== Frequently Asked Questions ==

= Why did you choose Short URL vs RevCanonical or shortlink specifications? =

RevCanonical is not supported by HTML 5 and it seems that [Short URL](http://wiki.snaplog.com/short_url) is getting wider support by big blogs such as [Ars Technica](http://arstechnica.com/) and other sites such as [PHP](http://php.net/). We will closely monitor the developments and implement the winning specification.

= Are you planning to provide third-party URL shorteners? =

Yes, in the near future. Actually, third-party providers are already supported by the `Short URL` custom field, but it's not automatic and you have to shorten the URLs manually.

= Are you planning to support alternative domains for short URLs? =

Yes and this will also eliminate the dash in the URLs.

= Will you add support for custom short URL patterns? =

Yes. The dash-based one will continue to be the default one though.

== To Do ==

* Test against [WordPress](http://wordpress.org/) 2.9 and [WordPress MU](http://mu.wordpress.org/)
* Add a settings page
* Add a widget
* Integrated with [Google Analytics](http://www.google.com/analytics/)
* Integrate with the top [Twitter](http://twitter.com/) plugins to use ShortURL instead of third-party services

== Changelog ==

= 0.4.2 =
* Minor plugin info cleanup

= 0.4.1 =
* Minor plugin info cleanup

= 0.4 =
* Added `[shorturl]` shortcode
* Added `the_shorturl()` and `get_shorturl()` functions for use in themes
* Switched to `rel="shortlink"` similarly to [WP.me](http://wp.me/)

= 0.3 =
* Replaced the tilde (~) with dash (-) in the short URLs similarly to [FriendFeed](http://friendfeed.com/) & [Ginx](http://ginx.com/), but the tilde is still supported for backward compatibility

= 0.2 =
* Added a short URL for the homepage

= 0.1.1  =
* Fixed a versioning issue

= 0.1 =
* First release. Yay!

== Screenshots ==

Coming soon!
