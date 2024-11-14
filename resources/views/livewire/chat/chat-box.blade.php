<div class="flex flex-col h-full border-b grow">
    {{-- Header --}}
    <header class="sticky inset-x-0 top-0 z-10 flex items-center w-full gap-2 px-2 pt-1 pb-1 bg-white border-b">
        <a class="shrink-0 lg:hidden" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>
        </a>
        <div class="shrink-0">
            <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
        </div>
        <h6 class="font-bold truncate">{{ fake()->name }}</h6>
    </header>

    {{-- Chat Body (Scrollable Area) --}}
    <main class="flex-grow p-2.5 overflow-y-auto w-full">
        <div class="max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2">
            <div class="shrink-0"> 
                <x-avatar/>
            </div>
            <div class="flex flex-col p-2.5 text-[15px] text-black bg-[#f6f6f8] rounded-xl rounded-br-none bg-blue-500/80 text-white">
                <p class="text-sm tracking-wide truncate whitespace-normal md:text-base lg:tracking-normal">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>   
        </div>
    </main>

    {{-- Footer (Fixed at the Bottom) --}}
    <footer class="inset-x-0 z-10 bg-white border-t shrink-0">
        <div class="p-2">
            <form method="POST" autocapitalize="off">
                @csrf
                <div class="grid items-center grid-cols-12 gap-2">
                    <input type="text" 
                        autocomplete="off" 
                        placeholder="Write your message here" 
                        maxlength="1700" 
                        class="w-full col-span-10 bg-gray-100 border-0 rounded-lg outline-none focus:ring-0">
                    <button class="col-span-2" type="submit">Send</button>
                </div>
            </form>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
    </footer>
</div>
