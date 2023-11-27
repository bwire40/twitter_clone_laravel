<nav class="flex flex-wrap items-center justify-between w-full py-4 px-4 text-lg text-gray-700 dark:bg-slate-900">
    <div class="text-2xl">
        {{-- logo --}}
        <a href="{{ route('home') }}">
            <span class="fas fa-brain me-1">
                <span> Ideas</span></a>


    </div>
    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
        <ul
            class="
      pt-4
      text-bas
      md:flex
      md:justify-between
      md:items-center
      md:pt-0">
            <li>
                <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400"
                    href="{{ secure_url(route('ideas')) }}">Twits</a>
            </li>
            <li>
                <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400"
                    href="#">Pricing</a>
            </li>
            <li>
                <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400"
                    href="#">Customers</a>
            </li>
            <li>
                <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400"
                    href="{{ route('terms') }}">Terms</a>
            </li>

            {{-- if not logged in --}}
            @guest
                <li>
                    <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400 text-blue-500"
                        href="{{ secure_url(route('register')) }}">Sign Up</a>
                </li>
                <li>
                    <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400 text-blue-500"
                        href="{{ secure_url(route('login')) }}">Sign In</a>
                </li>
            @endguest

            {{-- if loggoed in --}}
            @auth

                <li>
                    <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400 text-blue-500"
                        href="">Hi, {{ Auth::user()->name }}</a>
                </li>
                <li>
                    {{-- <a class="text-lg transition-all duration-300 md:p-4 py-2 block hover:text-slate-400 text-blue-500"
                        href="{{ secure_url(route('logout')) }}">Sign Out</a> --}}

                    <form action="{{ secure_url(route('logout')) }}" method="post">
                        @csrf
                        <button type="submit" class="text-indigo-400">Sign Out</button>
                    </form>
                </li>
            @endauth
            <li>

                <!-- This is the button that toggles the theme -->
                <button class="js-theme-toggle">
                    <span class="text-xl  p-6 font-bold block dark:hidden text-black"><x-icons.moon /></span>
                    <span class="text-xl  p-6 font-bold hidden dark:block text-slate-300"><x-icons.light-bulb /></span>
                </button>

            </li>


        </ul>
    </div>
</nav>
