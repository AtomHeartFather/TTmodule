<?php
/**
 * <ModuleName> => TTmodule
 * <FileName> => tfront.php
 * Format expected: <ModuleName><FileName>ModuleFrontController
 */
class TTmoduleTfrontModuleFrontController extends ModuleFrontController
{

    public function __construct() {
        parent::__construct();
    }

    public function init() {
        parent::init();
    }

    public function initContent() {
        parent::initContent();
        /*$this->contex->smarty->assign(array());*/
        $this->setTemplate('module:TTmodule/views/templates/front/tfront.tpl');
    }
}
