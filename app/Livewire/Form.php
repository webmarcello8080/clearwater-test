<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Livewire\Component;

class Form extends Component
{
    public string $name;
    public string $startDate;
    public string $endDate;
    public string $type;
    public array $points;

    public function mount(string $type, array $points){
        $this->type = $type;
        $this->points = $points;
    }

    public function rules() 
    {
        return [
            'name' => 'required|min:3|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
        ];
    }

    public function save(): void
    {
        // validate form and merge it with the area info
        $validated = $this->validate();
        $validated['type'] = $this->type;
        $validated['points'] = $this->points;

        // store are info in file as JSON
        $filePath = 'areas/' . $validated['name'] . '-' . date('Ymd-his') . '.text';
        Storage::put($filePath, json_encode($validated));

        // give control back to map
        $this->dispatch('hide-form', 'Area "' . $validated['name'] . '" created!');
    }

    public function render() :View
    {
        return view('livewire.form');
    }


}
