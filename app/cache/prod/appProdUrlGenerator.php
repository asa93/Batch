<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'train_core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'train_core_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'train_core_adminpanel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'train_core_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'train_core_admin_view' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::admin_viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'train_core_admin_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::admin_createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '﻿bde_showcase_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bde_showcase_associations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::associationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/associations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bde_showcase_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bde_showcase_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bde_showcase_equipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::equipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipe-bde',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bde_event_homepage' => array (  0 =>   array (    0 => 'format',  ),  1 =>   array (    '_controller' => 'BDE\\EventBundle\\Controller\\BoardController::indexAction',    'format' => 'html',  ),  2 =>   array (    'format' => 'html|xml',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|xml',      3 => 'format',    ),    1 =>     array (      0 => 'text',      1 => '/Events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Train\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
