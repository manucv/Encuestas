<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Portal\Controller\Index' => 'Portal\Controller\IndexController',
            'Portal\Controller\Aseguradora' => 'Portal\Controller\AseguradoraController',
            'Portal\Controller\Cliente' => 'Portal\Controller\ClienteController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'portal' => array(
                'type'    => 'Segment',
                'options' => array(
                    // Change this to something specific to your module
                    'route' => '/portal[/:controller][/:action][/:id]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]*',
                    ),
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Portal\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action[/:id]]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '[0-9]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Portal' => __DIR__ . '/../view',
        ),
    ),
);
