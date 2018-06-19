<?php
/**
 * User model config
 */
return array(
    'title' => 'Дээр байрлах цэс',
    'single' => 'Дээр байрлах цэс',
    'model' => 'App\Deedmenu',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
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