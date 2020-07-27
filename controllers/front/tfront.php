<?php

class ttmoduleTfrontModuleFrontController extends ModuleFrontController
{

    public function initContent() {
        parent::initContent();
        $this->setTemplate('module:ttmodule/views/templates/front/tfront.tpl');
    }
}
