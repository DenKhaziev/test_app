<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Order;
use App\Models\Sale;
use App\Models\Stock;
use App\Services\CommercialService;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        return view('welcome');
    }
    public function sales() {
        $data = CommercialService::getAllData('sales', '2025-01-11', '2025-01-12');
        Sale::insert($data);

    }
     public function orders() {
       $data = CommercialService::getAllData('orders', '2025-01-11', '2025-01-12');
       Order::insert($data);
    }

    public function stocks() {
        $data = CommercialService::getAllData('stocks', date('Y-m-d'));
        Stock::insert($data);
    }

    public function incomes() {
        $data = CommercialService::getAllData('incomes', '2025-01-11', '2025-01-12');
        Income::insert($data);
    }
}
