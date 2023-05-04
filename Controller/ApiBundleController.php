<?php

namespace Test\ApiBundle\Controller;
use Test\ApiBundle\Service\HelloService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiBundleController extends AbstractController
{
    /**
     * @Route("/hello", name="api-hello")
     */
    public function index(HelloService $helloService): Response
    {
        $list = $helloService->sayHello();
        $json = json_encode($list, JSON_UNESCAPED_SLASHES);
        return new Response($json);
    }

}
