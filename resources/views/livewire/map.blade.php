<div>
    <div class=" h-12 py-3">
        <h3 class="text-center text-3xl font-bold mb-3">Drag an area on the map:</h3>

    </div>
    <div class="w-full h-[600px]">
        <div wire:ignore id="map" class="h-full"></div>
    </div>
    @if ($message)
        <h3 class="text-center text-3xl font-bold mb-3">{{ $message }}</h3>
    @endif
    @if ($formStatus)
        @livewire('form', ['type' => $type, 'points' => $points])
    @endif
</div>