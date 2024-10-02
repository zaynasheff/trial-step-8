<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class FirstStep extends StepComponent
{

    public $role;

    public function stepInfo(): array
    {
        return [
            'label' => 'Next',
        ];
    }

    public array $rules = [
        'role'=> ['required'],
    ];


    public function render()
    {
        return view('livewire.wizard.steps.first-step');
    }

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }
}
