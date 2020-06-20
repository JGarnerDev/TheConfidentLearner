<?php get_header(  )?>

<main role="main">
    <section class="page-header">

        <h1><?php the_title()?></h1>

        <p class="lead programs-desc">
            <?php echo get_theme_mod( 'programs-desc_text', "Here's a list of programs we have to offer" )?>
        </p>


        <hr />

    </section>

    <section>
        <div>
            <?php $query = new WP_Query(array(
                'category_name' => 'programs'
            ));?>

            <?php while ($query -> have_posts()) : $query -> the_post()?>

            <div class="program row">
                <div class="thumbnail  col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid img-thumbnail'))?>
                </div>
                <div class="text col-lg-9 col-md-8 col-sm-8 col-xs-6">
                    <h3><?php the_title()?></h3>
                    <p><?php the_content()?></p>
                </div>
            </div>


            <?php endwhile;?>


        </div>
    </section>



    <?php get_footer(  )?>