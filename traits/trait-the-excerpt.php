<?php
/**
 * Trait the_excerpt
 *
 * @since 0.1.0
 *
 * @package mkdo\cards_for_binder
 */

namespace mkdo\cards_for_binder;

/**
 * Get excerpt of a post
 *
 * Usage should be like so:
 *
 * `Helper::the_excerpt( 42 );`
 */
trait Helper_The_Excerpt {

	/**
	 * The Excerpt
	 *
	 * Get the excerpt of a post.
	 *
	 * @param  int $post_id Post ID.
	 * @return string       Excerpt
	 */
	public static function the_excerpt( $post_id ) {

		global $post;
		$save_post = $post;
		$post      = get_post( $post_id );

		setup_postdata( $GLOBALS['post'] =& $post );

		$output    = get_the_excerpt();
		$post      = $save_post;

		setup_postdata( $GLOBALS['post'] =& $post );

		return $output;
	}
}
