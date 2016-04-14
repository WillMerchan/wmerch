<?php
/*
Template Name: Homepage
*/
?>
<div id="home-wrapper">
<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<section id="home-hero">
					<h1>Designer + Developer</h1>
					<h2>I'm passionate about designing intuitive and effective experiences and building scalable systems. Here are some of my latest projects and writings</h2>

					<?php 
						$args = array(
							'post_type' => array( 'post', 'work'),
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );		
						while ( $query->have_posts() ) : $query->the_post();
							get_template_part( 'parts/loop', 'archive-grid' );
						endwhile; 
					?>


				</section>						

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->
</div>

<?php get_footer(); ?>
