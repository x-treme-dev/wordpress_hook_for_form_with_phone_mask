<?php get_header();?>
<main class='main'>
 <div class="content">
    <h1>Записи: </h1>
    
    <article>
    <?php if(have_posts()): while(have_posts()): the_post();?>
    <h1><?php the_title();?></h1>
    <h4>Запись от <?php the_time('F jS, Y'); ?></h4>
    <p><?php the_content(_('(more...)'));?></p>
    <hr><?php endwhile;     else:?>
    <p><?php _e('Sorry, no posts');?></p>
    </article>
    
    <?php endif; ?>
    <?php do_action( 'my_hook' ); ?>
    <?php do_action( 'wp_enqueue_scripts' ); ?>
    </div>
    
</main>

<div class='sidebar'>
 <?php get_sidebar(); ?>
 </div>
<?php get_footer();?>