<?php
class AdminTestimonialsController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'testimonials';
        $this->className = 'PostTestimonials';
        $this->actions = array('delete');

        $this->fields_list = array(
            'testimonials' => array(
                'title' => $this->l('Témoignages'),
            ),
            'author' => array(
                'title' => $this->l('Auteur'),
            ),
        );

        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Témoignages'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Témoignage :'),
                    'name' => 'testimonials'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Auteur :'),
                    'name' => 'author'
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
				'class' => 'button'
            )
        );
        parent::__construct();
    }
}
