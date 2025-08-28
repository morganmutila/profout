<?php

namespace App\Livewire;

use App\Models\Slider as SliderModel;
use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        return view('livewire.slider', [
            'sliders' => SliderModel::where('is_active', true)
                ->orderBy('order', 'asc')
                ->get(),
        ]);
    }
}
