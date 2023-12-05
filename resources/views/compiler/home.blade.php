<style>
    .hover-effect {
        transform: scale(1);
        transition: all 0.3s;
    }

    .hover-effect:hover {
        transform: scale(1.05);
    }

</style>

<x-compiler-layout>
    <div class="w-full">
        <div class="h-center">
            <div class="mt-10">
                <div class="h-center">
                    <div class="hover-effect relative w-[200px] h-[200px] cursor-none">
                        <x-logo-big class="absolute z-[0] left-0 right-0 h-full"></x-logo-big>
                        <x-logo-big class="absolute z-[1] hover:blur-md left-0 right-0 h-full"></x-logo-big>
                        <x-logo-big class="animate-pulse absolute z-[0] blur-xl left-0 right-0 h-full"></x-logo-big>
                    </div>
                </div>
                <div class="h-center">
                    <h1 class="text-center logo-text-bright uppercase font-semibold text-lg mx-20">Darkube Compiler</h1>
                </div>
            </div>
        </div>
        <div class="h-center">
            <div class="mt-12 mx-5 md:mx-16 lg:mx-32 xl:mx-80 bg-gray-800 text-slate-100 shadow px-5 md:px-10 lg:px-16 py-14 rounded-lg">
                <h5 class="text-center text-xl">Hello There!</h5>
                <p class="text-center text-sm font-normal pt-5">
                    Welcome to our online compiler <span class="logo-text-bright text-md font-semibold">Darkube complier</span>, your one-stop solution for seamless coding experiences.
                    Whether you're a seasoned developer or a curious learner, our platform empowers you to write, compile, and run code effortlessly, all within your browser.
                    Unlock the true potential of coding with our feature-rich online compiler and take your programming journey to new heights.
                </p>
            </div>
        </div>
        <div class="py-5">
            <div class="mt-12 mx-5 md:mx-16 lg:mx-32 xl:mx-80">
                <p class="text-center pb-4 font-light text-xl text-slate-100">To view in full screen go to Editor</p>
                <iframe class="rounded-lg w-full h-[550px] bg-gray-800" title="compiler" id="compiler" src="https://onecompiler.com/embed"></iframe>
            </div>
        </div>
    </div>
</x-compiler-layout>
