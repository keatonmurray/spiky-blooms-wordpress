<?php get_header(); ?>
    <div id="homepage">
        <div class="container">
            <div class="row">
                <div class="heading col-12 col-md-6 text-center text-lg-start">
                    <h1>
                        Discover
                        <span class="d-block">Our Finest Selection</span>
                    </h1>
                </div>
                <div class="nav-btn col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                    <button class="btn header-btn float-end mt-5">
                        <i class="fas fa-search me-3"></i>
                        See all collections
                    </button>
                </div>
            </div>
            <br><br>
            <?php echo get_template_part('templates/products'); ?>
<?php get_footer(); ?>