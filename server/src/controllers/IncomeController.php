<?php
namespace App\Controllers;
use App\Models\Income;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest as Request;

class IncomeController {

    public function getAll(Request $request, Response $response) {
        echo 'ttt';
        // $incomes = Income::all();
        // $response->getBody()->write(json_encode($incomes));
        // return $response->withHeader('Content-Type', 'application/json');
    }
}
