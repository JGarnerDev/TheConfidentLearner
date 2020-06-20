<?php get_header(  )?>

<main role="main">
    <section class="page-header">

        <h1><?php the_title()?></h1>

        <p class="lead testimonial-desc">
            <?php echo get_theme_mod( 'testimonials-desc_text', "Here's a list of what people have to say" )?>
        </p>

        <hr />

    </section>

    <section>
        <div>

            <?php $programs_query = new WP_Query(array(
                'category_name' => 'testimonials'
            ));?>

            <?php while ($programs_query -> have_posts()) : $programs_query -> the_post()?>

            <div class="testimonial">
                <?php the_content()?>
                <small class="author">- <?php the_title()?></small>
            </div>

            <?php endwhile; ?>

        </div>
    </section>


    <?php get_footer(  )?>