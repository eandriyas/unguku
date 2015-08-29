<?php include('header.php') ?>
<main>
	<?php if(have_posts()): ?>
		<?php while(have_posts()) : the_post(); ?>
			<article>
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail(array(640, 640)); ?>
				<?php else: ?>
					<?php echo ""; ?>	
				<?php endif; ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php include('sidebar.php') ?>
<?php include('footer.php') ?>