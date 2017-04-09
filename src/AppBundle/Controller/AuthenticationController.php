<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Post;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;


class AuthenticationController extends FOSRestController
{

    /**
     * Login!
     *
     * @ApiDoc()
     * @Post("/api/v1/login")
     */
    public function loginAction()
    {
        // actual login is handle with Guard and FoodsharingAuthenticator
        return array('message' => 'You are logged in!');
    }

}