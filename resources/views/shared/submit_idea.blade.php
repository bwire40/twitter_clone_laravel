@auth

    <h4 class="font-bold text-slate-500"> Share yours ideas </h4>
    <div class="flex flex-col justify-center items-start py-4 w-full">

        <form action="{{ secure_url(route('idea.create')) }}" method="post">
            {{-- @csrf to prevent csrf attacks pae expired error --}}
            @csrf
            <div class="mb-3 w-full">
                <textarea name="content" class="w-full border-2 border-gray-400 p-2 text-lg text-slate-600" id="idea" cols="100%"
                    placeholder="..."></textarea>

                <br>


                {{-- use the error directive to display errors --}}
                @error('content')
                    <span class="text-red-500 font-semibold">
                        {{ $message }} {{-- messae variable is injected for us --}}
                    </span>
                @enderror
                {{-- <input type="number" name="likes" id="likes"
                class="w-full border-2 border-gray-400 p-2 text-lg text-slate-600" placeholder="likes">
            @error('likes')
                <span class="text-red-500 font-semibold">
                    {{ $message }}
                </span>
            @enderror --}}
            </div>
            <div class="">
                <button type="submit" class=" bg-blue-600 text-white p-3 w-32 rounded-lg text-lg"> Share </button>
            </div>
        </form>
    </div>
@endauth

@guest
    <h4 class="font-bold text-slate-500">Login to share your ideas </h4>
@endguest
