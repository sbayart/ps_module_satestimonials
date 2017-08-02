<?php
class satestimonialsdetailtestimonialModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('detailtestimonial.tpl');
        $testimonial = $this->getTestimonial(Tools::getValue('id'));
        $this->context->smarty->assign('testimonial', $testimonial);
    }

    public function getTestimonial(int $id)
    {
        $dbquery = new DbQuery();
        $dbquery->select('*');
        $dbquery->from('testimonials');
        $dbquery->where('id_testimonials = '.$id);

        return Db::getInstance()->executeS($dbquery);
    }
}
