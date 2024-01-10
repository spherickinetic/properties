<?php

namespace Tests\Unit;

use Tests\TestCase;

class PropertyTest extends TestCase
{
    public function testPropertiesAreCreatedCorrectly(): void
    {
        $payload = [
            'name' => 'Lorem',
            'address' => 'Ipsum',
        ];

        $this->json('POST', '/api/property', $payload)
            ->assertStatus(201)
            ->assertJson(['name' => 'Lorem', 'address' => 'Ipsum']);
    }
}
