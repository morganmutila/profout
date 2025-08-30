<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ClientEmail;
use Livewire\Attributes\Validate;

class ClientContactForm extends Component
{
    #[Validate('required|string|max:255')]
    public string $fullname = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|string|max:255')]
    public string $subject = '';

    #[Validate('required|string|max:5000')]
    public string $message = '';

    public function submitForm(): void
    {
        // Handle form submission logic here
        ClientEmail::create($this->validate());

        // Reset form fields after submission
        $this->reset();

        session()->flash('status', 'Message sent successfully.');

    }

    public function render()
    {
        return view('livewire.client-contact-form');
    }
}
