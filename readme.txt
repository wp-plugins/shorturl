=== Plugin Name ===
Contributors: kolev
Donate link: http://nikolay.com/projects/sponsor/
Tags: short URL, URL shortener, shorturl, revcanonical, shortlink, seo, linkrot, permalink, redirect
Requires at least: 2.7
Tested up to: 2.7.9
Stable tag: 0.3

ShortURL plugin creates short permalinks to your posts and pages using the Short URL Autodiscovery specification.

== Description ==

ShortURL plugin allows you to use your blog as a URL shorterning service by implementing both HTML and HTTP Short URL Autodiscovery specifications. Short URLs will be in the form of http://domain/basepath/-code. The autodiscovery feature allows third-party services that honor it to use your own short URLs instead of generating new ones using services such as TinyURL, bit.ly, and others. This gives your posts and pages canonical short URLs that give you all SEO benefits and don't leak traffic out to external domains and will prevent linkrot.

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

Yes and this will also eliminate the tilde in the URLs.

= Will you add support for custom short URL patterns? =

Yes. The tilde-based one will continue to be the default one though.

== To Do ==

* Test against WordPress 2.8!

== Changelog ==

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
