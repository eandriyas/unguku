<aside>
	
	<div class="widget">
		<div class="w-title">
			Recent post
		</div>
		<div class="w-content">

			<?php $recent_posts = wp_get_recent_posts(array( 'numberposts' => '5'));?>

			<?php foreach( $recent_posts as $recent ): ?>
				<?php  if($recent['post_status']=="publish"): ?>
					<?php if ( has_post_thumbnail($recent['ID'])) : ?>
						<a href="<?php echo get_permalink($recent["ID"]); ?>">
							<?php //the_post_thumbnail(array(50,50)) ?>
							<?php echo get_the_post_thumbnail( $recent['ID'], 'thumbnail' ); ?>
							<p><?php echo $recent["post_title"] ?></p>
						</a>
					<?php else: ?>
						<a href="<?php echo get_permalink($recent["ID"]); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
							
							<p><?php echo $recent["post_title"] ?></p>
						</a>


					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
			
		</div>
		<div class="w-footer"></div>
	</div>
	
	<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	<?php endif; ?>
</aside>

