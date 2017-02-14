        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
		<aside>
			<?php get_search_form(); ?>
			<p>Recent Articles</p>
			
			<nav>
				<ul>
					<?php query_posts('posts_per_page=5'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile;?>
				</ul>
			</nav>

		</aside>
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
<?php endif; ?>