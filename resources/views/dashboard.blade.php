<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}                
                <div class="text-center">
                    <h3>Olá, <strong>{{ Auth::user()->name }}</strong>. Seja muito bem vindo(a) ao <strong>Lumus8x</strong></h3><br>
                    <h3>Escolha e clique em uma das opções de menu abaixo.</h3>                    
                </div>
                <br>
                <div class="text-center">
                    <h3>Links</h3>

                    {{-- @foreach ($plans as $plan)
                        <span>{{ $plan->name }}</span>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
