<?php

namespace App\Http\Livewire\VirtualCard;

use App\Models\VirtualCard;
use Livewire\Component;

class Qrcode extends Component
{
    public VirtualCard $virtualCard;

    public function render()
    {
        return view('livewire.virtual-card.qrcode');
    }

    public function mount($slug)
    {
        $virtualCard = VirtualCard::where('slug', $slug)->first();

        if (! $virtualCard) {
            return abort(404, 'Sorry, we couldn’t find the virtual card you’re looking for');
        }

        $this->virtualCard = $virtualCard;
    }
}
