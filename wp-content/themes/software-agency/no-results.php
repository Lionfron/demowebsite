<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Software Agency
 */
?>

<h2 class="entry-title"><?php echo esc_html(get_theme_mod('software_agency_no_results_page_title',__('Nothing Found','software-agency')));?></h2>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'software-agency' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('software_agency_no_results_page_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','software-agency')));?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'software-agency' ); ?></p><br />
	<div class="more-btn mt-4 mb-4">
		<a class="p-3" href="<?php echo esc_url(home_url() ); ?>"><?php esc_html_e( 'Go Back', 'software-agency' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Go Back', 'software-agency' ); ?></span></a>
	</div>
<?php endif; ?>