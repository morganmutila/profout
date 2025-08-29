@if (session()->has('status'))
    <div class="alert alert-success d-flex align-items-center gap-2 border-0" role="alert">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>
        <div>
            {{ session('status') }}

        </div>
    </div>
@endif
<form wire:submit.prevent="submitForm" class="php-email-form {{ $errors->any() ? 'is-invalid' : '' }}"
    wire:loading.class="opacity-75">
    <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" wire:model="fullname"
                class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" id="name"
                placeholder="Your Name">
            @error('fullname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" wire:model="email"
                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email"
                placeholder="Your Email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="text" wire:model="subject"
            class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" id="subject" placeholder="Subject">
        @error('subject')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mt-3">
        <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" wire:model="message" rows="5"
            placeholder="Write your message here"></textarea>
        @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-submit">
        <button type="submit" wire:loading.class="opacity-75" wire:loading.attr="disabled">
            <span wire:loading.class="d-none">Send Message</span>
            <span wire:loading>Sending...</span>
        </button>
    </div>
</form>
