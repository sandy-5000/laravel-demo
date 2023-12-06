@php
    $languages = [
        'java' => 'Java',
        'python' => 'Python',
        'c' => 'C',
        'cpp' => 'C++',
        'nodejs' => 'NodeJS',
        'javascript' => 'JavaScript',
        'groovy' => 'Groovy',
        'jshell' => 'Jshell',
        'haskell' => 'Haskell',
        'tcl' => 'Tcl',
        'lua' => 'Lua',
        'ada' => 'Ada',
        'commonlisp' => 'CommonLisp',
        'd' => 'D',
        'elixir' => 'Elixir',
        'erlang' => 'Erlang',
        'fsharp' => 'F#',
        'fortran' => 'Fortran',
        'assembly' => 'Assembly',
        'scala' => 'Scala',
        'php' => 'Php',
        'python2' => 'Python2',
        'csharp' => 'C#',
        'perl' => 'Perl',
        'ruby' => 'Ruby',
        'go' => 'Go',
        'r' => 'R',
        'racket' => 'Racket',
        'ocaml' => 'OCaml',
        'vb' => 'Visual Basic',
        'bash' => 'Bash',
        'clojure' => 'Clojure',
        'typescript' => 'TypeScript',
        'cobol' => 'Cobol',
        'kotlin' => 'Kotlin',
        'pascal' => 'Pascal',
        'prolog' => 'Prolog',
        'rust' => 'Rust',
        'swift' => 'Swift',
        'octave' => 'Octave',
        'text' => 'Text',
        'brainfk' => 'BrainFK',
        'coffeescript' => 'CoffeeScript',
        'ejs' => 'EJS',
    ];
@endphp

<div class="modal absolute left-0 top-2 flex w-screen h-screen z-10 justify-center {{ $class }}">
    <div class="relative w-11/12 md:w-8/12 lg:w-1/2">
        <div class="dialog absolute left-0 top-0 w-full h-fit bg-slate-800 rounded-lg">
            <div class="text-[#e91e63] text-[20px] font-normal p-5 pb-0">
                Languages
            </div>
            <div class="p-5">
                <div class="grid grid-cols-4 gap-2">
                    @if (isset($languages))
                        @foreach ($languages as $key => $value)
                            <button onClick="selectLanguage('{{ $key }}')">
                                <p
                                    class="py-2 rounded-md cursor-pointer text-slate-50 hover:bg-gray-700 normal-case font-semibold">
                                    {{ $value }}</p>
                            </button>
                        @endforeach
                    @else
                        <p>No Languages to display</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
