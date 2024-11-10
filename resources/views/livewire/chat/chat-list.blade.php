<div
    x-data="{type:'all'}"
    class="flex flex-col h-full overflow-hidden transition-all">
    <header class="sticky top-0 z-10 w-full px-3 py-2 bg-white">
        
        <div class="flex items-center justify-between pb-2 border-b">
            
            <div class="flex items-center gap-2">
                <h5 class="text-2xl font-extrabold">Chats</h5>
            </div>
            
            <button>
                
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                </svg>
                
            </button>
            
        </div>
        
        {{-- Filters --}}
        <div class="flex items-center gap-3 p-2 overflow-x-scroll bg-white">
            
            <button @click="type='all'" :class="{'bg-blue-100 border-0 text-black':type=='all'}" class="inline-flex items-center justify-center py-1 text-xs font-medium rounded-full gap-2 px-3 lg:px-5 lg:py-2.5 border">
                All
            </button>
            
            <button @click="type='deleted'" :class="{'bg-blue-100 border-0 text-black':type=='deleted'}" class="inline-flex items-center justify-center py-1 text-xs font-medium rounded-full gap-2 px-3 lg:px-5 lg:py-2.5 border">
                Deleted
            </button>
            
        </div>
    </header>
    
    <main class="relative h-full overflow-hidden overflow-y-scroll grow" style="contain:content">
        {{-- Chat List --}}
        
        <ul class="grid w-full p-2 space-y-2">
            <li class="relative flex w-full gap-4 px-2 py-3 transition-colors duration-150 cursor-pointer hover:bg-gray-50 rounded-2xl dark:hover:bg-gray-700/20">
                <a href="#" class="shrink-0">
                    <x-avatar />
                </a>
                
                <aside class="grid w-full grid-cols-12">
                    <a href="#" class="relative w-full col-span-11 p-1 pb-2 overflow-hidden leading-5 truncate border-b border-gray-200 flex-nowrap">
                        
                        {{-- Name and date --}}
                        <div class="flex items-center justify-between w-full">
                            <h6 class="font-medium tracking-wider text-gray-500 truncate">
                                Shyam Bahadur
                            </h6>
                            <small class="text-gray-700">5d</small>
                        </div>
                        
                        {{-- Message body --}}
                        <div class="flex items-center gap-2">
                            {{-- Double tick --}}
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
                                </svg> 
                            </span>
                            
                            <p class="text-sm font-light truncate">
                               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quia quas repudiandae ullam, nemo, excepturi maxime, corrupti aliquid esse rerum incidunt vero molestias accusantium pariatur iusto eaque. Eaque, a omnis.
                            </p>    
                            
                            {{-- Unread count --}}
                            <span class="px-2 text-xs font-bold text-white bg-blue-500 rounded-full shrink-0">5</span>
                        </div>
                    </a>
                    
                    
                    
                    
                    
                    
                    
                    
                    {{-- dropdown --}}
                   
                    <div class="flex flex-col col-span-1 my-auto text-center">
                   

             
                        <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-7 h-7 bi bi-three-dots-vertical text-gray-70" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                  </svg>

                            
                            </button>
                             </x-slot>

                             <x-slot name="content">
                       
                                    <div class="w-full p-1">
                                        
                                        
                                        <button class="flex items-center w-full gap-3 px-4 py-2 text-sm leading-5 text-left text-gray-500 transition-all duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                            
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                                  </svg>
                                            </span>
                                            
                                            View Profile
                                            
                                        </button>
                                        
                                        <button class="flex items-center w-full gap-3 px-4 py-2 text-sm leading-5 text-left text-gray-500 transition-all duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                            
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                  </svg>
                                            </span>
                                            
                                            Delete
                                            
                                        </button>
                                        
                                        
                                        
                                        
                                    </div>
                                    
                            </x-slot>
                </x-dropdown>

                    
                   
         
         
                    
                    
            </aside>
            </li>
        </ul>
    </main>
</div>
