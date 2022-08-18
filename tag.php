<?php
/**
 * Tags Template.
 *
 * @package ByteBunch
*/
get_header();
?>

    <!-------------------- Section Start -------------------->
    <section class="blog-section p-3">
        <main>
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-4 p-2 bg-white">
                                    <h2 class="main-heading m-2">
                                        Tags Archives:
                                        <?php 
                                            echo $tags = single_tag_title();
                                        ?>
                                    </h2>
                                </div><!--my-2-->
                                <?php require_once 'template-parts/content-article.php'; ?>
                            </div><!--col-md-8-->
                            <div class="col-md-4">
                                <?php get_sidebar(); ?>
                            </div><!--col-md-4-->
                        </div><!--row-->
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--container-->
       </main>
    </section>
    <!-------------------- Section End -------------------->

<?php
get_footer();
?>