<?php
/**
 * User model config
 */
return array(
    'title' => 'Доор байрлах дэд цэс',
    'single' => 'Доор байрлах дэд цэс',
    'model' => 'App\Doodmenusub',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'doodmenu' => array(
            'title' => 'Дээд цэс',
            'relationship' => 'doodmenu',
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
        'doodmenu' => array(
            'type' => 'relationship',
            'title' => 'Харгалзах дээд цэс',
            'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
        ),   
    ),
);