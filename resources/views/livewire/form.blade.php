<div class="max-w-3xl mx-auto px-4 my-4">
    <form wire:submit.prevent="save" >
        <div class="flex flex-wrap gap-3 items-center justify-between">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input wire:model="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Enter are name">
                <div class=" text-red-500 text-sm">@error('name') {{ $message }} @enderror</div>
            </div>
            <div class="mb-4">
                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date:</label>
                <input wire:model="startDate" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full">
                <div class=" text-red-500 text-sm">@error('startDate') {{ $message }} @enderror</div>
            </div>
            <div class="mb-4">
                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date:</label>
                <input wire:model="endDate" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full">
                <div class=" text-red-500 text-sm">@error('endDate') {{ $message }} @enderror</div>
            </div>
        </div>
        <div class="mt-5">
            <button type="submit" class="inline-flex justify-center w-full rounded-md px-4 py-2 bg-indigo-600 text-white">
                Save
            </button>
        </div>
    </form>
</div>
