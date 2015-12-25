<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/in')) {
            // train_core_homepage
            if ($pathinfo === '/index') {
                return array (  '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'train_core_homepage',);
            }

            // train_core_inscription
            if ($pathinfo === '/inscription') {
                return array (  '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::inscriptionAction',  '_route' => 'train_core_inscription',);
            }

        }

        // train_core_adminpanel
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::adminAction',  '_route' => 'train_core_adminpanel',);
        }

        // train_core_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::searchAction',  '_route' => 'train_core_search',);
        }

        if (0 === strpos($pathinfo, '/admin_')) {
            // train_core_admin_view
            if ($pathinfo === '/admin_view') {
                return array (  '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::admin_viewAction',  '_route' => 'train_core_admin_view',);
            }

            // train_core_admin_create
            if ($pathinfo === '/admin_create') {
                return array (  '_controller' => 'Train\\CoreBundle\\Controller\\DefaultController::admin_createAction',  '_route' => 'train_core_admin_create',);
            }

        }

        // ﻿bde_showcase_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::indexAction',  '_route' => '﻿bde_showcase_homepage',);
        }

        // bde_showcase_associations
        if ($pathinfo === '/associations') {
            return array (  '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::associationsAction',  '_route' => 'bde_showcase_associations',);
        }

        // bde_showcase_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bde_showcase_home',);
        }

        // bde_showcase_contact
        if ($pathinfo === '/contacts') {
            return array (  '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::contactAction',  '_route' => 'bde_showcase_contact',);
        }

        // bde_showcase_equipe
        if ($pathinfo === '/equipe-bde') {
            return array (  '_controller' => 'BDE\\ShowcaseBundle\\Controller\\DefaultController::equipeAction',  '_route' => 'bde_showcase_equipe',);
        }

        // bde_event_homepage
        if (0 === strpos($pathinfo, '/Events') && preg_match('#^/Events(?:\\.(?P<format>html|xml))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bde_event_homepage')), array (  '_controller' => 'BDE\\EventBundle\\Controller\\BoardController::indexAction',  'format' => 'html',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Train\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
