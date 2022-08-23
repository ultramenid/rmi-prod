<div class="border border-gray-200 dark:border-opacity-20 px-6 py-4">
    <h1 class="text-xl text-newbg-newgray-900 dark:text-gray-300 mb-8 font-semibold">Index Map</h1>

    <a class="text-newbg-newgray-900 dark:text-gray-300 ">Embed code</a>
    <textarea  wire:model.debounce.500ms="mapCode" rows="3"  class="w-full border border-gray-200 px-2 py-1 mt-2 mb-4" placeholder="Your code here"></textarea>
    <a class="text-newbg-newgray-900 dark:text-gray-300 mt-4">Preview</a>


    @if ($resultCode)
    <div>
        {!! $resultCode->code !!}
    </div>
    @endif

</div>
