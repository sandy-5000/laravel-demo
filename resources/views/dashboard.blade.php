<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-100 dark:text-gray-100">
                    {{ __("You're logged in! That all nothing special.") }}
                </div>
            </div>
        </div>
        <div class="pt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 flex justify-center">
                    <x-logo-big></x-logo-big>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
