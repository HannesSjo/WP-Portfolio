<?php
  function wpb_customize_register($wp_customize){
    //showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'portfolio'),
      'description' => sprintf(__('Options for showcase','wpbootstrap')),
      'priority'    =>  130
    ));

    $wp_customize->add_setting('showcase_image',array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'portfolio'),
      'section' => 'showcase',
      'settings'=> 'showcase_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('showcase_heading',array(
      'default'   => _x('Custom Bootstrap WordPress Theme', 'portfolio'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'portfolio'),
      'section' => 'showcase',
      'priority'  => 2
    ));


    $wp_customize->add_setting('showcase_text',array(
      'default'   => _x('En till WordPress-webbplats', 'portfolio'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'portfolio'),
      'section' => 'showcase',
      'priority'  => 3
    ));
  }

  add_action('customize_register', 'wpb_customize_register');
