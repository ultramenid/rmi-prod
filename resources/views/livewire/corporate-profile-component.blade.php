<div class=" bg-gray-300" x-data="corporateProfiles">
    <div class="grid lg:grid-cols-6 md:grid-cols-2 grid-cols-1 py-6 sm:px-6 px-4 gap-4" >
        {{-- overview --}}
            <button @click="toogleOverview"
                :class="Overview ? 'bg-black text-gray-200' : 'text-gray-800 hover:bg-black hover:text-gray-200'"
                class="border py-1 border-gray-700 col-span-1 uppercase text-sm ">
                Overview
            </button>

        {{-- operationarea --}}
        <button @click="toogleOperation"
                :class="Operation ? 'bg-black text-gray-200' : 'text-gray-800 hover:bg-black hover:text-gray-200'"
                class="border py-1 border-gray-700 col-span-1 uppercase text-sm ">
                Area
        </button>


        {{-- corporatenetwork --}}
        <button @click="toogleCorporateNetwork"
                :class="CorporateNetwork ? 'bg-black text-gray-200' : 'text-gray-800 hover:bg-black hover:text-gray-200'"
                class="border py-1 border-gray-700 col-span-1 uppercase text-sm ">
                Corporation
        </button>


        {{-- financial--}}
        <button @click="toogleFinancial"
                :class="Financial ? 'bg-black text-gray-200' : 'text-gray-800 hover:bg-black hover:text-gray-200'"
                class="border py-1 border-gray-700 col-span-1 uppercase text-sm ">
                Financial
        </button>


        {{-- ownership  --}}
        <button @click="toogleOwnership"
                :class="Ownership ? 'bg-black text-gray-200' : 'text-gray-800 hover:bg-black hover:text-gray-200'"
                class="border py-1 border-gray-700 col-span-1 uppercase text-sm ">
                Ownership
        </button>


         {{-- spotlightcases --}}
         <button @click="toogleSpotlight"
         :class="Spotlight ? 'bg-black text-gray-200' : 'text-gray-800 hover:bg-black hover:text-gray-200'"
         class="border py-1 border-gray-700 col-span-1 uppercase text-sm ">
         Spotlight
        </button>

    </div>


    <div class="py-6 sm:px-6 px-4 " >
        <h1 class="sm:text-3xl text-2xl mb-6 font-semibold">{{ $data->name }}</h1>

        {{-- Overview --}}
        <div x-show="Overview" x-cloak style="display: none !important" class="min-h-screen  prose max-w-none">
            {!! $data->overview !!}
        </div>

         {{-- Operation Area --}}
         <div x-show="Operation" x-cloak style="display: none !important" class="min-h-screen prose max-w-none">
            {!! $data->operationarea !!}
        </div>

        {{-- Financial --}}
        <div x-show="Financial" x-cloak style="display: none !important" class="min-h-screen prose max-w-none">
            {!! $data->financialownership !!}
        </div>

        {{-- ownership --}}
        <div x-show="Ownership" x-cloak style="display: none !important" class="min-h-screen prose max-w-none">
            {!! $data->ownership !!}
        </div>

        {{-- Corporate Network --}}
        <div x-show="CorporateNetwork" x-cloak style="display: none !important" class="min-h-screen   prose max-w-none">
            {!! $data->corporatenetwork !!}
        </div>

        {{-- Spotlight Cases --}}
        <div x-show="Spotlight" x-cloak style="display: none !important" class="min-h-screen prose max-w-none">
            {!! $data->spotlightcases !!}
        </div>
    </div>

</div>
