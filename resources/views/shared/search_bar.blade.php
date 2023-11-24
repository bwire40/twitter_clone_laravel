<div class="border-2 border-slate-300 px-2">
    <div class="pb-0 border-0">
        <h5 class="font-bold text-slate-600">Search</h5>
    </div>
    <form method="get" action="{{ secure_url(route('home')) }}" class="">
        <input placeholder="...
            " name="search"
            class="w-full border-2 border-slate-400 px-2 ring-slate-400 outline-none focus:ring-slate-500" type="text"
            id="search">
        <button class="bg-blue-600 text-white p-2 my-2 w-fit rounded-lg text-sm"> Search</button>
    </form>
</div>
