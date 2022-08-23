<div class="bg-black py-10 shadow-2xl">
    <div class="max-w-6xl mx-auto px-6 md:px-8 bg-black">
        <div class="sm:flex flex-row justify-between sm:space-y-0 space-y-6">
            <div>
                <h2 class="uppercase text-gray-300 text-3xl font-bold mb-6">Kinerja Tambang Indonesia</h2>
                <p class="text-gray-300 w-64">
                    {{__('Efforts to disclose information in the environmental field seem to be getting backwards. HGU as an instrument in the exploitation of state land is again declared as exempt information.')}}
                </p>
            </div>
            <div class="sm:text-right text-left space-y-4 flex flex-col">
                <a href="{{ route('about', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold ">{{__('About')}}</a>
                <a href="{{ route('index', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold ">{{__('Indexing Result')}}</a>
                <a href="{{ route('methodology', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold ">{{__('Methodology')}}</a>
                <a href="{{ route('corporateprofile', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold ">{{__('Corporate Profile')}}</a>

                {{-- sosmed --}}
                <div class="flex space-x-6 text-right">
                    <img loading="lazy" src="{{ asset('assets/twitter.svg') }}" alt="" class="w-5 mt-10 ">
                    <img loading="lazy" src="{{ asset('assets/facebook.svg') }}" alt="" class="w-5 mt-10">
                    <img loading="lazy" src="{{ asset('assets/ig.png') }}" alt="" class="h-5 mt-10" >
                    <img loading="lazy" src="{{ asset('assets/linkedin.png') }}" alt="" class="w-5 mt-10">
                </div>
            </div>
        </div>
        <p class="text-gray-300 sm:text-right text-left mt-12">
            ©{{date('Y')}}. {{__('Copyright protected by law.')}} <a class="font-bold">{{__('Privacy Policy')}}</a> | <a class="font-bold">Disclaimer</a>
        </p>
    </div>
</div>
