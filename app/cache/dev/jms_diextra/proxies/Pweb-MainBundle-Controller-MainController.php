<?php

namespace EnhancedProxy_74f023c2aa65bf1c1af3bef06952468c9fa6e022\__CG__\Pweb\MainBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class MainController extends \Pweb\MainBundle\Controller\MainController
{
    private $__CGInterception__loader;

    public function supprimerAction($id)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'supprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function panierAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'panierAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function modifierImageAction($id_article)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'modifierImageAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id_article));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id_article), $interceptors);

        return $invocation->proceed();
    }

    public function modifierAction($id)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'modifierAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function espaceclientAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'espaceclientAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function ajouterAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'ajouterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}