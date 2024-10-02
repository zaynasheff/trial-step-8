<?php

namespace App\Livewire;


use Spatie\LivewireWizard\Components\StepComponent;

class SecondStep extends StepComponent
{

    public function stepInfo(): array
    {
        return [
            'label' => 'Второй шаг',
        ];
    }


    public function render()
    {
        return view('livewire.wizard.steps.second-step');
    }
}
