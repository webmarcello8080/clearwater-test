<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\On;

class Map extends Component
{
    public bool $formStatus = false;
    public string $type;
    public array $points;
    public string|null $message;

    #[On('open-form')]
    // init area variable and display the area form
    public function openForm($type, $points): void{
        $this->type = $type;
        $this->points = $points;

        $this->showForm();
    }

    #[On('hide-form')]
    // display or hide form with related message
    public function hideForm(string|null $message): void
    {   
        $this->message = $message;
        $this->formStatus = false;
    }

    #[On('show-form')]
    // display or hide form with related message
    public function showForm(): void
    {   
        $this->message = null;
        $this->formStatus = true;
    }

    public function render(): View
    {
        return view('livewire.map');
    }
}
