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

        <div class="space-50"></div>

        <div id="mc_embed_shell">
            <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup {
                    background: #fff;
                    clear: left;
                    font: 14px Helvetica, Arial, sans-serif;
                    width: 600px;
                }
            </style>
            <div id="mc_embed_signup" style="background:none;width:390px">
                <form action="https://yogawithbrett.us18.list-manage.com/subscribe/post?u=6da85e011b4241a80741a8411&amp;id=18713a6c36&amp;f_id=0092c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    <div id="mc_embed_signup_scroll">
                        <p style="text-align:left;margin:0">Keep up with the latest</p>
                        <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""></div>
                        <div id="mce-responses" class="clear foot">
                            <div class="response" id="mce-error-response" style="display: none;"></div>
                            <div class="response" id="mce-success-response" style="display: none;"></div>
                        </div>
                        <div aria-hidden="true" style="position: absolute; left: -5000px;">
                            /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                            <input type="text" name="b_6da85e011b4241a80741a8411_18713a6c36" tabindex="-1" value="">
                        </div>
                        <div class="optionalParent">
                            <div class="clear foot">
                                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
            <script type="text/javascript">
                (function($) {
                    window.fnames = new Array();
                    window.ftypes = new Array();
                    fnames[0] = 'EMAIL';
                    ftypes[0] = 'email';
                    fnames[1] = 'FNAME';
                    ftypes[1] = 'text';
                    fnames[2] = 'LNAME';
                    ftypes[2] = 'text';
                    fnames[3] = 'ADDRESS';
                    ftypes[3] = 'address';
                    fnames[4] = 'PHONE';
                    ftypes[4] = 'phone';
                    fnames[5] = 'BIRTHDAY';
                    ftypes[5] = 'birthday';
                }(jQuery));
                var $mcj = jQuery.noConflict(true);
            </script>
        </div>

        <div class="space-50"></div>

        <a href="https://us18.list-manage.com/contact-form?u=6da85e011b4241a80741a8411&form_id=712d1681c0b224a7a115ad65e09ddc22" target="_blank">brett@yogawithbrett.com</a>
        <a href="tel:3152123365">(315) 212-3365</a>
        <a href=""><img class="insta" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/insta.png" /></a>
        <p class="cite">&copy; <?php echo date('Y'); ?> <a href="<?php echo $front_page_url ?>/admin">yoga with brett</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>