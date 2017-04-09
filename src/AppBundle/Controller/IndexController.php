<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;


class IndexController extends FOSRestController
{

    /**
     * Just an index so the root has something to show....
     *
     * @Get("/")
     */
    public function indexAction()
    {
        return array('message' => "All is good :) Maybe visit /docs");
    }

}