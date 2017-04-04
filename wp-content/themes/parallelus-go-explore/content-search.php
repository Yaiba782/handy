<?php
/**
 * The content for each Search Result.
 */

// Meta info



?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-result'); ?>>
	<header class="search-header">
		<h3 class="search-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-meta">

		<?php
		// Is this a destination, or child content of a destination?
		$post_ID = get_the_ID();
		$dest_ID = '';

		if (function_exists('get_the_destination_ID')) {
			$dest_ID = (get_post_type($post_ID) == 'destination') ? $post_ID : get_the_destination_ID( $post_ID );
		}

		if (!empty($dest_ID)) { ?>

		<ul class="hierarchy">
			<li class="symbol no-arrow"><i class="fa fa-map-marker"></i></li>
			<?php 
			// Get breadcrumb trail
			$path = array();
			$hierarchy = get_post_ancestors( $dest_ID );
			if (!empty($hierarchy)) {
				$path = array_reverse($hierarchy);
			}
			if ($post_ID !== $dest_ID || count($path) < 1) {
				// add the parent destination, if this isn't it
				$path[] = $dest_ID;
			}
			for ($x = 0; $x < count($path) && $x < 3; $x++) {
				$id = $path[$x];
				echo '<li><a href="'.esc_url(get_permalink( $id )).'">'.get_the_title( $id ).'</a></li>'; 
			}
			?>
		</ul>
		<?php } ?>

	</footer>  <!-- .entry-meta -->
</article><!-- #post-## -->
