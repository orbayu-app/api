<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class HealthTest extends TestCase
{
    public function test_health_endpoint_returns_ok(): void
    {
        $response = $this->get('/healthz');

        $response->assertStatus(200);
        $response->assertJson(['status' => 'ok']);
    }
}
