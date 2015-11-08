<?php get_header(); ?>

<div class="container">

      <div class="row">
        <div class="col-md-9">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
             
                    <div class="post">
                        <div class="page-header">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        
                        <p class="text-primary">Posted: <?php the_time('Y F d'); ?> <?php the_time('H:m'); ?></p>
                         
                        <div class="entry">
                            
                            <?php the_post_thumbnail(); ?>
                            <?php the_content(); ?>
             
                            <p class="postmetadata">
                                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                                <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                            </p>
                        </div>
                    </div>
                    <?php comments_template (); ?>
    		    <?php endwhile; ?>
         
                <div class="navigation">
                    <?php posts_nav_link(); ?>
                </div>
         
            <?php endif; ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?> 
        </div>
    </div>
  
<?php get_footer(); ?>
