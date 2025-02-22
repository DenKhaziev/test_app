<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Order;
use App\Models\Sale;
use App\Models\Stock;
use App\Services\GetJSON;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        return view('welcome');
    }
    public function sales() {
        $data = GetJSON::getTable('sales', '2025-01-11', '2025-01-12');
        Sale::insert($data);

    }
     public function orders() {
       $data = GetJSON::getTable('orders', '2025-01-11', '2025-01-12');
       Order::insert($data);
    }

    public function stocks() {
        $data = GetJSON::getTable('stocks', date('Y-m-d'));
        Stock::insert($data);
    }

    public function incomes() {
        $data = GetJSON::getTable('incomes', '2025-01-11', '2025-01-12');
        Income::insert($data);
    }
}
