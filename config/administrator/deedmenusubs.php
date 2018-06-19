<?php
/**
 * User model config
 */
return array(
    'title' => 'Дээр байрлах дэд цэс',
    'single' => 'Дээр байрлах дэд цэс',
    'model' => 'App\Deedmenusub',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'deedmenu' => array(
            'title' => 'Дээд цэс',
            'relationship' => 'deedmenu',
            'select' => '(:table).title',
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
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),      
        'deedmenu' => array(
            'type' => 'relationship',
            'title' => 'Харгалзах дээд цэс',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),   
    ),
);