<header class="bg-black">
        <div x-data="{ open: false }" class="px-6 py-4 bg-black sm:hidden block">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300 " viewBox="0 0 20 20" fill="currentColor" @click="open = true">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>

            <div class="fixed w-2/3 h-screen z-50 bg-black  inset-0 overflow-y-auto " x-show="open"
            x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click.outside="open = false"
            x-cloak style="display: none !important">
                <button class="absolute top-4 left-6 focus:outline-none text-gray-300" @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="white" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                </button>

                <div class="mt-12 space-y-3">
                    <div class=" text-center px-6">
                        <a href="{{ route('about', app()->getlocale() )}}"  class="mb-4 px-4 inline-block text-base leading-5 text-gray-300 font-semibold uppercase">{{__('About')}}<a>
                        <p class="border-b border-gray-300"></p>
                    </div>
                    <div class=" text-center px-6">
                        <a href="{{ route('index', app()->getlocale() )}}"  class="mb-4 px-4 inline-block text-base leading-5 text-gray-300 font-semibold uppercase">{{__('Indexing Result')}}<a>
                        <p class="border-b border-gray-300"></p>
                    </div>
                    <div class=" text-center px-6">
                        <a href="{{ route('methodology', app()->getlocale() )}}"  class="mb-4 px-4 inline-block text-base leading-5 text-gray-300 font-semibold uppercase">{{__('Methodology')}}<a>
                        <p class="border-b border-gray-300"></p>
                    </div>
                    <div class=" text-center px-6">
                        <a href="{{ route('corporateprofile', app()->getlocale() )}}" class="mb-4 px-4 inline-block text-base leading-5 text-gray-300 font-semibold uppercase">{{__('Corporate Profile')}}<a>
                        <p class="border-b border-gray-300"></p>
                    </div>
                    <div class="text-center px-4">
                        <div class="space-x-1 flex text-gray-300 justify-center">
                            <a href="{{ route('corporatedetail', ['en', $id]) }}" class=" @if(App::getLocale() == 'en') text-red-700 @endif mb-4 text-base leading-5  font-semibold uppercase">English<a>
                            <a href="{{ route('corporatedetail', ['id', $id]) }}" class=" @if(App::getLocale() == 'id') text-red-700 @endif mb-4 text-base leading-5  font-semibold uppercase">Indonesia<a>
                        </div>
                        <p class="border-b border-gray-300"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 -py-2 sm:block hidden">
            <div class="flex justify-between px-3">
                <a></a>
                <div class=" text-gray-500  px-12 py-1 bg-gray-300 text-sm rounded-b-lg flex space-x-4">
                    <a href="{{ route('corporatedetail', ['en',$id]) }}" class=" @if(App::getLocale() == 'en') text-red-700 @endif  ">English</a>
                    <a href="{{ route('corporatedetail',  ['id',$id]) }}" class="@if(App::getLocale() == 'id') text-red-700 @endif">Indonesia</a>
                </div>
            </div>
        </div>
    <div class=" flex justify-center z-20">
        <a href="{{ route('index', app()->getlocale() )}}">
            <img loading="lazy" src="{{ asset('assets/LogoKTIPutih.png') }}" alt="" class="sm:w-72 w-48 sm:py-12 py-16">
        </a>
    </div>
</header>
