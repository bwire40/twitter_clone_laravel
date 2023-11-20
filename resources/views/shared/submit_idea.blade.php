<h4 class="font-bold text-slate-500"> Share yours ideas </h4>
<div class="flex flex-col justify-center items-start py-4 w-full">

    <form action="{{ secure_url(route('idea.create')) }}" method="post">
        {{-- @csrf to prevent csrf attacks --}}
        @csrf
        <div class="mb-3">
            <textarea name="content" class="border-2 border-gray-400 p-2 text-lg text-slate-600" id="idea" rows="3"
                cols="24" placeholder="..."></textarea>


            @error('content')
                <span class="text-red-500 font-semibold">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="">
            <button type="submit" class=" bg-blue-600 text-white p-3 w-32 rounded-lg text-lg"> Share </button>
        </div>
    </form>
</div>
