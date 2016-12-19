<?php get_header(); ?>
 <h1><?php single_cat_title();?></h1>
 <?php while(have_posts()) : the_post();?>
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
                                        <footer>
                                            <a class="readmore" href="<?php the_permalink();?>" title="<?php the_title();?>" rel="nofollow"><i class="fa fa-hand-o-right"></i> Đọc thêm...</a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile;wp_reset_query();?>
                        </div>
                     
<?php get_footer(); ?>