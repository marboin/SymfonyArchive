<?php

namespace Alz\ArchiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlzArchiveBundle:Default:index.html.twig');
    }
    
    public function firstTestAction($id)
    {
          return $this->render('AlzArchiveBundle:Default:first.html.twig', array('id' => $id));
    }
    
    public function secondTestAction()
    {
          return $this->render('AlzArchiveBundle:Default:second.html.twig');
    }
}
