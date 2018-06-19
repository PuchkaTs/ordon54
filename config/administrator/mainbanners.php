<?php
/**
 * User model config
 */
return array(
    'title' => 'Банер',
    'single' => 'Банер',
    'model' => 'App\Mainbanner',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'description',
        'position',
        'photo' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/banners/thumbs/(:value)" height="100" />',
        ),
    ),
    /**
     * The filter set
     */
    'form_width' => 500,
    'filters' => array(
        'title' => array(
            'title' => 'Нэр',
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
        'description' => array(
            'title' => 'Тайлбар',
            'type' => 'text',
        ),        
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),        
        'photo' => array(
            'title' => 'Image 1200x400',
            'type' => 'image',
            'location' => public_path() . '/assets/banners/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(300, 100, 'crop', public_path() . '/assets/banners/thumbs/', 100),
                array(1200, 400, 'crop', public_path() . '/assets/banners/', 100),

            )
        )        
    ),
);