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

    public function onDispatch(\Zend\Mvc\MvcEvent $e)
    {
        $layout = $this->layout();
        $layout->setTemplate('layout/master');
        $auth = $e->getApplication()->getServiceManager()->get('Ellie\Service\Authentication');
        if(!$auth->hasIdentity() && $this->params('action') != 'login')
        {
            return $this->redirect()->toRoute("user",array("controller"=>"authentication","action"=>"login"));
        }

        if($auth->hasIdentity())
        {
            $user = $auth->getIdentity();
            $this->layout()->username = $user->getUsername();
            $this->base = $this->getRequest()->getBasePath();
            $layout->setVariables(['menu' => $this->getServiceLocator()->get('Config')['menu']]);
        }

        return parent::onDispatch($e);
    }
}