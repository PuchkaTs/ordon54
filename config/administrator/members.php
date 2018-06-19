<?php
/**
 * User model config
 */
return array(
    'title' => 'Гишүүд',
    'single' => 'Гишүүн',
    'model' => 'App\Member',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'firstName',
        'lastName',
        'position',
        'photo' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/members/thumbs/(:value)" height="100" />',
        ),
    ),
    /**
     * The filter set
     */
    'form_width' => 500,
    'filters' => array(
        'firstName' => array(
            'title' => 'Нэр',
            'type'  => 'text',
        ),       
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'firstName' => array(
            'title' => 'Нэр',
            'type' => 'text',
        ),
        'lastName' => array(
            'title' => 'Овог',
            'type' => 'text',
        ),        
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),         
        'body' => array(
            'title' => 'Тухай',
            'type' => 'wysiwyg',
        ),       
        'photo' => array(
            'title' => 'Image 200x200',
            'type' => 'image',
            'location' => public_path() . '/assets/members/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(100, 100, 'crop', public_path() . '/assets/members/thumbs/', 100),
                array(300, 300, 'crop', public_path() . '/assets/members/', 100),

            )
        )        
    ),
);