<x-app-layout>
    <x-slot name="header" class="h-[50px]">
        <h2 class="font-semibold text-lg text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-100">
                    <h1 class="text-xl font-bold">
                        @auth
                        {{ __("Hi ") . Auth::user()->name . "!" }}
                        @else
                        {{ __("Hi User!") }}
                        @endauth
                    </h1>
                    <p class="mt-4 text-sm">
                        Welcome to <span class="text-md font-semibold logo-text cursor-pointer">DARKUBE</span> - Your Ultimate Coding Hub!
                    </p>
                    <p class="mt-6 text-sm">
                        🚀 Ready to code, blog, ask questions, and collaborate in real-time? You're in the right place!
                    </p>
                    <p class="mt-3 text-sm">
                        <span class="font-semibold text-md logo-text-bright">Code On The Fly :</span> Dive into our online compiler and bring your code to life. Test, debug, and execute without breaking a sweat.
                    </p>
                    <p class="mt-3 text-sm">
                        <span class="font-semibold text-md logo-text-bright">Share Your Insights:</span> Explore our blogging platform to share your knowledge, experiences, and discoveries. Your expertise could be the guiding light for someone else.
                    </p>
                    <p class="mt-3 text-sm">
                        <span class="font-semibold text-md logo-text-bright">Ask and Learn:</span> Got a coding dilemma? Ask the community! Our vibrant Q&A section is where questions meet answers. Don't be shy – every question is a step towards mastery.
                    </p>
                    <p class="mt-3 text-sm">
                        <span class="font-semibold text-md logo-text-bright">Connect Instantly:</span> Need real-time discussions? Create your chat rooms! Connect with like-minded individuals, brainstorm ideas, or just hang out. The possibilities are endless.
                    </p>
                    <p class="mt-8 text-sm">
                        Ready to embark on a journey of coding, learning, and connecting? Let's get started!
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-8 max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap justify-around">
            <a href="{{ route('compiler.home') }}" class="p-3 w-1/2 md:w-1/3 lg:w-1/4 hover:scale-105">
                <div class="bg-gray-800 shadow p-5 md:p-10 rounded-lg">
                    <img class="block w-full" src="/images/compiler.png" alt="compiler" />
                    <div class="mt-3 text-sm font-semibold text-center text-gray-100 dark:text-gray-100">
                        Online Compiler
                    </div>
                </div>
            </a>
            <div class="p-3 w-1/2 md:w-1/3 lg:w-1/4 hover:scale-105">
                <div class="bg-gray-800 shadow p-5 md:p-10 rounded-lg">
                    <img class="block w-full" src="/images/blog.png" alt="compiler" />
                    <div class="mt-3 text-sm font-semibold text-center text-gray-100 dark:text-gray-100">
                        Blog
                    </div>
                </div>
            </div>
            <div class="p-3 w-1/2 md:w-1/3 lg:w-1/4 hover:scale-105">
                <div class="bg-gray-800 shadow p-5 md:p-10 rounded-lg">
                    <img class="block w-full" src="/images/ask.png" alt="compiler" />
                    <div class="mt-3 text-sm font-semibold text-center text-gray-100 dark:text-gray-100">
                        Ask Me
                    </div>
                </div>
            </div>
            <div class="p-3 w-1/2 md:w-1/3 lg:w-1/4 hover:scale-105">
                <div class="bg-gray-800 shadow p-5 md:p-10 rounded-lg">
                    <img class="block w-full" src="/images/chat.png" alt="compiler" />
                    <div class="mt-3 text-sm font-semibold text-center text-gray-100 dark:text-gray-100">
                        Chat Room
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
