=== RSS Block for Newsletter ===
Tags: rss, feed, newsletter, composer
Tested up to: 6.2.2
Stable tag: 1.0.5
Contributors: satollo
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a RSS block to the Newsletter composer to embed content in newsletters from external sources.

== Description ==

This simple and lite plugin adds a block to the [Newsletter](https://wordpress.org/plugins/newsletter/) composer which inludes in newsletters the content from
[RSS feeds](https://en.wikipedia.org/wiki/RSS). 

RSS is actually a bit declining today, but there are many services still exposing them and there are services able to convert
social stream (Instangram, Facebook and so on) to RSS feeds, making them avalable in such (almost) standard format.

Note: this plugin uses the internal WordPress libraries to parse the RSS. It absolutely needs the contribution of experts to be extended to
custom RSS feed fields and/or custom RSS feeds available outside. Participate!

= Nice to have (with your help) =

* Many feeds have an HTML description which contains an image. Would be nice to parse that description and extract the image for
better bloc formatting.

= Other Newsletter plugin integrations =

* [BuddyPress Integration](https://wordpress.org/plugins/newsletter-buddypress)
* [Popup Maker Integration](https://wordpress.org/plugins/newsletter-popupmaker)

== Frequently Asked Questions ==

= How to configure =

Nothing special to do. Just install, activate and inside the Newsletter composer you'll find that new RSS block.

Drag it in your newsletter and select a feed URL and hope for the best.

= Does it works with all feeds? =

No, there are feeds which are not compliant with specification, other without the media or a decent description part and so on. Just
experiment.

= Can I get an RSS feed for Instagram, Facebook, Youtube? =

No, you can't. Or, at least, not officially. Those services are no more exporting their feeds. But you can search the net for
"RSS for Instagram" (just an example) to find services which provide that feature or other nice solution, for example
with Zapier.

What you need, at the end, is an RSS feed URL.

= The block content is updated when I send the newsletter? =

No, the block content is created when you add it to your newsletter or when you refresh it and the made static.

= Images are imported in my blog? =

* No, image references are untouched so they're loaded from the original domain which hosts them.

== Screenshots ==

1. The RSS block dragged while composing a newsletter

== Changelog ==

= 1.0.5 =

* WP 6.2.2 compatibility

= 1.0.4 =

* WP 5.9.3 compatibility

= 1.0.3 =

* WP 5.9 compatibility

= 1.0.2 =

* WP 5.8 compatibility

= 1.0.1 =

* Compatibility check with WP 5.7

= 1.0.0 =

* First official release
