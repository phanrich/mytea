<?php

namespace ExtendBundle\Controller;

use CoreBundle\CoreFrontController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends CoreFrontController
{
    /**
     * @Route("/home", name="home_page")
     */
    public function homeAction(Request $request)
    {
        return \ExtendBundle\Action\Home\HomeAction::GET($this ,$request);
    }

}
