=== Better User Profile Fields ===
Contributors: cardiganmedia
Donate link: http://www.edwardrjenkins.com
Tags: user, profile
Requires at least: 3.0.1
Tested up to: 3.5.2
Stable tag: 1
License: GPL3+
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Simple plugin that adds new user profile fields, including Facebook, Twitter, Google+, Deviant Art and Tumblr.

== Description ==

Adds new user profile fields, including Facebook, Twitter, Google+, Deviant Art and Tumblr. These new fields can be used in your template with get_author_meta('<name>')

For example, to add the Google+ URL you would use get_author_meta('googleplus').

== Installation ==

1. Upload the betterprofilefields folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit your profile page to see the new fields.

== Frequently Asked Questions ==

= How can I add links to the profiles in my template? =

Use the following sample in your template to link to the profile. Add this part, enclosed within PHP tags, to the link part of your URL.

get_author_meta('googleplus');

In the above example you'll replace 'googleplus' (as well as the link text) with the name of the profile field. Here's the full list:
<ul>
<li>
Facebook = 'facebook'</li>
<li>GooglePlus = 'googleplus'</li>
<li>Tumblr = 'tumblr'</li>
<li>Twitter = 'twitter'</li>
<li>Deviant Art = 'deviantart'</li>
<li>LinkedIn = 'linkedin'</li>
</ul>
== Changelog ==

= 1.0 =
* Initial release