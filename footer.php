<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rino_matsuhima
 */

?>

	<footer class="footer">
		<div class="footer__upper">
			<?php the_custom_logo(); ?>
			<ul class="footer__linkList -pc">
				<li class="footer__linkItem">
					<a href="<?php echo home_url(); ?>" class="footer__link">HOME</a>
					<a href="<?php echo home_url('/about/'); ?>" class="footer__link">PROFILE</a>
				</li>
				<li class="footer__linkItem">
					<a href="<?php echo home_url('#service'); ?>" class="footer__link">SERVICE</a>
					<ul class="footer__linkChildList">
						<li class="footer__linkChildItem">
							<a href="<?php echo home_url('#profile'); ?>" class="footer__linkChild">-プロフィール撮影</a>
						</li>
						<li class="footer__linkChildItem">
							<a href="<?php echo home_url('#selfy'); ?>" class="footer__linkChild">-自撮りBoot Camp</a>
						</li>
						<!-- <li class="footer__linkChildItem">
							<a href="<?php echo home_url('#academy'); ?>" class="footer__linkChild">-My will Academy</a>
						</li> -->
					</ul>
				</li>
				<li class="footer__linkItem">
					<a href="<?php echo home_url('#voice'); ?>" class="footer__link">VOICE</a>
					<a href="<?php echo home_url('#column'); ?>" class="footer__link">COLUMN</a>
				</li>
			</ul>
			<ul class="footer__linkList -sp">
				<li class="footer__linkItem">
					<div class="footer__linkItemLeft">
						<a href="<?php echo home_url(); ?>" class="footer__link">HOME</a>
						<a href="<?php echo home_url('/about/'); ?>" class="footer__link">PROFILE</a>
					</div>
					<div class="footer__linkItemLeft">
						<a href="<?php echo home_url('#voice'); ?>" class="footer__link">VOICE</a>
						<a href="<?php echo home_url('#column'); ?>" class="footer__link">COLUMN</a>
					</div>
				</li>
				<li class="footer__linkItem">
					<a href="<?php echo home_url('#service'); ?>" class="footer__link">SERVICE</a>
					<ul class="footer__linkChildList">
						<li class="footer__linkChildItem">
							<a href="<?php echo home_url('#profile'); ?>" class="footer__linkChild">-プロフィール撮影</a>
						</li>
						<li class="footer__linkChildItem">
							<a href="<?php echo home_url('#selfy'); ?>" class="footer__linkChild">-自撮りBoot Camp</a>
						</li>
						<!-- <li class="footer__linkChildItem">
							<a href="<?php echo home_url('#academy'); ?>" class="footer__linkChild">-My will Academy</a>
						</li> -->
					</ul>
				</li>
			</ul>
		</div>
		<small class="footer__copyright -en">© RINO MATSUSHIMA All Rights Reserved</small>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
