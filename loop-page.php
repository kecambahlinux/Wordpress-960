<!-- The loop -->
<?php if ( have_posts() ) :
while ( have_posts() ) {
	the_post();
	get_template_part( 'content', 'page' );
}
else: ?>
	<p>Sorry, no posts match your criteria.</p>
<?php endif; ?>
