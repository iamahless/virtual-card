<?php

namespace Tests\Feature;

use App\Models\VirtualCard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileVirtalCardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_renders_qrcode_component()
    {
        $virtualCard = VirtualCard::factory()->create();

        Livewire::test('virtual-card.qrcode', ['slug' => $virtualCard->slug])
            ->assertSee($virtualCard->name)
            ->assertSee($virtualCard->qr_code_url);
    }

    /** @test */
    public function it_returns_404_when_virtual_card_not_found()
    {
        Livewire::test('virtual-card.qrcode', ['slug' => 'non-existent-slug'])
            ->assertStatus(404)
            ->assertSeeText('Sorry, we couldn’t find the virtual card you’re looking for');
    }

    /** @test */
    public function it_renders_profile_qrcode_component()
    {
        $virtualCard = VirtualCard::factory()->create();

        Livewire::test('virtual-card.qrcode', ['slug' => $virtualCard->slug])
            ->assertSee($virtualCard->name)
            ->assertSee($virtualCard->qr_code_url);
    }

    /** @test */
    public function it_returns_404_when_profile_virtual_card_not_found()
    {
        Livewire::test('virtual-card.qrcode', ['slug' => 'non-existent-slug'])
            ->assertStatus(404)
            ->assertSeeText('Sorry, we couldn’t find the virtual card you’re looking for');
    }
}
