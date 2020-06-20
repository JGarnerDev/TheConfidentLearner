<?php get_header()?>

<main role="main">
    <section class="page-header">

        <h1><?php the_title()?></h1>

        <p class="lead contact-desc">
            <?php echo get_theme_mod( 'contact-desc_text', 'The Confident Learner' )?>
        </p>

        <hr />

    </section>
    <section id="contactform">

        <?php
                echo do_shortcode('[contact-form-7 id="95" title="Contact form 1"]');
            ?>
    </section>


    <?php get_footer(  )?>