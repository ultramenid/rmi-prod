<div class="flex  items-center ">
    <div class="w-3/12 transform -rotate-90 lg:-mx-28 md:-mx-16 md:block hidden text-center ">
        <a class=" text-gray-300 h-full ">{{__('Thematic Areas')}}</a>
    </div>
    <div class="flex flex-col space-y-2  w-full ">
        <div class="flex ">
            <div class="w-1/12"></div>
            <h1 class="w-11/12 text-center text-gray-300 ">{{__('Measurement Areas')}}</h1>
        </div>

        {{-- #header --}}
        <div class="flex ">

            <div class="w-1/12 h-12 "></div>
            <div class="flex bgdarkrmi border-gray-600  h-12 border-t border-l border-r sm:w-2/12 w-3/12 items-center justify-center">
                <a class="text-gray-300 sm:text-base text-xs text-center px-1">{{__('Commitment')}}  (14%)</a>
            </div>
            <div class="flex bgdarkrmi border-gray-600  h-12 border-t sm:w-7/12 w-5/12 items-center justify-center">
                <a class="text-gray-300 sm:text-base text-xs px-1">{{__('Action')}} (58%)</a>
            </div>
            <div class="flex bgdarkrmi border-gray-600  h-12 border-t border-l border-r sm:w-2/12 w-3/12 items-center justify-center">
                <a class="text-gray-300 sm:text-base text-xs text-center px-1">{{__('Effectiveness')}}  (28%)</a>
            </div>
        </div>

         {{-- #Economic Development --}}
         <div >
            <div class="flex " >
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 border-t border-l border-gray-600">
                    <img src="{{ asset('assets/Economicdevelopicon.png') }}" alt=""  class="sm:h-12 h-8">
                </div>
                <div class="flex    sm:h-12 h-8  sm:w-2/12   w-3/12 items-center justify-center  bg-edevelopment1" >
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
                <div class="flex flex-col  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center bg-edevelopment2">
                    <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Economic Development')}}</a>
                    <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                </div>
                <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center  bg-edevelopment3">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
            </div>
        </div>

         {{-- #Business Conduct--}}
         <div class="border-l border-gray-600">
            <div class="flex " >
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 ">
                    <img src="{{ asset('assets/handshake.png') }}" alt=""  class="sm:h-12 h-8">
                </div>
                <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #d1af98">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
                <div class="flex  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #8d5d43">
                    <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Business Conduct')}}</a>
                </div>
                <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #5d3c23">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
            </div>
            <div class="flex" >
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8"></div>
                <div class=" w-11/12 bg-gray-300 px-6 py-3">
                    <p class="cursor-pointer underline" @click = "modal1 = true">1. {{__('Business Ethics and Anti-Bribery and Corruption')}}</p>
                    <p class="cursor-pointer underline" @click = "modal2 = true">2. {{__('Board and Senior Management Accountability and Diversity')}}</p>
                    <p class="cursor-pointer underline" @click = "modal3 = true">3. {{__('Contracts Disclosure')}} </p>
                    <p class="cursor-pointer underline" @click = "modal4 = true">4. {{__('Tax Transparency')}}</p>
                    <p class="cursor-pointer underline" @click = "modal5 = true">5. {{__('Beneficial Ownership')}}</p>
                    <p class="cursor-pointer underline" @click = "modal6 = true">6. {{__('Payments to Producing Countries')}}</p>
                    <p class="cursor-pointer underline" @click = "modal7 = true">7. {{__('Lobbying Practices')}}</p>
                    <p class="cursor-pointer underline" @click = "modal8 = true">8. {{__('Responsible Contracting and Sourcing')}}</p>
                </div>
            </div>
         </div>


         {{-- #Lifecycle Management--}}
         <div class=" border-l border-gray-600">
            <div class="flex ">
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8">
                    <img src="{{ asset('assets/lifecycle.png') }}" alt=""  class="sm:h-12 h-8">
                </div>
                <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #cf95c2">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
                <div class="flex flex-col  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #a71681">
                    <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Lifecycle Management')}}</a>
                    <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                </div>
                <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #6f0954">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
            </div>

         </div>


         {{-- #Community Wellbeing--}}
         <div class=" border-l border-gray-600">
            <div class="flex ">
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8">
                    <img src="{{ asset('assets/Communitywel.png') }}" alt=""  class="sm:h-12 h-8">
                </div>
                <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #f9b567">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
                <div class="flex flex-col border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #ef7d00">
                    <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Community Wellbeing')}}</a>
                    <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                </div>
                <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #c54409">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
            </div>
         </div>



        {{-- #Working Conditions--}}
        <div class=" border-l border-gray-600">
            <div class="flex ">
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8">
                    <img src="{{ asset('assets/WorkingConditions.png') }}" alt=""  class="sm:h-12 h-8">
                </div>
                <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #f18d6e">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
                <div class="flex flex-col  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #e5231b">
                    <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Working Conditions')}}</a>
                    <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                </div>
                <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #931004">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
            </div>

        </div>



        {{-- #Environmental Responsibility--}}
        <div  class="border-gray-600  border-l border-b">
            <div class="flex " >
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 ">
                    <img src="{{ asset('assets/leaf.png') }}" alt=""  class="sm:h-12 h-8">
                </div>
                <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #b9d478">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
                <div class="flex  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #76b82a">
                    <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Environmental Responsibility')}}</a>
                </div>
                <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #0e6f24">
                    <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                </div>
            </div>
            <div class="flex" >
                <div class="w-1/12 flex items-center justify-end sm:h-12 h-8"></div>
                <div class=" w-11/12 bg-gray-300 px-6 py-3">
                    <p class="cursor-pointer underline" @click = "modal11 = true">1. {{__('Environmental Stewardship')}}</p>
                    <p class="cursor-pointer underline" @click = "modal12= true">2. {{__('Tailings Management')}}</p>
                    <p class="cursor-pointer underline" @click = "modal13 = true">3. {{__('Water')}}</p>
                    <p class="cursor-pointer underline" @click = "modal14 = true">4. {{__('Noise and Vibration')}}</p>
                    <p class="cursor-pointer underline" @click = "modal15= true">5. {{__('Biodiversity and Ecosystem Services')}}</p>
                    <p class="cursor-pointer underline" @click = "modal16 = true">6. {{__('Climate Change and Energy Efficiency')}}</p>
                    <p class="cursor-pointer underline" @click = "modal17= true">7. {{__('Hazardous Materials Management')}}</p>
                    <p class="cursor-pointer underline" @click = "modal18 = true">8. {{__('Emergency Preparedness')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
