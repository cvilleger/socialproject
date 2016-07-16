<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /** @var Request $request */
    protected $request;

    public function preExecute($request){
        $this->request = $request;
    }

    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
