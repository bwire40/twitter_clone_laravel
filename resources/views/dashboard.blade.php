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

            {{-- flash success --}}
            @include('shared.success_message')
            {{-- flash success end --}}

            {{-- submit form --}}
            @include('shared.submit_idea')

            {{-- submit form ends --}}
            <hr>
            <div class="mt-3">
                {{ $ideas->links() }}
            </div>
            @foreach ($ideas as $idea)
                <div class="mt-3 mb-3 border-2 border-slate-200 px-4 rounded-sm h-fit">

                    {{-- idea card --}}
                    @include('shared.idea_card')

                </div>
            @endforeach

            {{-- pagination buttons using the links method --}}

            {{ $ideas->links() }}
        </div>


        {{-- right section --}}

        <div class="w-full lg:w-3/12 mt-10 lg:mt-0 ">
            @include('partials.right_navbar')

        </div>

    </div>
@endsection
