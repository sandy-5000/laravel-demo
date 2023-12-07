<x-compiler-layout>
    <div class="relative">
        <x-compiler.modal :class="__('hidden')"></x-compiler.modal>
        <div class="editor w-full">
            <div class="py-4 px-3 flex justify-end md:justify-start">
                <x-secondary-button onclick="openModal()">
                    <span class="select-btn">Java</span>
                </x-secondary-button>
            </div>
            <div class="w-full h-screen px-3">
                <div style="height: calc(100% - 60px);">
                    <iframe title="compiler" id="oc-editor" class="h-full w-full rounded-lg"
                        src="https://onecompiler.com/embed?hideTitle=true&codeChangeEvent=true&listenToEvents=true&hideNew=true&hideLanguageSelection=true"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-compiler-layout>
 @vite(['resources/js/compiler/editor.js'])
