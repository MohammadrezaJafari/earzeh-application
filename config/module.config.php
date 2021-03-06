<?php
namespace Application;
return array(

    'doctrine'=>array(
        'driver' => array(
            __NAMESPACE__.'_driver' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/'.__NAMESPACE__.'/Entity')
            ),

            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )),
        'authentication' => array(
            'orm_default' => array(
                'object_manager' => 'Doctrine\ORM\EntityManager',
                'identity_class' => 'Application\Entity\User',
                'identity_property' => 'username',
                'credential_property' => 'password',
            )
        )
    ),
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/dashboard[/:controller[/:action[/:id]]]',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'dashboard',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
//            'application' => array(
//                'type'    => 'Literal',
//                'options' => array(
//                    'route'    => '/application',
//                    'defaults' => array(
//                        '__NAMESPACE__' => 'Application\Controller',
//                        'controller'    => 'Index',
//                        'action'        => 'index',
//                    ),
//                ),
//                'may_terminate' => true,
//                'child_routes' => array(
//                    'default' => array(
//                        'type'    => 'Segment',
//                        'options' => array(
//                            'route'    => '/[:controller[/:action]]',
//                            'constraints' => array(
//                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
//                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
//                            ),
//                            'defaults' => array(
//                            ),
//                        ),
//                    ),
//                ),
//            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        'factories' => array(
            'Navigation' => 'Ellie\Service\Navigation\ServiceFactory',
            'Ellie\Service\Acl'=> 'Ellie\Service\Acl\ServiceFactory',
            'Ellie\Service\Authentication' => 'Ellie\Service\Authentication\ServiceFactory',
        )
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/master'           => __DIR__ . '/../view/layout/master.phtml',
            //'layout/master'  => __DIR__ . ''
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
//            'treeSelect' =>__DIR__ . '../view/error/index.phtml',
//            // __DIR__.'/../../../vendor/Ellie/library/Ellie/UI/view/ui/form/element/partial/tree-select-partial.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
            __DIR__ . '/../../../vendor/Ellie/library/Ellie/UI/view'

        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    // Placeholder for console routes
    'navigation_manager' => [
//        "home"=>array(
//            "label" => "Dashboard",
//            'route' => 'home',
//            'inmenu'=>true,
//            'icon'=>"fa fa-home",
//            'params' => array(
//                'language'=>"fa",
//                'icon'=>"fa fa-home"
//            ),
//            'pages' => array(
//                array(
//                    'label' => 'Child #1',
//                    'route' => 'service',
//                    'params'=>array(
//                        'lang'=>'en',
//                        'controller'=>'management',
//                        'action'=>'edit',
//                        'id'=>'20'
//                    )
//                ),
//            ),
//        ),
    ],
);
