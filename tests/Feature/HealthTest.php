<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class HealthTest extends TestCase
{
    public function test_health_endpoint_returns_health_payload(): void
    {
        config(['app.commit_hash' => 'test_commit_hash']);

        $response = $this->get('/healthz');

        $response->assertStatus(200);
        $response->assertExactJson([
            'status' => 'ok',
            'commit_hash' => 'test_commit_hash',
        ]);
    }
}
