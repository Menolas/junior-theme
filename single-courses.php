<?php get_header('secondary');?>

<section class="page-wrap">
    <div class="container">

    	<h1><?php the_title();?></h1>

    	<?php if (has_post_thumbnail()):?>

    		<img src="<?=the_post_thumbnail_url('blog-large');?>" alt="<?=the_title();?>">

    	<?php endif;?>

        

        <?php get_template_part('includes/section', 'courses');?>
        <?php wp_link_pages();?>
    </div>
</section>

<?php get_footer();?>
