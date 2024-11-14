@extends('layouts.app') <!-- Extends the app layout -->

@section('content')

<div class="fixed inset-0 flex h-full overflow-hidden bg-white rounded-t-lg shadow lg:top-16 lg:inset-x-2">

    <!-- Chat List Section -->
    <div class="relative h-full w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 border-r">
        <livewire:chat.chat-list />  <!-- Chat list component -->
    </div>

    <!-- Draggable Divider using Alpine.js -->
    <div 
        class="w-1 bg-gray-300 cursor-ew-resize" 
        x-data="{ isDragging: false, startX: 0, startWidth: 0 }"
        @mousedown="isDragging = true; startX = $event.clientX; startWidth = $el.previousElementSibling.offsetWidth"
        @mousemove.window="if(isDragging) $el.previousElementSibling.style.width = `${startWidth + ($event.clientX - startX)}px`"
        @mouseup.window="isDragging = false">
    </div>

    
    
    
    <!-- Content Area (Side Section) -->
    {{-- <div class="flex items-center justify-center w-full h-full overflow-y-auto"> --}}
        {{-- <div class="space-y-3 text-center">
            <h4 class="text-lg font-medium">Choose a conversation to start chatting</h4>
        </div> --}}
{{--         
        <livewire:chat.chat-box>
    </div> --}}

    
    <div class="relative grid w-full h-full overflow-y-auto border-l">
        <livewire:chat.chat-box>
    </div>
    
    
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection
