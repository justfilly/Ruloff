<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $ip = $request->ip();
        $key = 'order_form:' . $ip;

        if (RateLimiter::tooManyAttempts($key, 3)) {
            return redirect('/')->with('toast_message', [
                'message' => 'Слишком много попыток. Подождите 2 минуты',
                'type' => 'error'
            ]);
        }

        RateLimiter::hit($key, 120);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        try {
            Order::create($validated);
            return redirect('/')->with('toast_message', [
                'message' => 'Заявка отправлена',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            return redirect('/')->with('toast_message', [
                'message' => 'Ошибка. Попробуйте позже',
                'type' => 'error'
            ]);
        }
    }
}
