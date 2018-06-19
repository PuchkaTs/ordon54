<?php
/**
 * User model config
 */
return array(
    'title' => 'Хэрэглэгч',
    'single' => 'Хэрэглэгч',
    'model' => 'App\User',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'email',
    ),
    /**
     * The filter set
     */
    'filters' => array(
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Нэр',
            'type' => 'text',
        ),        
        'email' => array(
            'title' => 'И-мэйл',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Нууц үг',
            'type' => 'text',
        ),
        'role' => array(
            'type' => 'relationship',
            'title' => 'Хэрэглэгчийн эрх',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),        

    ),
   
);