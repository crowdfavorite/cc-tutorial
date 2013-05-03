<?php

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

global $post, $wp_query, $comments, $comment;

if (have_comments() || comments_open()) {
	if (have_comments()) {
		echo '<h2 id="comments" class="section-title">',comments_number(__('No Responses Yet', 'carrington-blueprint'), __('One Response', 'carrington-blueprint'), __('% Responses', 'carrington-blueprint')),'</h2>';
	}
	if (!post_password_required()) {
		echo '<ol class="reply-list">', wp_list_comments(array('callback'=> 'cfct_threaded_comment')), '</ol>';

		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<div class="pagination">', previous_comments_link(), next_comments_link(),'</div>';
		}
	}
	comment_form();
}
?>