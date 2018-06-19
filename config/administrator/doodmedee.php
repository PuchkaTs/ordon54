<?php
/**
 * User model config
 */
return array(
    'title' => 'Доод пост',
    'single' => 'Доод пост',
    'model' => 'App\Doodmedee',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'members' => array(
            'title' => 'Багш нар',
            'relationship' => 'members',
            'select' => "GROUP_CONCAT((:table).firstName SEPARATOR ', ')",
        ),
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
        'members' => array(
            'type' => 'relationship',
            'title' => 'Дугуйлангийн багш нар',
            'name_field' => 'firstName', //what column or accessor on the other table you want to use to represent this object
        ),
        'show_on_home' => array(
            'type' => 'bool',
            'title' => 'Нүүр хуудсанд харуулах эсэх',
        ),
        'doodmenusub' => array(
            'type' => 'relationship',
            'title' => 'Харгалзах дэд цэс',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
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