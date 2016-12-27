<?php get_header(); ?>
<div id="category">

 <h1><?php single_cat_title();?></h1>

 <?php 


 // WP_Query arguments


// The Query
 if(have_posts()):
 
 while(have_posts()) : the_post();?>
                            <article class="blog-entry">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="thumb">
                                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                                <?php the_post_thumbnail('thumb_252x140');?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="post-title"><?php the_title();?></a>
        
                                    </div>
                                </div>
                             </article>
                            <?php endwhile;
                             
                            
                            else:
                              get_template_part("content","none");
                                endif;

                            ?>

</div>

                     
<?php get_footer(); ?>