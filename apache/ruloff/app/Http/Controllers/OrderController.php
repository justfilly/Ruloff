<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        try {
            Order::create($validated);
            return redirect('/')->with('toast_message', ['message' => 'Заявка отправлена', 'type' => 'success']);
        } catch (\Exception $e) {
            return redirect('/')->with('toast_message', ['message' => 'Ошибка. Попробуйте позже', 'type' => 'error']);
        }
    }
}
