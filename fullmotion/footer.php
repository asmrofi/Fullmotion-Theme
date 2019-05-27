<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fullmotion
 */

?>

<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2><?php
                                global $fullmotion;
                                echo wp_kses_post($fullmotion['widget-title']);
                            ?>
                        </h2>
                        
						<p>
                           <?php
                            global $fullmotion;
                            echo wp_kses_post($fullmotion['widget-content']);
                            ?>
                        </p>

						<ul class="icons">
							<li><a href="<?php
                                            global $fullmotion;
                                            echo wp_kses_post($fullmotion['social-twitter']);
                                        ?>"class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                        
							<li><a href="<?php
                                            global $fullmotion;
                                            echo wp_kses_post($fullmotion['social-facebook']);
                                        ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                        
							<li><a href="<?php
                                            global $fullmotion;
                                            echo wp_kses_post($fullmotion['social-instagram']);
                                        ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>

							<li><a href="<?php
                                            global $fullmotion;
                                            echo wp_kses_post($fullmotion['social-email']);
                                        ?>" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
                        <p class="copyright"&copy;>Copyright&copy <a href="https://www.facebook.com/abu.sayem.50702">A.S.M ROFI-UDDIN</a></p>
					</div>
				</footer>

		
<?php wp_footer();?>
	</body>
</html>







