<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Delos
 * @since Delos 0.3.1
 */
?>

		<footer class="fullwidth">
			<div class="table">
				<address class="cell small-12 medium-6">
					<b class="uppercase">RON CORVINO</b><a href="tel:+13104154647">cell | 310.415.4647</a><a href="tel:+14242844190">office | 424.284.4190</a><a href="mailto:ron.corvino@delos.com">email | ron.corvino@delos.com</a>
				</address>
				<address class="cell small-12 medium-6">
					<b class="uppercase">JOHN FINTON</b><a href="tel:+16268404507">cell | 626.840.4507</a><a href="tel:+14242844190">office | 424.284.4190</a><a href="mailto:john.finton@delos.com">email | john.finton@delos.com</a>
				</address>
			</div>
			<?php if( is_front_page() ) : ?>
			<aside class="callout brown in">
				<p class="uppercase"><a href="#link_goes_here" target="_blank">YOU'RE INVITED TO SET UP A CONSULTATION AT NO OBLIGATION.</a></p>
			</aside>
			<?php endif; ?>
		</footer>
	<?php wp_footer(); ?>
	</body>
</html>
