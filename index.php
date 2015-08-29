<?php include('header.php') ?>
			<main>
			<?php query_posts('showposts=10'); ?>
			<?php if(have_posts()): ?>
				<?php while(have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail(array(640, 640)); ?>
					
				<?php endif; ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php echo get_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
				</article>
			<?php endwhile; ?>
		<?php else: ?>
			<h2>Not Found</h2>
		<?php endif; ?>
			</main>
			<?php include('sidebar.php') ?>
<?php include('footer.php') ?>