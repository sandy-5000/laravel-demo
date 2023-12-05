<div class="dialog">
    <div className="text-[#e91e63] text-[20px] font-normal p-5 pb-0">
        Languages
    </div>
    <div className="p-5">
        <div className="grid grid-cols-4 gap-4">
            @if (isset($languages))
            @foreach($languages as $key => $value)
            <button onClick="selectedLanguage({{$key}})">
                <p className="py-1 rounded-md cursor-pointer text-slate-50 hover:bg-gray-200 normal-case font-semibold">{{$value}}</p>
            </button>
            @endforeach
            @else
            <p>No Languages to display</p>
            @endif
        </div>
    </div>

</div>
