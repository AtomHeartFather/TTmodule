<?php
// modules/your-module/Controller/Admin/TadminController.php

/*namespace TTmodule\Controller;

use Doctrine\Common\Cache\CacheProvider;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;*/

class TadminController extends ModuleAdminController
{
    /*private $cache;

    // you can use symfony DI to inject services
    public function __construct(CacheProvider $cache)
    {
        $this->cache = $cache;
    }*/

    public function tadminAction()
    {
        // you can also retrieve services directly from the container
        /*$cache = $this->container->get('doctrine.cache');*/
        return $this->render('@Modules/ttmodule/views/templates/admin/tadmin.html.twig');
    }

        public function initContent()
    {
        parent::initContent();
        /*$this->contex->smarty->assign(array());*/
//        $this->setTemplate('tadmin.tpl');
        /*$this->setTemplate('@Modules/ttmodule/views/templates/admin/tadmin.html.twig');*/
        echo "Админ контроллер";
    }
}