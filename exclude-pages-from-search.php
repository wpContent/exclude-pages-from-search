<?php
/*
	Plugin Name: Exclude Pages From Search
	Plugin URI: https://github.com/SamBerson/exclude-pages-from-search
	Description: This plugin excludes all WordPress pages from the site's internal search results.
	Author: Sam Berson
	Version: 1.0
	Author URI: http://www.samberson.com
	License: GNU General Public License v2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts','SearchFilter');
