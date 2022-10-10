<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartController extends AbstractController
{
    /**
     * @Route("/chart", name="app_chart")
     */
    public function index(ChartBuilderInterface $chartBuilder): Response
    {

        // Partie Connexion API

        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        $parameters = [
          'convert' => 'EUR'
        ];

        $headers = [
          'Accepts: application/json',
          'X-CMC_PRO_API_KEY: 37c42573-01ca-4b60-b8d8-5db4372ea513'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL



        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
          CURLOPT_URL => $request,            // set the request URL
          CURLOPT_HTTPHEADER => $headers,     // set the headers 
          CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));

        $response = json_decode(curl_exec($curl)); // Send the request, save the response
        // print_r(json_decode($response));
        // var_dump(json_decode($response));
        curl_close($curl); // Close request

        // Partie Chart.js

        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            'datasets' => [
                [
                    'label' => 'Suivi des investissements',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [0, 10, 5, 2, 20, 30, 45, 38, 42, 35, 89, 65],
                ],
            ],
        ]);
    
        $chart->setOptions([/* ... */]);

            return $this->render('chart/index.html.twig', [
                'chart' => $chart,
                'response' => $response
            ]);
    }
}
