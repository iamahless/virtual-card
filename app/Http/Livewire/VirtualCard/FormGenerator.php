<?php

namespace App\Http\Livewire\VirtualCard;

use App\Models\VirtualCard;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FormGenerator extends Component
{
    public string $name;

    public string $linkedin_url;

    public string $github_url;

    public string $phone;

    protected array $rules = [
        'name' => 'required|min:2',
        'linkedin_url' => 'required|url',
        'github_url' => 'required|url',
        'phone' => 'required|min:7',
    ];

    public function render(): View
    {
        return view('livewire.virtual-card.form-generator');
    }

    public function submit()
    {
        $this->validate();

        $virtualCard = VirtualCard::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'linkedin_url' => $this->linkedin_url,
            'github_url' => $this->github_url,
        ]);

        return redirect()->route('qrcode', [$virtualCard->slug]);
    }
}
