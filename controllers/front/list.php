<?php
class satestimonialslistModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $testimonialslist = $this->getTestimonials();
        $this->setTemplate('list.tpl');
        foreach ($testimonialslist as $testimonial) {
            $testimonial['link'] = $this->context->link->getModuleLink(
                'sastestimonials',
                'detailtestimonial',
                array('id'=>$testimonial['id_testimonials'])
            );
            $testimonials[] = $testimonial;
        }
        $this->context->smarty->assign('testimonials', $testimonials);
    }

    public function getTestimonials()
    {
        global $smarty;
        $testimonials = array();
        $dbquery = new DbQuery();
        $dbquery->select('*');
        $dbquery->from('testimonials');

        return Db::getInstance()->executeS($dbquery);
    }
}
