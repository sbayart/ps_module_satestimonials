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
            || !$this->installDb()
            || !$this->installTab()
        ) {
            return false;
        }
        return true;
    }

    public function installDB()
    {
        return Db::getInstance()->execute(
            'CREATE TABLE IF NOT EXISTS '._DB_PREFIX_.'testimonials (
    	        `id_testimonials` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    	        `testimonials` TEXT NOT NULL,
                `author` VARCHAR(200) NOT NULL)'
        );
    }

    public function installTab()
    {
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'AdminTestimonials';
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = 'Mon Module de Temoignages';
        }
        $tab->id_parent = 0;
        $tab->module = $this->name;
        return $tab->add();
    }

    public function uninstall()
    {
        if (!parent::uninstall()
            || !$this->uninstallDB()
            || !$this->uninstallTab()
        ) {
            return false;
        }
        return true;
    }

    public function uninstallDB()
    {
        return Db::getInstance()->execute('DROP TABLE '._DB_PREFIX_.'testimonials');
    }

    public function uninstallTab()
    {
        $id_tab = (int)Tab::getIdFromClassName('AdminTestimonials');
        if ($id_tab) {
            $tab = new Tab($id_tab);
            return $tab->delete();
        } else {
            return false;
        }
    }
}
