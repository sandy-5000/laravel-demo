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
            <div
                class="mt-12 mx-5 md:mx-16 lg:mx-32 xl:mx-40 2xl:mx-72 bg-gray-800 text-slate-100 shadow px-5 md:px-10 lg:px-16 xl:px-24 py-14 rounded-lg">
                <h5 class="text-center text-xl">Hello There!</h5>
                <p class="text-center text-sm font-normal pt-5">
                    Welcome to our online compiler <span class="logo-text-bright text-md font-semibold">Darkube
                        complier</span>, your one-stop solution for seamless coding experiences.
                    Whether you're a seasoned developer or a curious learner, our platform empowers you to write,
                    compile, and run code effortlessly, all within your browser.
                    Unlock the true potential of coding with our feature-rich online compiler and take your programming
                    journey to new heights.
                </p>
            </div>
        </div>
        <div class="py-5">
            <div class="mt-12 mx-5 md:mx-16 lg:mx-32 xl:mx-40 2xl:mx-72">
                <p class="text-center pb-4 font-light text-xl text-slate-100">To view in full screen go to Editor</p>
                <iframe class="rounded-lg w-full h-[550px] bg-gray-800" title="compiler" id="compiler"
                    src="https://onecompiler.com/embed"></iframe>
                <div class="flex justify-end my-3 px-3">
                    <span class="relative inline-flex">
                        <a href="/compiler/editor" class="box-grad">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 font-semibold leading-6 shadow rounded-sm text-white bg-gray-800 transition ease-in-out duration-150 cursor-pointer">
                                <x-bi-code-alt fill="#f1f5f9" class="text-md mr-2"></x-bi-code-alt>
                                <span class="font-[450] normal-case text-sm">Go To Editor</span>
                            </button>
                        </a>
                        <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-700 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-gray-700 opacity-90"></span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <div class="my-8 px-4 bg-gray-800 h-center">
            <div class="mx-5 md:mx-16 lg:mx-32 xl:mx-40 2xl:mx-72 lg:flex md:flex h-full">
                <div class="lg:w-1/2 md:w-1/2 w-full h-full py-20">
                    <div class="flex justify-between h-1/2">
                        <div class="lg:w-8/12 md:w-7/12 w-1/2 p-1 a-center">
                            <div class="text-slate-100">
                                <div class="flex mb-1">
                                    <div class="a-center">
                                        <h1 class="logo-text-bright font-semibold text-xl mb-[3px]">Save Time For You
                                        </h1>
                                    </div>
                                </div>
                                <p class="text-sm">You can just execute you code immediately without any delay. Because
                                    the faster it is, the better it is. Can execute how many times you want too.</p>
                            </div>
                        </div>
                        <div class="w-5"></div>
                        <div class="lg:w-4/12 md:w-5/12 w-1/2 p-1 a-center">
                            <img src="/images/coder_1.jpg" class="h-auto rounded-2xl" alt="image_1" />
                        </div>
                    </div>
                    <div class="flex flex-row-reverse justify-between h-1/2">
                        <div class="lg:w-8/12 md:w-7/12 w-1/2 p-1 py-2 a-center">
                            <div class="text-slate-100">
                                <div class="flex mb-1">
                                    <div class="a-center">
                                        <h1 class="logo-text-bright font-semibold text-xl mb-[3px]">Supports Many
                                            Languages</h1>
                                    </div>
                                </div>
                                <p class="text-sm">You can just execute your codes here in any Programming Language.
                                    Instead of using multiple platforms, Because it is convenent to have all in one
                                    place.</p>
                            </div>
                        </div>
                        <div class="w-5"></div>
                        <div class="lg:w-4/12 md:w-5/12 w-1/2 p-1 py-2 a-center">
                            <img src="/images/coder_2.jpg" class="h-auto rounded-2xl" alt="image_2" />
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full a-center lg:pl-20 md:pl-20 px-10 lg:py-20 md:py-20 pb-20 a-center">
                    <img src="/images/coder_3.png" class="w-full" alt="logo" />
                </div>
            </div>
        </div>
        <div class="py-28 a-center">
            <div>
                <div class="a-center mb-10">
                    <a class="box-grad" href="/compiler/editor">
                        <Button class="rounded-sm z-[1] py-5 px-14 bg-gray-800 text-slate-100 a-center">
                            <span class="font-[550] uppercase">View Editor</span>
                        </Button>
                    </a>
                </div>
                <div class="w-full a-center">
                    <div class="relative cursor-none aspect-square lg:w-[250px] md:w-4/12 w-7/12">
                        <x-logo-big class="absolute z-[0] left-0 right-0 h-full"></x-logo-big>
                        <x-logo-big class="animate-pulse absolute z-[0] blur-md left-0 right-0 h-full"></x-logo-big>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-compiler-layout>
