<?php
get_header(); // Include header.php
?>

<main>
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- .container -->
</main>

<?php
get_footer(); // Include footer.php
?>