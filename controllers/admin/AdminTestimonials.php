<?php
class AdminTestimonialsController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'testimonials';
        $this->className = 'SaTestimonials';

        $this->fields_list = array(
            'testimonials' => array(
                'title' => $this->l('Témoignages'),
            ),
            'author' => array(
                'title' => $this->l('Auteur'),
            ),
        );
        parent::__construct();
    }
}
