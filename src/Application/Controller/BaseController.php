<?php
/**
 * Created by PhpStorm.
 * User: mreza
 * Date: 10/8/15
 * Time: 2:25 PM
 */

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;

class BaseController extends AbstractActionController{

    protected $translator;
    protected $lang;
    public function onDispatch(\Zend\Mvc\MvcEvent $e)
    {
        $layout = $this->layout();
        $layout->setTemplate('layout/master');
        $this->lang = $this->params('lang');
        $this->translator = $e->getApplication()->getServiceManager()->get('translator');

        if($this->lang == 'en'){
            $this->translator->setLocale("en_US");
            $layout->setVariables(['lang' => 'en']);
        }
        else{
            $this->translator->setLocale("fa_IR");
            $layout->setVariables(['lang' => 'fa']);
        }


        $auth = $e->getApplication()->getServiceManager()->get('Ellie\Service\Authentication');
        if(!$auth->hasIdentity() && $this->params('action') != 'login' && $this->params('action') != 'register')
        {
            return $this->redirect()->toRoute("user",array("controller"=>"authentication","action"=>"login"));
        }
        if($auth->hasIdentity())
        {
            $user = $auth->getIdentity();
            $this->layout()->username = $user->getUsername();
            $this->base = $this->getRequest()->getBasePath();
        }

        return parent::onDispatch($e);
    }
}