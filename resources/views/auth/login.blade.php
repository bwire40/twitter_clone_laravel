@extends('layout.auth_layout')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        @error('error')
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-red-500 py-4 px-2 flex items-center justify-center">
                <span class="text-white font-semibold">
                    {{ $message }} {{-- messae variable is injected for us --}}
                </span>
            </div>
        @enderror
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm py-4 px-2 flex items-center justify-center">
            @include('shared.success_message')

        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('email')
                        <span class="text-red-500 font-semibold">
                            {{ $message }} {{-- messae variable is injected for us --}}
                        </span>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password')
                        <span class="text-red-500 font-semibold">
                            {{ $message }} {{-- messae variable is injected for us --}}
                        </span>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                <a href="{{ secure_url(route('register')) }}"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Get started</a>
            </p>
        </div>
    </div>
@endsection
