<!-- Scripts -->
@vite(['resources/js/compiler/editor.js'])
@php
$languages = [
    'cpp' => 'C++',
    'java' => 'Java',
    'python' => 'Python',
    'rust' => 'Rust'
];
@endphp

<x-compiler-layout>
    <x-compiler.modal :languages="$languages"></x-compiler.modal>
    <h1 class="mt-5 text-slate-100 text-center text-xl">Editor</h1>
</x-compiler-layout>
