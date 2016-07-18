<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    /** @var Request $request */
    protected $request;
    
    /** @var User $user */
    protected $user;

    public function preExecute($request){
        $this->request = $request;
        $this->user = $this->getUser();
    }

    public function indexAction()
    {
        $gravatarHash = 00000000000000000000000000000000;
        if(!empty($this->user)){
            $gravatarHash = md5($this->user->getEmailCanonical());
        }

        return $this->render('default/index.html.twig', [
            'gravatarHash' => $gravatarHash
        ]);
    }
}
