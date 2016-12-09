<?php
/**
 * Created by PhpStorm.
 * User: Intern
 * Date: 12/9/2016
 * Time: 1:57 PM
 */
namespace ExtendBundle\Action\Home;

use CoreBundle\CoreFrontController;
use Symfony\Component\HttpFoundation\Request;

class HomeAction{
    public static function GET(CoreFrontController $_this ,Request $request){
        $data = array();

        return $_this->render(
          '@front/home/home_page.html.twig',
            array(
                'data' => $data
            )
        );
    }
}