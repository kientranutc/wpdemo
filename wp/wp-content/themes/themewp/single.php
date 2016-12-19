    <?php get_header(); ?>


     <h1><?php echo excerpt(the_title());?></h1>
 
                     
     <div>

 <?php
while ( have_posts() ) : the_post();
{
the_content();
if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

}
endwhile;
?>
     </div>
            
     <?php get_footer(); ?>