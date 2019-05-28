<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" class="entry-wrapper card card-body">
                <?php // Post thumbnail. twentyfifteen_post_thumbnail(); ?>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <?php edit_post_link( __( 'Edit', 'wpdevtheme' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
