=== Pinba Script Name Fix ===
Contributors: f.macdonald
Tags: pinba, script_name, pinboard, intaro
Requires at least: 3.0.1
Tested up to: 4.4.2
Stable tag: 4.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sends "request_uri" instead of "script_name" to Pinba

== Description ==

By default Pinba PHP Extension sends value $_SERVER["SCRIPT_NAME"] in script_name. Sometimes it is not informative, for example when web application has one entry point. This plugin sends $_SERVER['REQUEST_URI'] instead.

This plugin is for use on a wordpress blog, on a server with PHP Pinba Module Installed.

References:

* https://github.com/intaro/pinboard/wiki/Configure-sending-of-readable-script-names-in-Pinba
* https://github.com/intaro/pinboard
* http://pinba.org/