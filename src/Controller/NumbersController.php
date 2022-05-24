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
     * @Route("/division", name="app_division_numbers", methods={"POST"})
     */
    public function division(Request $request): Response
    {
        $this->logger->info("NumbersController#divisionNumbers Request", ["request" => $request]);

        $firstValue = $request->request->get('first_value', null);
        $secondValue = $request->request->get('second_value', null);

        $result = $this->service->divideNumbers($firstValue, $secondValue);

        return new Response($result, Response::HTTP_OK);
    }
}
