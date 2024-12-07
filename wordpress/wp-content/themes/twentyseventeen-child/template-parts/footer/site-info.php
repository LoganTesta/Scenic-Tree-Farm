<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<div class="site-info">
    <div id="scollToTop" class="scoll-to-top">&#8593;</div>
    <?php
    if (function_exists('the_privacy_policy_link')) {
        the_privacy_policy_link('', '<span role="separator" aria-hidden="true"></span>');
    }
    ?>
    <div class="site-info__tree-harvesting"></div>
    <div class="site-info__copyright">Copyright &copy; <?php echo date("Y"); ?> Scenic Tree Farm.  All Rights Reserved.</div>
    <div class="content-row">
        <div class="col-sma-12">
            <?php echo get_custom_logo(); ?>
        </div>
    </div>
    <div class="content-row">
        <div class="site-info__location-and-hours col-sma-4">
            <h4 class="site-info__subheader">Location</h4>
            <div class="site-info__location">3920 West Cornelius Highway<br />Cornelius, OR 97113</div>
            <div calss="site-info__phone">503-242-9021</div>
        </div>
        <div class="site-info__social col-sma-4">
            <h4 class="site-info__subheader">Social</h4>
            <div class="site-info__social-logo facebook">
                <a class="site-info__social-logo__link" href=""><i class="fab fa-facebook-f fa-2x social-icon"><span class="sr-only">Facebook</span></i>
                </a>
            </div>
            <div class="site-info__social-logo instagram">
                <a class="site-info__social-logo__link" href=""><i class="fab fa-instagram fa-2x social-icon"><span class="sr-only">Instagram</span></i></a>
            </div>
            <div class="site-info__social-logo twitter">
                <a class="site-info__social-logo__link" href=""><i class="fab fa-twitter fa-2x social-icon"><span class="sr-only">Twitter</span></i></a>
            </div>
        </div>
        <div class="site-info__message col-sma-4">
            <h4 class="site-info__subheader">Everyone's Favorite Tree Farm!</h4>
            <div class="site-info__hours">
                <div></div>
                <div>Mon-Fri, 10 am-4 pm</div>
                <div>Sat, Sun: 9 am-4:30 pm</div>
            </div>
        </div>
    </div>
</div><!-- .site-info -->
