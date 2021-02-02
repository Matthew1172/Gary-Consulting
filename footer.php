<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gary Consulting
 * @subpackage gary_consulting
 * @since 1.0.0
 */

?>
<footer style="background-color: #ededed;">
	<div class="container">
		<div class="row py-5">
			<div class="col-sm-6">
				<?php
				$contact_qry = array(
					'category_name' => 'contact'
				);
				$query = new WP_Query($contact_qry);
				?>
				<?php if ($query->have_posts()): ?>
					<?php while ($query->have_posts()): $query->the_post(); ?>
						<h5 class="pb-3"><?php the_title(); ?></h5>
						<hr/>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-sm-6">
				<h5 class="pb-3">Sitemap</h5>
				<hr/>
				<?php
				wp_nav_menu(array(
					'menu' => 'footer',
					'theme_location' => 'footer',
					'container_class' => ''
				));
				?>
			</div>
		</div>
		<div class="row">
			<div class='col-sm-12'>
				<p class="text-center text-muted">Copyright &copy; 2021 STaR Solutions Consulting. All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>