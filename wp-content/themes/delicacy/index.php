		<?php get_header(); ?>
        <div id="content">
        <?php
			if(of_get_option('slider_category')):
                if ( $paged < 2  && of_get_option('slider_radio', '1')) :
                    get_template_part( 'includes/nivo_default' ); 
                endif; 
            endif;
            ?>
                <div class="post-list">

                <?php if (have_posts()) : ?>
                
                <?php while (have_posts()) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('list-post-item'); ?>>						
                    <?php if(of_get_option('hp_settings') == 1 || !of_get_option('hp_settings')) : ?>
                                        
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <span class="date"><?php the_time( get_option('date_format') ); ?></span>
                        <span class="comments"><?php comments_popup_link(__('No comments','delicacy'), __('1 comment','delicacy'), __('Comments: %','delicacy')); ?></span>
                    <?php if(get_the_title() == '') { ?>
                        <a href="<?php the_permalink(); ?>" class="thepermalink" title="<?php _e( 'Permalink', 'delicacy' ); ?>"><?php _e( 'Permalink', 'delicacy' ); ?></a>                        <?php } else { ?>
                    <?php } ?>
                    </div>
                    <div class="entry-content">
                    <?php the_content(); ?>
                    </div>

                    <?php elseif (of_get_option('hp_settings') == 2) :?>

                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                    <?php } ?>
                    <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta"><span class="date"><?php the_time( get_option('date_format') ); ?></span><span class="comments"><?php comments_popup_link(__('No comments','delicacy'), __('1 comment','delicacy'), __('Comments: %','delicacy')); ?></span></div>
                    <div class="entry-content">
                    <?php the_excerpt(); ?>
                    </div>

                    <?php endif; ?>
                    
                </div>
                <div class="deco-line"></div>
                <?php endwhile; ?>
                
                <?php
                    if(function_exists('wp_pagenavi')) :
                        wp_pagenavi(); 
                    else :
                ?>
                    <div class="wp-pagenavi">
                        <div class="alignleft"><?php next_posts_link('&laquo; '.__('Previous Entries','delicacy')) ?></div> 
                        <div class="alignright"><?php previous_posts_link(__('Next entries','delicacy').' &raquo;') ?></div>
                    </div>
                <?php endif; ?>
                
                <?php else : ?>
                
                            <h2 class="post-title"><?php _e('Not Found','delicacy') ?></h2>

                        <?php endif; ?>



                </div><!-- end #post-list -->
            </div><!-- end #content -->
        <?php get_sidebar(); ?>
        </div><!-- end #content-wrapper -->
        <?php get_footer(); ?>
