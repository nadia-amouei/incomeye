<?php
use App\Controllers\IncomeController;

$router->get('/', function() {
  echo "its working"; 
});

$router->get('/incomes', [IncomeController::class, 'getAll']);
