=== bbPress - Remove user avatars ===
Contributors: ryanhalliday
Tags: bbpress
Stable tag: 1.0
Requires PHP:      5.6.40
Requires at least: 6.0
Tested up to:      6.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Remove avatars from users in bbPress. Both in the frontend and from their profile edit page

== Description ==

This is a very simple plugin removes all user avatars for bbPress.

This helps the site look tidier and not filled with generated gravatars.

The override for the profile page is a bit of a hack with a 1px Gravatar and a CSS style tag. You should really edit `user-details.php` but this isn't an issue if you use my `bbp-disable-user-page` plugin which you should.

== Installation ==

1. Download the zip file from GitHub: https://github.com/ryanhalliday/bbp-remove-avatars/archive/master.zip
2. Upload it to your site.

== Frequently Asked Questions ==

* Why isn't this on the WordPress plugin repository?

This is a very simple plugin I hope to never update. It's not worth the upload process and dealing with SVN etc.
