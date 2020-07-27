<?php

class TadminController extends ModuleAdminController
{

        public function initContent()
            {
                parent::initContent();
                echo "Админ контроллер";
            }
}