<?php
class SaTestimonials extends module
{
    public function __construct()
    {
        $this->name = 'satestimonials';
        $this->version = '1.0.0';
        $this->author = 'Solene ANTOINE';
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Mon module de temoignages');
        $this->descritpion = $this->l('Un module de témoignages');
    }

    public function install()
    {
        if (!parent::install()
            || !$this->registerHook('displayHome')
        ) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()
    ) {
        return false;
    }
    return true;
    }
}
