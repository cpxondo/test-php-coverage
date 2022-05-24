<?php

namespace App\Controller;

use App\Service\NumbersService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NumbersController extends AbstractController
{
    private $logger;
    private $service;

    public function __construct(LoggerInterface $logger, NumbersService $service)
    {
        $this->logger = $logger;
        $this->service = $service;   
    }
    
    /**
     * @Route("/addition", name="app_add_numbers", methods={"POST"})
     */
    public function addition(Request $request): Response
    {
        $this->logger->info("NumbersController#addNumbers Request", ["request" => $request]);

        $firstValue = $request->request->get('first_value', null);
        $secondValue = $request->request->get('second_value', null);

        $result = $this->service->addNumbers($firstValue, $secondValue);

        return new Response($result, Response::HTTP_OK);
    }

    /**
     * @Route("/substraction", name="app_substract_numbers", methods={"POST"})
     */
    public function substraction(Request $request): Response
    {
        $this->logger->info("NumbersController#substractNumbers Request", ["request" => $request]);

        $firstValue = $request->request->get('first_value', null);
        $secondValue = $request->request->get('second_value', null);

        $result = $this->service->addNumbers($firstValue, $secondValue);

        return new Response($result, Response::HTTP_OK);
    }
}
