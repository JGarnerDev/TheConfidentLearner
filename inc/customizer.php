<?php 
function register_customization($wp_customize){
    // Banner
    $wp_customize -> add_section('banner', array(
        'title' => __('Banner', 'The Confident Learner'),
        'description' => sprintf(__('Options for homepage banner', 'The Confident Learner')),
        'priority' => 130
    ));
    
    // Heading
    $wp_customize->add_setting('banner_heading', array(
        'default' => _x('The Confident Learner', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

    // Heading Control
    $wp_customize->add_control('banner_heading', array(
        'label' => __('Heading', 'The Confident Learner'),
        'section' => 'banner',
        'priority' => 20
    ));
    // SubHeading
    $wp_customize->add_setting('banner_subheading', array(
        'default' => _x('Private Tutoring for Primary Education', 'Private Tutoring'),
        'type' => 'theme_mod'
    ));

    // SubHeading Control
    $wp_customize->add_control('banner_subheading', array(
        'label' => __('subheading', 'The Confident Learner'),
        'section' => 'banner',
        'priority' => 20
    ));

      // Heading Text
      $wp_customize->add_setting('banner_text', array(
        'default' => _x('A holistic and strength based approach that enables learners to become self-motivated, empowered, and capable of realizing their own potential.', 'A holistic and strength based approach that enables learners to become self-motivated, empowered, and capable of realizing their own potential.'),
        'type' => 'theme_mod'
    ));

    // Heading Text Control
    $wp_customize->add_control('banner_text', array(
        'label' => __('Text', 'The Confident Learner'),
        'section' => 'banner',
        'priority' => 20
    ));

    // Background Image Setting
    $wp_customize->add_setting('banner_image', array(
        'default' => get_bloginfo( 'template_directory').'/img/banner.jpg',
        'type' => 'theme_mod'
    ));
    
    // Heading Text Control
    $wp_customize->add_control(new wp_customize_image_control($wp_customize, 'banner_image', array(
        'label' => __('Background Image', 'The Confident Learner'),
        'section' => 'banner',
        'settings' => 'banner_image'
    )));
  
    // ------------------- Boxes section 

    $wp_customize->add_section('boxes', array(
        'title' => __('Boxes', 'The Confident Learner'),
        'description' => sprintf( __("Options for homepage boxes", 'The Confident Learner')),
        'priority' => 130
    ));

    // Box 1 Heading Setting
    
    $wp_customize->add_setting('box1_heading', array(
        'default' => _x('Courses', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

    // Box 1 Heading Control
    
    $wp_customize->add_control('box1_heading', array(

         'label' => __('Box 1 Heading', 'The Confident Learner'),
        'section' => 'boxes',
        'priority' => 20
    ));

    // Box 1 Text Setting
    
    $wp_customize->add_setting('box1_text', array(

         'default' => _x('Take a look at the courses we offer!', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

      // Box 1 text Control
    
      $wp_customize->add_control('box1_text', array(

        'label' => __('Box 1 Text', 'The Confident Learner'),
       'section' => 'boxes',
       'priority' => 20
   ));

    // Box 1 Icon Setting
    
    $wp_customize->add_setting('box1_icon', array(

         'default' => _x('fa-book', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

      // Box 1 Icon Control
    
      $wp_customize->add_control('box1_icon', array(

        'label' => __('Box 1 Icon', 'The Confident Learner'),
       'section' => 'boxes',
       'priority' => 20
   ));

    // Box 2 Heading Setting
    
    $wp_customize->add_setting('box2_heading', array(
        'default' => _x('Testimonials', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

    // Box 2 Heading Control
    
    $wp_customize->add_control('box2_heading', array(

         'label' => __('Box 2 Heading', 'The Confident Learner'),
        'section' => 'boxes',
        'priority' => 20
    ));

    // Box 2 Text Setting
    
    $wp_customize->add_setting('box2_text', array(

         'default' => _x('Take a look at what our clients have to say!', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

      // Box 2 text Control
    
      $wp_customize->add_control('box2_text', array(

        'label' => __('Box 2 Text', 'The Confident Learner'),
       'section' => 'boxes',
       'priority' => 20
   ));

    // Box 2 Icon Setting
    
    $wp_customize->add_setting('box2_icon', array(

         'default' => _x('fa-comments-o', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

      // Box 2 Icon Control
    
      $wp_customize->add_control('box2_icon', array(

        'label' => __('Box 2 Icon', 'The Confident Learner'),
       'section' => 'boxes',
       'priority' => 20
   ));
    // Box 3 Heading Setting
    
    $wp_customize->add_setting('box3_heading', array(
        'default' => _x('Contact', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

    // Box 3 Heading Control
    
    $wp_customize->add_control('box3_heading', array(

         'label' => __('Box 3 Heading', 'The Confident Learner'),
        'section' => 'boxes',
        'priority' => 20
    ));

    // Box 3 Text Setting
    
    $wp_customize->add_setting('box3_text', array(

         'default' => _x('Send us a message any time!', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

      // Box 3 text Control
    
      $wp_customize->add_control('box3_text', array(

        'label' => __('Box 3 Text', 'The Confident Learner'),
       'section' => 'boxes',
       'priority' => 20
   ));

    // Box 3 Icon Setting
    
    $wp_customize->add_setting('box3_icon', array(

         'default' => _x('fa-envelope-o', 'The Confident Learner'),
        'type' => 'theme_mod'
    ));

      // Box 3 Icon Control
    
      $wp_customize->add_control('box3_icon', array(

        'label' => __('Box 3 Icon', 'The Confident Learner'),
       'section' => 'boxes',
       'priority' => 20
   ));


   // Testimonials Descriptor Text Setting
    
   $wp_customize->add_setting('testimonials-desc_text', array(

    'default' => _x('Take a look at our testimonials!', 'The Confident Learner'),
   'type' => 'theme_mod'
));

 // Testimonials Descriptor Text Control

 $wp_customize->add_control('testimonials-desc_text', array(

   'label' => __('Testimonials descriptor', 'The Confident Learner'),
  'section' => 'boxes',
  'priority' => 140
));
   // Programs Descriptor Text Setting
    
   $wp_customize->add_setting('programs-desc_text', array(

    'default' => _x('Take a look at our Programs!', 'The Confident Learner'),
   'type' => 'theme_mod'
));

 // Programs Descriptor Text Control

 $wp_customize->add_control('programs-desc_text', array(

   'label' => __('Programs descriptor', 'The Confident Learner'),
  'section' => 'boxes',
  'priority' => 140
));
   // Contact Descriptor Text Setting
    
   $wp_customize->add_setting('contact-desc_text', array(

    'default' => _x('Contact us!', 'The Confident Learner'),
   'type' => 'theme_mod'
));

 // contact Descriptor Text Control

 $wp_customize->add_control('contact-desc_text', array(

   'label' => __('Contact descriptor', 'The Confident Learner'),
  'section' => 'boxes',
  'priority' => 140
));



}

add_action( 'customize_register', 'register_customization' );



?>