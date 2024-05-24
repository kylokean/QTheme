<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package QTheme
 */

global $kylthemeoptions;

?>

	<footer id="colophon" class="site-footer">

		<div class="footer-wrapper">

			<div class="footer-top_section"> 
				<?php 
					if ( !empty($kylthemeoptions['footer-widgetareas']['1'] )) {
							dynamic_sidebar ('footer_widgetarea_1');
						}
				?> 
			</div>

			<?php
			if (!empty($kylthemeoptions['footer-copyright'])) {
					$footer_copyright_output = $kylthemeoptions['footer-copyright'];
				?>
				<div class="footer-copyright_section"> 
					<?php echo $footer_copyright_output; ?>
				</div>
				<?php	
			}
			?>

			<div class="footer-bottom_section"> 
				<?php 
					if ( !empty($kylthemeoptions['footer-widgetareas']['2'] )) {
							dynamic_sidebar ('footer_widgetarea_2');
						}
				?> 
			</div>

		</div>	
			
	</footer><!-- #colophon -->

</div><!-- #page -->

<!-- Connect Redux Custom Fonts -->

<?php if ( !empty($kylthemeoptions['customfonts-header']['url']) || !empty($kylthemeoptions['customfonts-footer']['url']) || !empty($kylthemeoptions['customfonts-body']['url']) || !empty($kylthemeoptions['customfonts-h1']['url']) || !empty($kylthemeoptions['customfonts-h2']['url']) || !empty($kylthemeoptions['customfonts-h3']['url']) || !empty($kylthemeoptions['customfonts-h4']['url']) || !empty($kylthemeoptions['customfonts-h5']['url']) || !empty($kylthemeoptions['customfonts-h6']['url']) ) {
	require('custom_fonts_redux.php');
};
?>

<?php wp_footer();  ?>
<?php
	if (!empty($kylthemeoptions['trackingcode-body'])) {
		echo $kylthemeoptions['trackingcode-body'];
	}
 ?>		

</body>
</html>