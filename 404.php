<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package test_task
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <header class="page-header">
                                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'test_task' ); ?></h1>
                            </header><!-- .page-header -->
                            <div class="img">
                                <img src="http://testtask.iweb.cv.ua/wp-content/uploads/2019/10/404-error-not-found-page-background-design-vector-20395260.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
