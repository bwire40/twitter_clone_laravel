<div class="flex flex-col justify-center items-start w-full">
    <div class="px-3 pt-4 pb-2 w-full">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center justify-between w-full mb-4">
                <div class="flex justify-center items-center">
                    <img style="width:50px" class="mr-3 rounded-full rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                        <h5 class="mb-0"><a href="#"> Mario
                            </a></h5>
                    </div>
                </div>

                <div class="w-4/12 flex justify-between items-center">

                    <form action="{{ route('idea.destroy', $idea->id) }}" method="post">
                        @csrf
                        {{-- spoof the request to delete method --}}
                        @method('delete')
                        <button class="font-semibold text-red-500" title="delete"><x-icons.trash /></button>
                    </form>


                    @if ($show)
                        <a href="{{ route('idea.edit', $idea->id) }}">
                            <button class="font-semibold text-green-500" title="Edit"><x-icons.pencil-alt /></button>
                            {{-- <x-icons.pencil-alt />V --}}
                        </a>
                    @else
                        <div></div>
                    @endif


                    <a href="{{ route('idea.show', $idea->id) }}">
                        <button class="font-semibold text-blue-500" title="View"><x-icons.eye /></button>

                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="">

        @if ($editing ?? false)
            {{-- show tetx box if we are editing --}}
            <h4 class="font-bold text-slate-500"> Share yours ideas </h4>
            <div class="flex flex-col justify-center items-start py-4 w-full">

                <form action="{{ secure_url(route('idea.update', $idea->id)) }}" method="post">
                    {{-- @csrf to prevent csrf attacks pae expired error --}}
                    @csrf

                    @method('put')
                    <div class="mb-3 w-full">
                        <textarea name="content" class="w-full border-2 border-gray-400 p-2 text-lg text-slate-600" id="idea"
                            cols="100%" placeholder="...">{{ $idea->content }}</textarea>

                        <br>


                        {{-- use the error directive to display errors --}}
                        @error('content')
                            <span class="text-red-500 font-semibold">
                                {{ $message }} {{-- messae variable is injected for us --}}
                            </span>
                        @enderror

                    </div>
                    <div class="">
                        <button type="submit" class=" bg-blue-600 text-white p-3 w-32 rounded-lg text-lg"> Share
                        </button>
                    </div>
                </form>
            </div>
        @else
            <p class="text-slate-500 text-muted mb-3">
                {{ $idea->content }}
            </p>
        @endif


        <div class="flex justify-between items-center">
            <div class="mr-4">
                <a href="#" class="text-slate-700 font-bold"> <span class="text-red-500 fas fa-heart me-1">
                    </span> {{ $idea->likes }} </a>
            </div>
            <div>
                <span class="text-slate-700 font-bold"> <span class="text-blue-600 fas fa-clock">
                    </span>{{ $idea->created_at }}</span>
            </div>
        </div>

        {{-- comments --}}
        <div>
            <div class="mb-3">
                <textarea class="fs-6 form-control" rows="1"></textarea>
            </div>
            <div class="mb-3">
                <button class="bg-blue-600 text-white p-3 w-fit rounded-lg text-lg"> Post Comment
                </button>
            </div>

            <hr>
            <div class="flex items-start">
                <img style="width:35px" class="me-2 rounded-full"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">
                <div class="w-100">
                    <div class="flex justify-between">
                        <h6 class="font-bold">Luigi
                        </h6>
                        <small class="fw-light text-slate-600 font-semibold"> 3 hour
                            ago</small>
                    </div>
                    <p class="mt-3 text-slate-700">
                        And 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                        Evil)
                        by
                        Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                        very
                        popular during the Renaissan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
