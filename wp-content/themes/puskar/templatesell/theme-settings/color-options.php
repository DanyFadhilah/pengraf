<?php 
/* Primary Color Section Inside Core Color Option */
// $wp_customize->add_setting( 'puskar_options[puskar_primary_color]',
//     array(
//         'default'           => $default['puskar_primary_color'],
//         'sanitize_callback' => 'sanitize_hex_color',
//     )
// );
// $wp_customize->add_control(
//     new WP_Customize_Color_Control(                 
//         $wp_customize,
//         'puskar_options[puskar_primary_color]',
//         array(
//             'label'       => esc_html__( 'Primary Color', 'puskar' ),
//             'description' => esc_html__( 'Change your whole site color from here. More are available in premium version.', 'puskar' ),
//             'section'     => 'colors',  
//         )
//     )
// );

/* Slider color options */
$wp_customize->add_setting( 'puskar_options[puskar_slider_text_color]',
    array(
        'default'           => $default['puskar_slider_text_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(                 
        $wp_customize,
        'puskar_options[puskar_slider_text_color]',
        array(
            'label'       => esc_html__( 'Slider Text Color', 'puskar' ),
            'description' => esc_html__( 'Change the slider text color from here.', 'puskar' ),
            'section'     => 'puskar_slider_section', 
            'priority'  => 20, 
        )
    )
);


