<?php

namespace Tests\Feature;

use App\Http\Livewire\VirtualCard\FormGenerator;
use App\Models\VirtualCard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Tests\TestCase;

class VirtualCardRequestTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test that the FormGenerator Livewire component can submit a valid form request.
     *
     * @test
     */
    public function can_generate_qr_code_with_right_data(): void
    {
        $requestData = [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'profile_url' => $this->faker->url,
        ];

        $slug = Str::slug($requestData['name']);

        Livewire::test(FormGenerator::class)
            ->set('name', $requestData['name'])
            ->set('phone', $requestData['phone'])
            ->set('linkedin_url', $requestData['profile_url'])
            ->set('github_url', $requestData['profile_url'])
            ->call('submit')
            ->assertRedirect("/qrcode/{$slug}");

        $this->assertTrue(VirtualCard::whereName($requestData['name'])->exists());
    }

    /**
     * Test that the FormGenerator Livewire component cannot submit an invalid form request.
     *
     * @test
     */
    public function cannot_generate_qr_code(): void
    {
        $requestData = [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'profile_url' => '',
        ];

        Livewire::test(FormGenerator::class)
            ->set('name', $requestData['name'])
            ->set('phone', $requestData['phone'])
            ->set('linkedin_url', $requestData['profile_url'])
            ->set('github_url', $requestData['profile_url'])
            ->call('submit')
            ->assertHasErrors([
                'linkedin_url' => 'required',
                'github_url' => 'required',
            ]);

        $this->assertFalse(VirtualCard::whereName($requestData['name'])->exists());
    }
}
