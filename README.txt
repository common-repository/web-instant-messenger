=== Web Instant Messenger ===
Contributors: sajdoko
Tags: chat, wim, web instant messenger, localweb chat
Requires at least: 4.8.5
Tested up to: 5.5.1
Stable tag: 5.4
Requires PHP: 5.6
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Gestisci i messaggi del sito direttamente dalla tua app: My LocalWeb. Con \"Web Instant Messenger\" sei costantemente in contatto con i tuoi clienti, per guidarli in tempo reale e aumentare le conversioni.

*Note: The plugin uses services from https://localweb.it/ and is intended ONLY for Localweb srl clients.

== Description ==
This plugin inserts in \'wp_footer\' the https://www.webinstantmessenger.it/ \'s script which
activates the Web Instant Messenger on site.

It call\'s the external script from localweb, www.localweb.it/chat/widget/ultimate_chat_widget.js which then builds the bottom right chat window.

All the chats and info inserted in the chat window is passed to localweb.it, nothing is stored on the sited database.

*Note: The plugin uses services from https://localweb.it/ and is intended ONLY for Localweb srl clients.

== Installation ==
Upload the plugin folder web-instant-messenger and all it’s contents to the /wp-content/plugins/ directory, or install the plugin through the WordPress plugins screen directly.
Activate the plugin through the ‘Plugins’ screen in WordPress
A new page \"Wim Options\" will appear under Settings.
From there can be activated/deactivated the service

== Changelog ==
= 1.1.2 =
* Updated to WordPress Plugin Directory guidelines by adding proper sanitizations. Also added sanitizations on host localweb.it.
= 1.1.1 =
* Added possibility to change WIM option directly from WordPress Backed, Version: 1.1.0
= 1.1.0 =
* First version online, Version: 1.0.0