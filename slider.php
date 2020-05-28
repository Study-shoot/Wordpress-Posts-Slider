 
<div class="side-couraosal "> 
        <?php  
        $wpb_all_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 14,

                          ));?>
                <?php if ( $wpb_all_query->have_posts() ) : ?>
                <div class="row">
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                      <div class="col-lg-12 "  style="padding: 1px;  ">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), ' ' );  ?>   
                        <figure class="post-couraosal " style="background-image: url('<?php echo $url ?>');  "> 
                        <?php   get_template_part( '/theme/studyshoot-sections/badget','cat' );?>                    
                        <a href="<?php the_permalink(); ?>"> <p> <?php the_title(); ?></p>
                        <?php endif; ?>   </figure> 
                        </a>  
                      </div>                  
                  <?php endwhile; ?>
                </div>
  <!-- end of the loop -->    
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p><?php _e( '  Add New Posts Here ' ); ?></p> 
    <?php endif; ?>
</div>

  
 
