<?php get_header(  )?>

<main role="main">

    <div class="jumbotron">
        <div class="container">
            <div class="row">



                <div class="col-lg-6 jumbo-left">
                    <div>
                        <h1 class="display-3"><?php echo get_theme_mod( 'banner_heading', 'The Confident Learner' )?>
                        </h1>
                        <h3><?php echo get_theme_mod( 'banner_subheading', 'Private Tutoring' )?></h3>
                        <p>
                            <?php echo get_theme_mod( 'banner_text', 'A holistic and strength based approach that enables learners to become self-motivated, empowered, and capable of realizing their own potential.' )?>
                        </p>
                    </div>

                </div>



                <div class="col-lg-6 jumbo-right">
                    <?php
                $video_file = get_template_directory_uri() . "/videos/intro.mp4";
                echo do_shortcode('[video mp4=' . $video_file . ' ]');
            ?>
                </div>




            </div>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row links">
            <div class="col-md-4 link">
                <div class="link-header">
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                    <h2><?php echo get_theme_mod( 'box1_heading', 'Programs' )?></h2>
                </div>

                <p><?php echo get_theme_mod( 'box1_text', 'Take a look at the courses we offer!' )?></p>
                <p><a class="btn btn-secondary" href="/programs" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4  link">
                <div class="link-header">
                    <i class="fas fa-comments fa-3x"></i>
                    <h2><?php echo get_theme_mod( 'box2_heading', 'Testimonials' )?></h2>
                </div>

                <p> <?php echo get_theme_mod( 'box2_text', 'Take a look at what our clients have to say!' )?></p>
                <p><a class="btn btn-secondary" href="/testimonials" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4  link">
                <div class="link-header">
                    <i class="fas fa-envelope fa-3x"></i>
                    <h2><?php echo get_theme_mod( 'box3_heading', 'Contact' )?></h2>
                </div>

                <p><?php echo get_theme_mod( 'box3_text', 'Send us a message any time!' )?></p>
                <p><a class="btn btn-secondary" href="/contact" role="button">View details &raquo;</a></p>
            </div>
        </div>



    </div> <!-- /container -->


    <?php get_footer(  )?>