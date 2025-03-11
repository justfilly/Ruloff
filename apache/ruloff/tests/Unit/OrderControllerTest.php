<?php

namespace Tests\Feature;

use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreOrder()
    {
        $orderData = [
            'name' => 'John Doe',
            'phone' => '1234567890',
        ];

        $response = $this->post('/orders', $orderData);

        $response->assertRedirect('/');
        $this->assertDatabaseHas('orders', [
            'name' => 'John Doe',
            'phone' => '1234567890',
        ]);
    }

    public function testStoreOrderValidation()
    {
        $response = $this->post('/orders', [
            'name' => '',
            'phone' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'phone']);
    }
}
