@extends('layouts.app') <!-- Extends the app layout -->

@section('content')

<div class="fixed inset-0 flex h-full overflow-hidden bg-white border rounded-t-lg lg:shadow-sm lg:top-16 lg:inset-x-2">

    <!-- Chat List Section -->
    <div class="relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full border">
        {{-- <livewire:chat.chat-list> <!-- Ensure this component exists --> --}}
    </div>

    <!-- Draggable Divider -->
    <div class="w-1 bg-gray-300 resize-x cursor-ew-resize"></div>

    <!-- Content Area (Side Section) -->
    <div class="relative hidden w-full h-full overflow-y-auto border-l md:grid">
        <div class="flex flex-col justify-center gap-3 m-auto text-center">
            <h4 class="text-lg font-medium"> Choose a conversation to start chatting </h4>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<script>
  const divider = document.querySelector('.resize-x');
  let isDragging = false;

  divider.addEventListener('mousedown', (e) => {
    isDragging = true;
    const startX = e.clientX;
    const startWidth = divider.previousElementSibling.offsetWidth; // Get the current width of the left panel
    
    const mouseMoveHandler = (e) => {
      if (isDragging) {
        const dx = e.clientX - startX; // Calculate the change in the X position
        divider.previousElementSibling.style.width = `${startWidth + dx}px`; // Update the width of the left panel
      }
    };

    const mouseUpHandler = () => {
      isDragging = false;
      document.removeEventListener('mousemove', mouseMoveHandler);
      document.removeEventListener('mouseup', mouseUpHandler);
    };

    document.addEventListener('mousemove', mouseMoveHandler);
    document.addEventListener('mouseup', mouseUpHandler);
  });
</script>
@endsection
