<?php
/**
 * Plugin Name: bbPress - Remove user avatars
 * Description: Remove avatars from bbPress profiles
 * Version: 1.0
 * Author: Ryan Halliday
 */


// Remove from replies and topics
function bbpra_return_empty(){
	return '';
}
add_filter('bbp_get_topic_author_avatar', 'bbpra_return_empty');
add_filter('bbp_get_reply_author_avatar', 'bbpra_return_empty');

// Remove from a few weird places like freshness
function bbpra_remove_avatar_section($author_links, $r, $args){
	foreach ($author_links as $link) {
		if (strpos($link, 'bbp-author-avatar') !== false){
			$author_links = array_diff($author_links, array($link));
			break;
		}
	}
	return $author_links;
}
add_filter('bbp_get_author_links', 'bbpra_remove_avatar_section', 10 , 3);
function bbpra_reply_padding_fix(){
	echo '<style>.bbp-reply-author { padding-top: 12px; }</style>';
}
add_action('bbp_template_before_replies_loop', 'bbpra_reply_padding_fix');

// Remove from user profile page. You should really just edit the template though...
function bbpra_return_1(){
	return 1;
}
add_filter('bbp_single_user_details_avatar_size', 'bbpra_return_1');
function bbpra_hide_profile_avatar(){
	echo '<style>#bbp-user-avatar { display: none; }</style>';
}
add_action('bbp_template_before_user_details', 'bbpra_hide_profile_avatar');
