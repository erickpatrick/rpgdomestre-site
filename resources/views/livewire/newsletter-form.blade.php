<?php

use App\Models\Newsletter;
use function Livewire\Volt\{state, form, rules};

rules(['email' => 'required|email:filter|unique:newsletters'])
    ->messages([
        'email.required' => 'Por favor, use um email válido',
        'email.email' => 'Por favor, use um email válido',
        'email.unique' => 'Email já cadastrado',
    ]);

$create = function () {
    $validated = $this->validate();
    Newsletter::create($validated);
    session()->flash('status', true);
    $this->reset();
};

state(['email' => '']);

?>

<div class="py-16">
    <div class="bg-gray-700 py-16 rounded-lg">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8">
            <div class="max-w-xl text-3xl font-bold tracking-tight text-white sm:text-4xl lg:col-span-7">
                <h2 class="inline sm:block lg:inline xl:block">Quer mais sobre RPG Solo?</h2>
                <p class="inline sm:block lg:inline xl:block">Assine a newsletter.</p>
            </div>
            @if (session('status'))
            <p class="w-full max-w-md lg:col-span-5 lg:pt-2 text-white text-2xl font-semibold">Por favor, verifique seu email e confirme seu cadastro. Muito obrigado!</p>
            @else
            <form class="w-full max-w-md lg:col-span-5 lg:pt-2" wire:submit="create">
                <div class="flex gap-x-4">
                    <label for="email-address" class="sr-only">E-mail</label>
                    <input id="email-address" name="email" autocomplete="email" wire:model.blur="email"
                        class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6"
                        placeholder="Digite seu email">
                    <button type="submit"
                        class="flex-none rounded-md bg-gray-300 px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-500">Increva-se
                    </button>
                </div>
                @error('email')
                <span class="inline-block py-2 text-sm leading-6 text-gray-50 italic">{{ $message }}</span>
                @enderror
                <p class="mt-4 text-sm leading-6 text-gray-50">Eu me importo com seus dados. Leia a <a
                        href="/transparencia/politica-de-privacidade" class="font-semibold text-white hover:underline decoration-2 underline-offset-2 decoration-gray-400" wire:navigate>política de privacidade</a>.
                </p>
            </form>
            @endif
        </div>
    </div>
</div>