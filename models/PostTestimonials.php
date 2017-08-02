<?php
class PostTestimonials extends ObjectModel
{
    public $id_testimonials;
    public $testimonials;
    public $author;
    public static $definition = array(
        'table' => 'testimonials',
        'primary' => 'id_testimonials',
        'fields' => array(
            'testimonials' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'author' => array('type' => self::TYPE_STRING, 'validate' => 'isString')
        ),
    );
}
