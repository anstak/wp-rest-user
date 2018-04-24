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
 
The `filter` argument in WP REST API allows the posts to be filtered using `WP_Query` public query vars. 

Since WordPress 4.7 the `filter` argument for any post endpoint was removed. 

This plugin restores the `filter` parameter for websites that were previously using it.

= Usage =

Use the `filter` parameter on any Post, or Custom Post Type endpoint such as `/wp/v2/posts` or `/wp/v2/cpt` as an array of `WP_Query`
argument. ACF values are also supported. 

Default Post:
```
fetch( 'https://domain.com/wp-json/wp/v2/posts?filter[meta_key]=acfkey&filter[meta_value]=acfvalue');
```

Custom Post Type
```
fetch( 'https://domain.com/wp-json/wp/v2/cars?filter[meta_key]=currency&filter[meta_value]=AUD'); // here 'cars' is the endpoint for CPT
```

Advanced Custom Field
```
fetch( 'https://domain.com/wp-json/wp/v2/cars?filter[meta_key]=price&filter[meta_compare]=<&filter[meta_value]=200000'); // Query for car 'less' than '200000' in 'price'
```

Advanced Custom Field - Date (before, equal & after)
```
fetch( 'https://domain.com/wp-json/wp/v2/cars?filter[meta_key]=expiry_date&filter[meta_value]=2018-12-27T23:59:59&filter[meta_compare]=< // 'Expiry' Before '2018 Boxing Day ends'
```

Multiple Meta Queries
```
fetch( 'https://domain.com/wp-json/wp/v2/cars?filter[meta_query][0][key]=currency&filter[meta_query][0][value]&filter[meta_query][1][key]=country&filter[meta_query][1][value]=Australia'); // here 'cars' is the endpoint for CPT
```


 
== Installation ==
  
1. Upload `wp-api-filter.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
 
== Frequently Asked Questions ==
 
= Why do I need WP REST User? =
 
If you're planning on using your WordPress website as a Backend, and you're consuming RESTful api, you'll most probably need to filter results on your GET request. This is precisely what this plugin does.

= Can I filter for multiple meta queries? =

YES! See Description.

= Can I Use this plugin to find posts by tags/categories? =

Yes, however this is natively supported by WordPress 4.7+. This plugin is not necessary if you¡¯re looking to find posts by tags/categories.

For more info, please [see this topic](https://wordpress.org/support/topic/empty-response-2/).
 
= Does this work with Custom Post Type? =
 
Yes! This plugin is designed to work with CPT types too!
 
= Does this work with Advanced Custom Field? =
 
Yes! This plugin is designed to work with ACF values too!
 
= There's a bug, what do I do? =

Issues and [pull requests](https://github.com/sk8-pty-ltd/wp-rest-filter/pulls) are welcome at [Github repo](https://github.com/sk8-pty-ltd/wp-rest-filter).
 
== Screenshots ==
 
1. An sample REST API GET request using [WP REST User](https://wordpress.org/plugins/wp-rest-filter/).
 
== Changelog ==
 
= 1.0.0 =
* Initial Release. 
* Only user with 'Subscriber' role can be created.
* Only 'username', 'email', 'password' fields are accepted.

== Upgrade Notice ==

Nothing to worry! Install away!
 
== Contact Us ==

Based in Sydney, [SK8Tech](https://sk8.tech) is a innovative company providing IT services to SMEs, including [Web Design](https://sk8.tech/services/web-design), App Development and more.