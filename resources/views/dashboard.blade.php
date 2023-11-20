@extends('layout.layout')


@section('content')
    <div class="px-4 lg:px-0 flex flex-col lg:flex-row justify-center items-center lg:items-start w-full py-4">

        {{-- left navbar --}}
        <div class="hidden lg:block lg:w-3/12">
            {{-- left navbar --}}
            @include('partials.left_navbar')
        </div>


        {{-- content section --}}
        <div class="w-full px-4 lg:w-6/12 mx-4">

            {{-- toast start --}}
            @include('partials.success_toast')


            {{-- toast end --}}
            <h4 class="font-bold text-slate-500"> Share yours ideas </h4>
            <div class="flex flex-col justify-center items-start py-4 w-full">
                <div class="mb-3">
                    <textarea class="border-2 border-gray-400 p-2 text-lg text-slate-600" id="idea" rows="3" cols="24">...</textarea>
                </div>
                <div class="">
                    <button class=" bg-blue-600 text-white p-3 w-32 rounded-lg text-lg"> Share </button>
                </div>
            </div>
            <hr>
            @foreach ($ideas as $idea)
                <div class="mt-3 border-2 border-slate-200 px-4 rounded-sm h-fit">

                    <div class="flex flex-col justify-center items-start">
                        <div class="px-3 pt-4 pb-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img style="width:50px" class="mr-3 rounded-full rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                                    <div>
                                        <h5 class="mb-0"><a href="#"> Mario
                                            </a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="text-slate-500 text-muted">
                                {{ $idea->content }}
                            </p>
                            <div class="flex justify-between">
                                <div>
                                    <a href="#" class="text-slate-700 font-bold"> <span
                                            class="text-red-500 fas fa-heart me-1">
                                        </span> {{ $idea->likes }} </a>
                                </div>
                                <div>
                                    <span class="text-slate-700 font-bold"> <span class="text-blue-600 fas fa-clock">
                                        </span>{{ $idea->created_at }}</span>
                                </div>
                            </div>
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


                </div>
            @endforeach
        </div>


        {{-- right section --}}

        <div class="w-full lg:w-3/12 mt-10 lg:mt-0 ">
            @include('partials.right_navbar')
        </div>

    </div>
@endsection
