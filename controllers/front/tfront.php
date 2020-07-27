<?php
/**
 * <ModuleName> => ttmodule
 * <FileName> => tfront.php
 * Format expected: <ModuleName><FileName>ModuleFrontController
 */
class ttmoduleTfrontModuleFrontController extends ModuleFrontController
{

    public function initContent() {
        parent::initContent();
        /*$this->contex->smarty->assign(array());*/
        $this->setTemplate('module:ttmodule/views/templates/front/tfront.tpl');
    }
}
