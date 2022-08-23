<div>
    <livewire:toastr />
    <div class="flex  justify-between items-center mb-2">
        <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Spotlight Cases</h1>
        <button wire:loading.remove wire:target='store'  wire:click='store' id="myBtn" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
            Save
        </button>
        <button wire:loading wire:target='store' id="myBtn" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
            <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </button>
    </div>

    <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
    <div wire:ignore>
        <textarea cols="80" id="editor1"  rows="10"  wire:model.defer='contentenglish' required></textarea>
    </div>

    <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
    <div wire:ignore>
        <textarea  cols="80" id="editor2"  rows="10"wire:model.defer='contentindonesia' required ></textarea>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script>
        const editor1= CKEDITOR.replace('editor1',{
                        height: 400,
                        baseFloatZIndex: 10005
                        });
        const editor2= CKEDITOR.replace('editor2',{
                        height: 400,
                        baseFloatZIndex: 10005
                        });

        document.querySelector("#myBtn").addEventListener("click", () => {
            if (!editor1.getData()) {
                window.livewire.emit('toast', 'Content English is required', 'error');
            }else if(!editor2.getData()){
                window.livewire.emit('toast', 'Content Indonesia is required', 'error');
            }
            @this.set('contentenglish', editor1.getData());
            @this.set('contentindonesia', editor2.getData());
        });
    </script>
</div>



