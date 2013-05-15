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

    public function supprimercategoriesAction($id)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'supprimercategoriesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function supprimerAction(\Pweb\MainBundle\Entity\Produit $produit)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'supprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($produit));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($produit), $interceptors);

        return $invocation->proceed();
    }

    public function statutAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'statutAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function modifierImageAction($id_produit)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'modifierImageAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id_produit));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id_produit), $interceptors);

        return $invocation->proceed();
    }

    public function modifierAction($id)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'modifierAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function initialisetruncatetableAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'initialisetruncatetableAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function initialiseproduitsAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'initialiseproduitsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function initialiseclearAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'initialiseclearAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function initialisecategoriesAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'initialisecategoriesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function categoriesgererAction()
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'categoriesgererAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function ajoutercategoriesAction($id)
    {
        $ref = new \ReflectionMethod('Pweb\\MainBundle\\Controller\\MainController', 'ajoutercategoriesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

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