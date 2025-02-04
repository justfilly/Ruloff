<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class OrderExportController extends Controller
{
    public function export()
    {
        return Excel::download(new OrdersExport, 'Заказы.xlsx');
    }
}