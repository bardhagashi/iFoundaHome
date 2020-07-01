<?php
    if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5ef1bebf2dc7d',
        'title' => 'Modal Fields',
        'fields' => array(
            array(
                'key' => 'field_5ef1bec238932',
                'label' => 'Quote',
                'name' => 'quote',
                'type' => 'text',
                'instructions' => 'Write a quote',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ef1bed438933',
                'label' => 'Quote Author',
                'name' => 'quote_author',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '20',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'discussion',
            3 => 'comments',
            4 => 'revisions',
            5 => 'slug',
            6 => 'author',
            7 => 'format',
            8 => 'page_attributes',
            9 => 'featured_image',
            10 => 'categories',
            11 => 'tags',
            12 => 'send-trackbacks',
        ),
        'active' => true,
        'description' => '',
    ));
    
    endif;
?>