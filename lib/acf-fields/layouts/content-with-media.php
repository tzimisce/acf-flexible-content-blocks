<?php

  /*--------------------------------------------------------------------------------------
    *
    * Layout: Content With Media
    *
    * @author Michael W. Delaney
    * @since 1.0
    *
    * A simple content block with optional media include (image or video) and optional Call to Action button
    *
    *-------------------------------------------------------------------------------------*/

$content_with_media = 			
    array (
        'key' => '57392236ab5e2',
        'name' => 'content_with_media',
        'label' => 'Content with Media',
        'display' => 'block',
        'sub_fields' => array (
            array (
                'key' => 'field_57392265f9c6c',
                'label' => 'Content',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_57392245f9c6a',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 50,
                    'class' => 'acf-title',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_57392259f9c6b',
                'label' => 'Navigation Title',
                'name' => 'navigation_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 50,
                    'class' => 'acf-title',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_57392274f9c6d',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
            ),
            array (
                'key' => 'field_5739227ef9c6e',
                'label' => 'Media',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_57392285f9c6f',
                'label' => 'Type of Media',
                'name' => 'type_of_media',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array (
                    'none' => 'None',
                    'image' => 'Image',
                    'video' => 'Video',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
            ),
            array (
                'key' => 'field_573922a4f9c70',
                'label' => 'Media Placeholder',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_57392285f9c6f',
                            'operator' => '==',
                            'value' => 'none',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'message' => 'No media will be displayed.',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array (
                'key' => 'field_573922bdf9c71',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_57392285f9c6f',
                            'operator' => '==',
                            'value' => 'image',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_573922d4f9c72',
                'label' => 'Video',
                'name' => 'video',
                'type' => 'oembed',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_57392285f9c6f',
                            'operator' => '==',
                            'value' => 'video',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'width' => '',
                'height' => '',
            ),
            array (
                'key' => 'field_5739cae32ed68',
                'label' => 'Background',
                'name' => 'background',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_5739caf52ed69',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'large',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_5739cb252ed6a',
                'label' => 'Background Color',
                'name' => 'background_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array (
                'key' => 'field_573922e8f9c73',
                'label' => '',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 1,
            ),
            array (
                'key' => 'field_573922faf9c74',
                'label' => 'Display Call to Action?',
                'name' => 'display_call_to_action',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 20,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
            ),
           array (
                'key' => 'field_57392389f9c78',
                'label' => 'Placeholder',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c74',
                            'operator' => '!=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 80,
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'No Call to Action will be displayed.',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array (
                'key' => 'field_5739230af9c75',
                'label' => 'Text',
                'name' => 'call_to_action_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c74',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 30,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_57392314f9c76',
                'label' => 'Link',
                'name' => 'call_to_action_link',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c74',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 30,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'post_type' => array (
                ),
                'taxonomy' => array (
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_57392349f9c77',
                'label' => 'Type',
                'name' => 'call_to_action_type',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c74',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 20,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'choices' => array (
                    'primary' => 'Primary',
                    'default' => 'Default',
                    'success' => 'Success',
                    'info' => 'Info',
                    'warning' => 'Warning',
                    'danger' => 'Danger',
                    'link' => 'Link Only',
                ),
                'default_value' => array (
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
                'disabled' => 0,
                'readonly' => 0,
            ),
        )
    );