<div class="bg-white dark:bg-newgray-900">
    <header class="max-w-6xl px-6 mx-auto pt-4 flex items-center justify-between">
        <div class="flex items-center space-x-3">
           <a href="/cms/dashboard" class="text-newgray-900 drak:text-gray-200">
                <img src="{{ asset('assets/icon.png') }}" alt="" class="h-6 rounded">
           </a>
           <span class="sm:block hidden">
              <svg viewBox="0 0 32 32" stroke="currentColor" class="h-8 w-8 text-gray-300 dark:text-gray-700">
                 <line x1="10" y1="28" x2="22" y2="4"></line>
              </svg>
           </span>
           <div class="sm:block hidden">
                <span class="font-semibold text-1xl tracking-tight text-newgray-900 dark:text-gray-200">Responsible Mining Index</span>
           </div>
        </div>

        {{-- // responsive pc--}}
        <div class=" sm:flex items-center space-x-5 hidden">
            @include('pages.cms.cmspartials.toogleprofile')
        </div>

        {{-- //resposive mobile --}}
        <div class="sm:hidden flex space-x-5">
            @include('pages.cms.cmspartials.toogleprofile')
        </div>
     </header>

</div>
