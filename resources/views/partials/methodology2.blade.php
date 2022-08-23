<div class="grid grid-cols-12" x-data="methodology" >
    @include('partials.skeletonMethodology')
    <ul class=" sm:space-y-2  space-y-0 sm:space-x-0 mb-6 space-x-3 sm:col-span-4 col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
        <li class="">
                <a :class="intro ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class=" font-bold    uppercase cursor-pointer"
                @click="toogleIntro">
                    Introduction
                </a>
        </li>

        {{-- thematic desktop --}}
        <li class="sm:block hidden">
            <a x-show="thematic"  x-cloak style="display: none !important"  class=" font-bold  text-gray-300   uppercase " >
                {{__('Thematic')}}
            </a>
            <ul class="pl-6  mt-2 ">
                <li class= "text-sm  ">
                    <div :class="economicdev ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class=" font-bold     uppercase cursor-pointer"
                    @click="toogleEconomicdev">
                        a. {{__('Economic Development')}}</a>
                    </div>

                    <div :class="qframework1 ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class="pl-6  text-sm mb-3  cursor-pointer"
                    @click="toogleqFramework1">
                        Criteria, metric question, and scoring framework
                    </div>

                </li>

                <li class="text-sm  ">
                    <div :class="bConduct ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class=" font-bold     uppercase cursor-pointer"
                    @click="tooglebConduct">
                        b. {{__('Business Conduct')}}</a>
                    </div>

                    <div :class="qframework2 ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class="pl-6  text-sm mb-3  cursor-pointer"
                    @click="toogleqFramework2">
                        Criteria, metric question, and scoring framework
                    </div>
                </li>
                <li class="text-gray-300 text-sm  ">

                    <div :class="lManagement ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class=" font-bold     uppercase cursor-pointer"
                    @click="tooglelManagement">
                        c. {{__('Lifecycle Management')}}</a>
                    </div>

                    <div :class="qframework3 ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class="pl-6  text-sm mb-3  cursor-pointer"
                    @click="toogleqFramework3">
                        Criteria, metric question, and scoring framework
                    </div>
                </li>
                <li class="text-gray-300 text-sm  ">

                    <div :class="cWellbeing ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class=" font-bold     uppercase cursor-pointer"
                    @click="tooglecWellbeing">
                        d. {{__('Community Wellbeing')}}</a>
                    </div>

                    <div :class="qframework4 ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class="pl-6  text-sm mb-3  cursor-pointer"
                    @click="toogleqFramework4">
                        Criteria, metric question, and scoring framework
                    </div>
                </li>
                <li class="text-gray-300 text-sm  ">
                    <div :class="wCondition ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class=" font-bold     uppercase cursor-pointer"
                    @click="tooglewCondition">
                        e. {{__('Working Conditions')}}</a>
                    </div>

                    <div :class="qframework5 ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class="pl-6  text-sm mb-3  cursor-pointer"
                    @click="toogleqFramework5">
                        Criteria, metric question, and scoring framework
                    </div>
                </li>
                <li class="text-gray-300 text-sm  ">
                    <div :class="eResponsibility ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class=" font-bold     uppercase cursor-pointer"
                    @click="toogleeResponsibility">
                        f. {{__('Environmental Responsibility')}}</a>
                    </div>

                    <div :class="qframework6 ? 'text-red-700 underline' : 'text-gray-300 hover:underline'"  class="pl-6  text-sm mb-3  cursor-pointer"
                    @click="toogleqFramework6">
                        Criteria, metric question, and scoring framework
                    </div>
                </li>


            </ul>
        </li>

        {{-- toogle thematic mobile --}}
            <div class="flex">
                <template x-if="colorthematic">
                    <a x-show="thematic" @click="thematicDropdown = ! thematicDropdown"  class=" font-bold underline  text-red-700  uppercase  items-center sm:hidden inline-flex" >
                        {{__('Thematic')}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                    </a>
                </template>
                <template x-if="!colorthematic">
                    <a x-show="thematic" @click="thematicDropdown = ! thematicDropdown"  class=" font-bold  text-gray-300  uppercase  items-center sm:hidden inline-flex" >
                        {{__('Thematic')}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                    </a>
                </template>
                {{-- <a x-show="thematic" @click="thematicDropdown = ! thematicDropdown"  class=" font-bold  text-gray-300   uppercase  items-center sm:hidden inline-flex" >
                    {{__('Thematic')}}
                    <template x-if="colorthematic">
                        <script>console.log('hi')</script>
                    </template>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </a> --}}
            </div>
    </ul>

    {{-- thematic mobile --}}
    <div class="w-full bg-black col-span-12 -mt-6 mb-2 rounded sm:hidden block" x-show="thematicDropdown" x-cloak style="display: none !important" x-transition @click.away="thematicDropdown = false">
        <ul class="pl-6  mt-2 ">
            <li class= "text-sm  ">
                <template x-if="economicdev">
                    <a class="uppercase underline text-red-700 cursor-pointer"
                    @click="toogleEconomicdev"
                    >a. {{__('Economic Development')}}</a>
                </template>
                <template x-if="!economicdev">
                    <a class="uppercase hover:underline text-gray-300  cursor-pointer"
                    @click="toogleEconomicdev"
                    >a. {{__('Economic Development')}}</a>
                </template>
                <template x-if="qframework1">
                    <p class="pl-6 text-red-700 text-sm mb-3 underline cursor-pointer"
                    @click="toogleqFramework1"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
                <template x-if="!qframework1">
                    <p class="pl-6 text-gray-300 text-sm mb-3 hover:underline cursor-pointer"
                    @click="toogleqFramework1"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>

            </li>

            <li class="text-sm  ">
                <template x-if="bConduct">
                    <a class="uppercase underline text-red-700 cursor-pointer"
                    @click="tooglebConduct"
                    >b. {{__('Business Conduct')}}</a>
                </template>
                <template x-if="!bConduct">
                    <a class="uppercase hover:underline text-gray-300  cursor-pointer"
                    @click="tooglebConduct"
                    >b. {{__('Business Conduct')}}</a>
                </template>
                <template x-if="qframework2">
                    <p class="pl-6 text-red-700 text-sm mb-3 underline cursor-pointer"
                    @click="toogleqFramework2"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
                <template x-if="!qframework2">
                    <p class="pl-6 text-gray-300 text-sm mb-3 hover:underline cursor-pointer"
                    @click="toogleqFramework2"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>

                {{-- <a class="uppercase">b. </a> --}}
                {{-- <p class="pl-6 text-gray-300 text-sm mb-3">Criteria, metric question, and scoring framework</p> --}}
            </li>
            <li class="text-gray-300 text-sm  ">
                <template x-if="lManagement">
                    <a class="uppercase underline text-red-700 cursor-pointer"
                    @click="tooglelManagement"
                    >c. {{__('Lifecycle Management')}}</a>
                </template>
                <template x-if="!lManagement">
                    <a class="uppercase hover:underline text-gray-300  cursor-pointer"
                    @click="tooglelManagement"
                    >c. {{__('Lifecycle Management')}}</a>
                </template>
                <template x-if="qframework3">
                    <p class="pl-6 text-red-700 text-sm mb-3 underline cursor-pointer"
                    @click="toogleqFramework3"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
                <template x-if="!qframework3">
                    <p class="pl-6 text-gray-300 text-sm mb-3 hover:underline cursor-pointer"
                    @click="toogleqFramework3"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
            </li>
            <li class="text-gray-300 text-sm  ">
                <template x-if="cWellbeing">
                    <a class="uppercase underline text-red-700 cursor-pointer"
                    @click="tooglecWellbeing"
                    >d. {{__('Community Wellbeing')}}</a>
                </template>
                <template x-if="!cWellbeing">
                    <a class="uppercase hover:underline text-gray-300  cursor-pointer"
                    @click="tooglecWellbeing"
                    >d. {{__('Community Wellbeing')}}</a>
                </template>
                <template x-if="qframework4">
                    <p class="pl-6 text-red-700 text-sm mb-3 underline cursor-pointer"
                    @click="toogleqFramework4"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
                <template x-if="!qframework4">
                    <p class="pl-6 text-gray-300 text-sm mb-3 hover:underline cursor-pointer"
                    @click="toogleqFramework4"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
            </li>
            <li class="text-gray-300 text-sm  ">
                <template x-if="wCondition">
                    <a class="uppercase underline text-red-700 cursor-pointer"
                    @click="tooglewCondition"
                    >e. {{__('Working Conditions')}}</a>
                </template>
                <template x-if="!wCondition">
                    <a class="uppercase hover:underline text-gray-300  cursor-pointer"
                    @click="tooglewCondition"
                    >e. {{__('Working Conditions')}}</a>
                </template>
                <template x-if="qframework5">
                    <p class="pl-6 text-red-700 text-sm mb-3 underline cursor-pointer"
                    @click="toogleqFramework5"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
                <template x-if="!qframework5">
                    <p class="pl-6 text-gray-300 text-sm mb-3 hover:underline cursor-pointer"
                    @click="toogleqFramework5"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
            </li>
            <li class="text-gray-300 text-sm  ">
                <template x-if="eResponsibility">
                    <a class="uppercase underline text-red-700 cursor-pointer"
                    @click="toogleeResponsibility"
                    >f. {{__('Environmental Responsibility')}}</a>
                </template>
                <template x-if="!eResponsibility">
                    <a class="uppercase hover:underline text-gray-300  cursor-pointer"
                    @click="toogleeResponsibility"
                    >f. {{__('Environmental Responsibility')}}</a>
                </template>
                <template x-if="qframework6">
                    <p class="pl-6 text-red-700 text-sm mb-3 underline cursor-pointer"
                    @click="toogleqFramework6"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
                <template x-if="!qframework6">
                    <p class="pl-6 text-gray-300 text-sm mb-3 hover:underline cursor-pointer"
                    @click="toogleqFramework6"
                    >Criteria, metric question, and scoring framework
                    </p>
                </template>
            </li>


        </ul>
    </div>
    <div class="sm:col-span-8 col-span-12 space-y-1">
        {{-- intro --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="intro" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">Introduction</h1>
            <h1 class="text-1xl font-semibold ">The RMI Framework 2020</h1>
            <p class="mb-4">This Framework document sets out the core content ofthe Responsible Mining Index (RMI) 2020. It provides acomprehensive reference of the major aspects of responsiblemining, based on society expectations of large-scale miningcompanies. As an extract of the RMI Methodology 2020, theframework includes information on a set of 43 topics, providingbrief overviews of each topic as well as the indicators andmetrics used in the RMI assessment to measure miningcompany policies and practices on these topics.</p>
            <h1 class="text-1xl font-semibold ">Responsible Mining Index</h1>
            <p class="mb-4">
                The biennial Responsible Mining Index (RMI), produced bythe Responsible Mining Foundation, is an evidence-basedassessment of large-scale mining companies’ policies andpractices, both at corporate and mine-site level, on a range ofeconomic, environmental, social and governance (EESG) issues.
            </p>
            <p class="mb-4">
                RMI assesses companies from the perspective of societyexpectations of large-scale mining companies and examinesthe extent to which companies are addressing EESG issues in asystematic manner across all their mining activities and throughoutthe project lifecycle. The assessment is based on publiclyavailable information on the companies and their mine sites.
            </p>
            <p class="mb-4">
                The methodology and scope of RMI have been developed inconsultation with the Foundation’s wide network of expertsand a broad range of stakeholders, including mining-affectedcommunities, civil society organisations, people’s movements, labour unions, national and international NGOs, governmentbodies, industry associations, mining companies, multistakeholderinitiatives, multilateral organisations, investors,academics, consultants and others. In particular, the focusof the RMI assessment on society expectations of miningcompanies has been informed by two rounds of discussionworkshops with mining-affected communities and civil societyin producing countries, including Côte d’Ivoire, India, Indonesia, Mongolia, Peru and South Africa.
            </p>
            <h1 class="text-1xl font-semibold ">Scope of RMI 2020</h1>
            <p class="mb-4">
                The RMI assessment covers 43 topics, grouped into six broad thematic areas.
            </p>
            <p class="mb-4">
                The RMI assessment focuses largely on company-widepolicies and practices, using three types of indicators (or ‘measurement areas’):
                <ul class="list-disc px-5 mb-4">
                    <li> <a class="font-semibold">Commitment </a>indicators assess the extent to whichcompanies have produced formalised commitments,endorsed by senior management, and assigned responsibilities and resources to implement these policies.</li>
                    <li> <a class="font-semibold">Action </a>indicators assess the extent to which companies aresystematically putting in place measures to improve andmaximise the potential EESG benefits and avoid, minimise or mitigate the negative EESG impacts of their activities.</li>
                    <li> <a class="font-semibold">Effectiveness </a>indicators assess the extent to whichcompanies are tracking, reviewing and acting to improve their performance on managing EESG issues.</li>
                </ul>
            </p>
            <p>
                In addition, the RMI assessment also includes a smaller setof mine-site indicators to assess mine-site-levelactions onthe following topics: local employment, local procurement,post-closure viability of communities, community grievances,worker grievances, air quality, water quality, water quantity, tailings management, and emergency preparedness.
            </p>

        </div>

        {{-- economicdev --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="economicdev" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Economic Development')}}</h1>
            <p>Not available for 2021</p>
        </div>

        {{-- qframework1 --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="qframework1" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Economic Development')}}</h1>
            <p>Not available for 2021</p>
        </div>

        {{-- bconduct --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="bConduct" x-transition x-cloak style="display: none !important" >
            <h1 class="text-2xl font-semibold mb-4">{{__('Business Conduct')}}</h1>
            <p class="mb-4">Mining companies, like other global businesses, areanswerable to their owners and shareholders, whetherthese be private individuals, corporations, governmentsor taxpayers. They are also increasingly being held toaccount by stakeholders and the global marketplace,which expect companies to apply ethical businesspractices and sound systems of corporate governanceand transparency to their operations. In response to thisdemand some mining companies have made commitmentsto more responsibly manage the economic, environmental,social and governance (EESG) aspects of their operations.</p>
            <p class="mb-4">Just as a mining company’s economic developmentefforts can contribute to the achievement of the UN’sSustainable Development Goals (SDG) (See Section A) ,responsible business conduct by mining companies can help producing countries progress toward these goals. For example, transparency of mining business practices, especially in countries with weak governance or corruption, not only helps to showcase a company’s good practices, but also can contribute to greater producingcountry accountability (SDG 16) and a higher potential for mineral wealth to reduce poverty (SDG 1) and provide benefits to the whole population.</p>
           <p class="mb-4">Conducting businesses with integrity also enables companies to respect human rights, workers and the environment; protect against corruption; and create value for producing countries and communities affected by mining activities, all of which are important concept swithin the SDG. </p>
        </div>

        {{-- qframework2 --}}
        @include('partials.qframeworkBconduct')

        {{-- lManagement --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="lManagement" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Lifecycle Management')}}</h1>
            <p>Not available for 2021</p>
        </div>

        {{-- qframework3 --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="qframework3" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Lifecycle Management')}}</h1>
            <p>Not available for 2021</p>
        </div>

        {{-- cWellbeing --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="cWellbeing" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Community Wellbeing')}}</h1>
            <p>Not available for 2021</p>
        </div>

        {{-- qframework4 --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="qframework4" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Community Wellbeing')}}</h1>
            <p>Not available for 2021</p>
        </div>

        {{-- wCondition --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="wCondition" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Working Conditions')}}</h1>
            <p>Not available for 2021</p>
        </div>

         {{-- qframework5 --}}
         <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="qframework5" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Working Conditions')}}</h1>
            <p>Not available for 2021</p>
        </div>

        {{-- eResponsibility --}}
        <div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="eResponsibility" x-transition x-cloak style="display: none !important">
            <h1 class="text-2xl font-semibold mb-4">{{__('Environmental Responsibility')}}</h1>
            <p class="mb-4">Large-scale mining typically involves the removal ofvegetation and soil, the diversion of watercourses, and the movement of massive amounts of rock. These activities can permanently transform landscapes and ecosystems, and create temporary impacts such as noise, and water and air emissions, which in turn, may lead to impacts on community health (See D.06).</p>
            <p class="mb-4">When poorly managed, mining can have devastating impacts on the environment, through the catastrophic failures of waste facilities (see F.02), creation of pollution issues that can last hundreds of years, or permanent destruction of biodiversity and ecosystem services upon which communities depend (See F.05).</p>
            <p class="mb-4">Responsible mine management requires that companies understand the important environmental values and take steps to avoid impacting threatened ecosystems and resources that are of high significance to the social and economic wellbeing of communities. Where impacts are not preventable, a ‘mitigation hierarchy approach’ can be followed, which requires that unavoidable impacts be avoided and minimised to the greatest extent possible, damaged landscapes and ecosystems are restored, and companies compensate for remaining impacts (See F.01 and F.05).</p>
            <p class="mb-4">Additionally, a landscape approach to assessing the impacts of a mining project can help a company understand a mine’s incremental impacts when there are other major developments in a region, and plan appropriate mitigation strategies to ensure that the ts do not put human health at risk or cause unacceptable damage to the environment (See F.01).</p>
        </div>

         {{-- qframework6 --}}
         @include('partials.qframeworkEresponsibility')
    </div>
</div>
