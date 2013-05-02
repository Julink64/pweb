<?php
namespace Pweb\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

 
class UserController extends Controller
{
    public function espaceclientAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'espace client');
    }
    return $this->render('PwebUserBundle:Main:espaceclient.html.twig');
  }
  
    public function panierAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'panier');
    }
    return $this->render('PwebUserBundle:Main:panier.html.twig');
  }

}