<?php
/**
 * User model config
 */
return array(
    'title' => 'Асуулт хариулт',
    'single' => 'Асуулт хариулт',
    'model' => 'App\Faq',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'question',
    ),
    /**
     * The filter set
     */
    'form_width' => 500,

    'filters' => array(
        'question' => array(
            'title' => 'Асуулт',
            'type'  => 'text',
        ),       
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'question' => array(
            'title' => 'Асуулт',
            'type' => 'text',
        ),    
        'answer' => array(
            'title' => 'хариулт',
            'type' => 'wysiwyg',
        ),         
    ),
);