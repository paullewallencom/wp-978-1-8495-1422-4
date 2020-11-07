<?php
/*
Template Name: Full width page without sidebar
*/
?>

<?php get_header(); ?>

<div id="container2" class="bdr bdr-top">

<div class="content left full">

<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post();?> 

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<?php if ( !is_front_page () ) { ?>
		<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
		<?php } ?>
		<div class="entry-content"><!--//post-->
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		} ?>
			<?php the_content();?>
		</div><!--//.entry-content-->

		<div class="push"></div>
		
	</article>
<?php endwhile; ?>
<?php else : ?>
       <h2 class="center">Not Found</h2>
       <p class="center">Sorry, but you are looking for something that isn't here.</p>
       <?php get_search_form(); ?>
<?php endif; ?>


<div class="push"></div>
</div><!--content-->

<div class="push"></div>

</div><!--//#container2-->

</div><!--//#container-->
<div id="across">

<?php get_footer(); ?>
