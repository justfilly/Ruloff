<?php

namespace Tests\Unit;

use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    public function testOrderCreation()
    {
        $orderData = [
            'name' => 'John Doe',
            'phone' => '1234567890',
        ];

        $order = Order::create($orderData);

        $this->assertDatabaseHas('orders', [
            'name' => 'John Doe',
            'phone' => '1234567890',
        ]);
    }

    public function testOrderHasFillableAttributes()
    {
        $order = new Order();
        $fillable = $order->getFillable();

        $this->assertContains('name', $fillable);
        $this->assertContains('phone', $fillable);
    }
}
