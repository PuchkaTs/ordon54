<?php
/**
 * User model config
 */
return array(
    'title' => 'Тэмцээн уралдаан',
    'single' => 'Тэмцээн уралдаан',
    'model' => 'App\Temceen',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'photo' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/content/thumbs/(:value)" height="100" />',
        ),
    ),
    /**
     * The filter set
     */
    'form_width' => 500,

    'filters' => array(
        'title' => array(
            'title' => 'Гарчиг',
            'type'  => 'text',
        ),       
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Гарчиг',
            'type' => 'text',
        ),      
        'deadline' => array(
            'type' => 'date',
            'title' => 'Огноо',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ),
        'body' => array(
            'title' => 'Тухай',
            'type' => 'wysiwyg',
        ),       
        'photo' => array(
            'title' => 'Image 900x400',
            'type' => 'image',
            'location' => public_path() . '/assets/content/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(450, 200, 'crop', public_path() . '/assets/content/thumbs/', 100),
                array(900, 400, 'crop', public_path() . '/assets/content/', 100),

            )
        ),    
    ),
);