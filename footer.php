<?php
// Get the ID of the front page
$front_page_id = get_option('page_on_front');

// Get the permalink (URL) of the front page
$front_page_url = get_permalink($front_page_id);
?>

</div><!-- .content -->
<footer>
    <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" />
        <p>YOGA WITH BRETT</p>
        <a href="mailto:hello@yogawithbrett.com">hello@yogawithbrett.com</a>
        <a href="tel:5555555555">(555) 555-5555</a>
        <a href=""><img class="insta" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/insta.png" /></a>
        <p class="cite">&copy; <?php echo date('Y'); ?> <a href="<?php echo $front_page_url ?>/admin">yoga with brett</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>