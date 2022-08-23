<div class="border-b border-gray-200 dark:border-opacity-20 sticky top-0 z-10 bg-white dark:bg-newgray-900">
    <div class="max-w-6xl mx-auto px-6 " >
        <nav x-data="{ pages: false }" class="-mb-px flex space-x-6 text-sm leading-5 overflow-x-auto scrollbar-hide text-gray-500">
            <a href="{{url('/cms/dashboard')}}" class=" px-0.5 py-3  @if($nav == 'dashboard' )  dark:border-gray-300 border-newgray-900 text-newgray-900 border-b-2 dark:text-gray-300 @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Dashboard</a>

            {{-- <a @click="pages = ! pages" class="px-0.5 py-3 @if($nav == 'pages' ) dark:border-gray-300 border-newgray-900 text-newgray-900 dark:text-gray-300 border-b-2  @endif   hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer inline-flex  items-center" >
                Pages
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
            </a> --}}
            <div @click.away="pages=false" x-show="pages" x-transition class="absolute w-52 mt-11 " x-cloak style="display: none !important">
                <div class="flex-col flex bg-white dark:bg-black px-3 py-3 space-y-2 rounded-md shadow-lg">
                    <a class="hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-newgray-900 text-gray-700 h-6" href="{{ url('/cms/page/methodology') }}" >Methodogy</a>
                </div>
              </div>

              <a href="{{url('/cms/corporates')}}" class=" px-0.5 py-3  @if($nav == 'corporates' )  dark:border-gray-300 border-newgray-900 text-newgray-900 border-b-2 dark:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Corporates</a>

            <a href="{{url('/cms/settings')}}" class=" px-0.5 py-3  @if($nav == 'settings' )  dark:border-gray-300 border-newgray-900 text-newgray-900 border-b-2 dark:text-gray-300 @endif hover:text-newgray-900 dark:hover:text-gray-300 cursor-pointer   " >Settings</a>

        </nav>
    </div>
</div>
