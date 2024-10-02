<?php

namespace App\Livewire;


use Spatie\LivewireWizard\Components\WizardComponent;

class Wizard extends WizardComponent
{



    public function steps(): array
    {
        return [
            FirstStep::class,
            SecondStep::class
        ];
    }
}
