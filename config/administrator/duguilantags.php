<?php
/**
 * User model config
 Duguilangiin turul
 */
return array(
    'title' => 'Дугуйлангийн төрөл',
    'single' => 'Дугуйлангийн төрөл',
    'model' => 'App\Duguilantag',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'position',
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
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),        
    ),
);