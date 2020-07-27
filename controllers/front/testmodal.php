<?php
/**
 * <ModuleName> => TTmodule
 * <FileName> => testmodal.php
 * Format expected: <ModuleName><FileName>ModuleFrontController
 */
class <TTmoduleTestModalModuleFrontController extends ModuleFrontController
{
    public function  initContent() {
        parent::initContent();
        $this->contex->smarty->assign(array());
        $this->setTemplate('module:ttmodule/views/templates/front/testmodal.tpl');
}
}
