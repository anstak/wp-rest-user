=== WP REST User ===
Contributors: jack50n9, sk8tech
Donate link: https://sk8.tech/donate
Tags: wp, rest, api, rest api, user, acf, cpt, json
Requires at least: 4.7.0
Tested up to: 4.9.5
Requires PHP: 5.2.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
WP REST User adds in the 'User Registration' function for REST API.
 
== Description ==

If you wish to 'Register User' using REST API, *without* exposing Administrator credentials to the Front End application, you are at the right place. Since WordPress 4.7, REST API was natively included in WordPress. 

In order to 'Register User', the authentication for a user with 'Administrator' role is required. While this is a delibrately done for security reasons, such implementation makes it very hard for Front End applications to implement a simple 'Register' or 'Sign Up' function.

This plugin fullfills such requirement by extending the existing WordPress REST API endpoints. 

= Usage =

Send a POST request to /wp-json/wp/v2/users/register, including a JSON body with three keys: username, email and password.

See the Screenshot below for POSTMAN demo:
 
== Installation ==
  
1. Upload `wp-rest-user` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
 
== Frequently Asked Questions ==
 
= Why do I need WP REST User? =
 
If you're planning on using your WordPress website as a Backend, and you're consuming RESTful api, you'll most probably need to Register User via REST API. This is precisely what this plugin does.

= Is it secure? =

Great question! For the time being, this plugin only allows registering user as 'subscriber' role. 'Subscriber' role has very limited capability in terms what WordPress allows him/her to do. From our perspective, subscribers are quite harmless.

= Does it work with WooCommerce? =

Another great question! By default, WordPress registers new user as 'subscriber', while WooCommerce registers new user as 'customer'. 
If you have WooCommerce installed and activated on your WordPress website, this plugin will automatically register user as 'customer' as well.
 
= There's a bug, what do I do? =

Issues and [pull requests](https://github.com/sk8-pty-ltd/wp-rest-user/pulls) are welcome at [Github repo](https://github.com/sk8-pty-ltd/wp-rest-user).
 
== Screenshots ==
 
1. An sample REST API POST request using [WP REST User](https://wordpress.org/plugins/wp-rest-user/).
 
== Changelog ==

= 1.2.1 = 

* Changed success status code from 123 to 200

= 1.2.0 = 

* Now supports more roles, including
	1. subscriber
	1. customer
	1. contributor
	1. custom roles
 
= 1.1.0 =
* Now supports 'Customer' role to be registered, if WooCommerce plugin is installed 
* Restructured Plugin for future development.
 
= 1.0.1 =
* Initial Release. 
* Only user with 'Subscriber' role can be created.
* Only 'username', 'email', 'password' fields are accepted.

== Upgrade Notice ==

Nothing to worry! Install away!
 
== Contact Us ==

Based in Sydney, [SK8Tech](https://sk8.tech) is a innovative company providing IT services to SMEs, including [Web Design](https://sk8.tech/services/web-design), App Development and more.