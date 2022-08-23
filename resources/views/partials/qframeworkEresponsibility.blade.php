{{-- qframework6 --}}
<div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4" x-show="qframework6" x-transition x-cloak style="display: none !important"
x-data="qframework6">
    <h1 class="text-2xl font-semibold mb-4">{{__('Environmental Responsibility')}}</h1>

    {{-- F.01 --}}
    <h2 class="text-1xl font-semibold cursor-pointer hover:underline "
    @click="toogleF01"
    >F.01 {{__('Environmental Stewardship')}}</h2>
    <div x-show="F01" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 ">
        <p class="mb-4">{{__('Environmental stewardship is the comprehensive understanding and effective management of critical environmental risks and opportunities related to climate change, emissions, waste management, resource consumption, water conservation, and biodiversity and ecosystem services protection.')}}
        </p>
        <p class="mb-4">
            {{__('According to the UN Global Compact, traditional corporate environmental management approaches, based largely on compliance and narrow risk assessments, will not be sufficient to successfully address major 21st century environmental challenges such as water scarcity, mitigating and adapting to the effects of climate change, and preventing further loss of global biodiversity. Tackling such issues requires, instead, a comprehensive, cyclical approach to environmental management. ')}}
        </p>
        <p class="mb-4">
            {{__('Companies are increasingly adopting a cyclical “Plan, Do, Check, Act” management approach to environmental protection. Basic elements in this type of environmental management system (EMS) include: setting environmental objectives, assessing potential environmental risks and impacts, preventing and mitigating adverse impacts, carrying out environmental monitoring and evaluation (M&E), and reporting on its actions and effectiveness. Environmental management plans then guide the necessary actions, and are updated when M&E or changes in mining processes necessitate more effective strategies to meet environmental objectives.')}}
        </p>
        <p class="mb-4">
            {{__('While robust EMS processes are important, they are not necessarily enough to guarantee environmental protection that also meets the needs of affected communities. There is increasing recognition of the interconnectedness of the environmental, social and economic challenges confronting the world; and that solutions aimed at eradicating poverty and promoting environmental protection and sustainable economic growth require integrated planning and assessment, and a management approach that takes into consideration the wide-ranging direct, indirect, induced and cumulative impacts that a particular project can have in the broader landscape and regional contexts.')}}
        </p>
        <p class="mb-4">
            {{__('Environmental Impact Assessment (EIA) is a tool, often required by law but also used voluntarily by some companies, to assess the potential direct, indirect and cumulative impacts of a proposed project, and evaluate alternative project designs. Regular updates of these assessments (rather than just a one-off EIA) will be required in order to inform companies’ environmental management strategies. Companies committed to effectively managing their environmental impacts will implement a mitigation hierarchy that prioritises the prevention of negative impacts to the extent possible, minimises unavoidable impacts, and restores damaged landscapes and resources to functioning and productive ecosystems that can support plants, wildlife and human activities. Finally, the hierarchy requires that companies compensate or offset any remaining residual impacts.')}}
        </p>
        <p class="mb-4">
            {{__('Increasingly, the scope of environmental impact assessment has been expanding beyond the physical environment. Integrated assessments that combine health, social, economic, human rights, cultural and psychological well-being as well as the physical, biological and geochemical environments, provide a more holistic understanding of the complex interrelationships between the human and natural environments that affect environmental and human health and wellbeing. This awareness helps to ensure that, where possible, mitigation strategies avoid simply trading off one problem for another.')}}
        </p>
        <p class="mb-4">
            {{__('Additionally, planning at the larger landscape or watershed scale helps governments, companies and communities to identify competing land or resource-use objectives and understand the negative cumulative effects of multiple developments. This information, in turn, supports more optimal design and implementation of projects to maximise current and future environmental, as well as economic and social benefits. Increasingly, governments are developing their own national Strategic Environmental Assessments (SEAs) to ensure that environmental aspects are considered effectively in the development of policies and programmes. This offers additional frameworks for companies to harmonize their own EIAs with national priorities and areas of interests, complementing other economic alignments.')}}
        </p>
        <p class="mb-4">
            {{__('Stakeholder engagement is an essential component of credible, effective environmental management. Stakeholders, including members of affected communities and representatives from relevant government agencies, should be included in assessment processes, the development of appropriate mitigation strategies and monitoring programmes.')}}
        </p>
        <p class="mb-4">
            {{__('Together, the integration of environmental management with broader societal considerations, meaningful stakeholder engagement, and public disclosure of environmental management activities can enhance a company’s accountability, and increase the likelihood that its efforts will support the health and livelihoods of communities and leave positive environmental legacies. Effective environmental stewardship, in addition to protecting environmental and social values, is likely to create improved stakeholder relations, increased worker engagement, financial benefits, and a competitive advantage for companies.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #b9d478">
                <a class="transform  -rotate-90">{{__('Commitment')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company commits to manage its environmental impacts systematically, through the mitigation hierarchy approach.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Formalised its commitment, that is endorsed by senior management, to manage its environmental impacts systematically, through the mitigation hierarchy approach?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Assigned senior management or board-level responsibilities and accountability for carrying out this commitment?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>.  {{__('Committed financial and staffing resources to implement this commitment?')}}
                </p>
            </div>
        </div>
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #76b82a">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to ensure its operations conduct and disclose regular assessments of its environmental impacts through an integrated approach that considers the linkages between socio economic and environmental impacts.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has systems in place to ensure its operations:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Identify environmental baseline conditions and changes, through an integrated approach that considers the linkages between socio economic and environmental impacts?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Identify and assess the environmental impacts of their activities, through an integrated approach that considers the linkages between socio-economic and environmental impacts?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Regularly and systematically present and discuss the results of their assessments of environmental impacts with local communities?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- F.02 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleF02"
    >F.02 {{__('Tailings Management')}}</h2>
    <div x-show="F02" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('The excavation or blasting of the rock mass which contains the minerals and metals mined results in large amounts of waste rock of little or no economic value. The remaining ore, where concentrations of minerals and metals are above the “cut-off grade”, goes through a milling and beneficiation process, to extract the minerals and metals from the ore. These operations often use chemicals and generate enormous volumes of residual waste. The wastes, known as tailings, are composed primarily of pulverised rock, water and processing chemicals. Typically, tailings are piped into large surface impoundments, where they are held in by earthen dams. The fluids are recycled, or they evaporate or drain out over time. When tailings storage facilities are full, the wastes may undergo reclamation, such as the planting of vegetation, to stabilise the area.')}}
        </p>
        <p class="mb-4">
            {{__('There are a variety of risks and impacts associated with tailings storage facilities. Tailings usually contain residual processing chemicals and elevated levels of metals, often resulting from the ore characteristics itself. Facilities are prone to seepage, which can result in the contamination of ground and surface water. Impoundments may cover areas that were previously productive farmland or wildlife habitat. Dry tailings can create serious dust problems for nearby communities. And unstable tailings dams can fail catastrophically, releasing large quantities of waste that can smother rivers, bury homes, destroy livelihoods, and seriously impact the environment and local communities.')}}
        </p>
        <p class="mb-4">
            {{__('The disposal of tailings into water bodies (rivers, lakes, sea) presents particular environmental problems as well as human health risks. For example, elevated levels of metals, such as copper, lead, and arsenic can cause direct acute and chronic toxicity and bioaccumulation in fish tissues that may pose risks to human health. Some companies have developed internal standards that prevent riverine or marine disposal, and several major banks have stated they will not finance companies practising marine and/or riverine tailings disposal.')}}
        </p>
        <p class="mb-4">
            {{__('Recent high-profile tailings dam failures have prompted several mining industry reviews and actions by mining companies and other stakeholders including governments and investors, which are expected to lead to improvements in practices that will help to prevent future disasters.')}}
        </p>
        <p class="mb-4">
            {{__('In addition to ensuring that tailings facilities are planned, designed, constructed and managed to the highest standards by competent professionals, there are other critical management practices that can help prevent and minimise impacts from tailings wastes. These include: assigning accountability and responsibility for tailings management at the highest levels of the company; adopting the best available technology; conducting frequent internal reviews of tailings facility performance and ensuring that corrective actions are implemented on schedule; and enabling independent review of site investigation and selection, design, construction, operation, closure and post-closure of tailings facilities, with public disclosure of the findings.')}}
        </p>
        <p class="mb-4">
            {{__('Furthermore, given that tailings management decisions can have long term implications for the communities and natural resources, it is in the interest of all stakeholders that companies engage with potentially affected communities and external experts when assessing risks related to various tailing-facility designs, and in the planning, construction and monitoring of tailings waste facilities. Risks associated with tailings can persist for centuries and the systematic disclosure by mining companies of the exact locations and characteristics of all their tailings facilities ensures this public-interest data is accessible for all the stakeholders and documented for the future generations too.')}}
        </p>
        <p class="mb-4">
            {{__('There is a strong incentive for mining companies to reduce the risks associated with tailings facilities. Failures, whether catastrophic dam bursts or the slow seepage of chemicals into water, can lead to significant health and safety risks for local communities, widespread environmental damage and high clean-up and remediation costs that may ultimately fall on producing country governments. Companies implicated in tailings facility mismanagement suffer huge financial losses, face legal action, loss of social licence to operate, and not only bring reputational damage to themselves, but to the mining industry as a whole.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #b9d478">
                <a class="transform  -rotate-90">{{__('Commitment')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company commits to not use riverine, lake or marine disposal of tailings.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Formalised its commitment, that is endorsed by senior management, to not use riverine, lake or marine disposal of tailings?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Assigned senior management or board-level responsibilities and accountability for carrying out this commitment?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>.  {{__('Committed financial and staffing resources to implement this commitment?')}}
                </p>
            </div>
        </div>
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #76b82a">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('Where applicable, the company publicly discloses information about the location and safety of all its tailings storage facilities.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Publicly discloses the number and exact location of all tailings storage facilities (including those currently active and those under rehabilitation or closed)?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Publicly discloses the construction methods and hazard categories (based on impact assessments) of each of its tailings storage facilities?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Makes these data freely available on its corporate website?')}}
                </p>
            </div>
        </div>

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #0e6f24">
                <a class="transform  -rotate-90">{{__('Effectiveness')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('Where applicable, the company tracks, reviews and acts to improve its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure.')}}
                </h1>
                <p class="italic">
                    {{__('Where applicable, can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, across successive time periods, on its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Carries out third-party audits and/or reviews on the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, on the basis of the findings of these third-party audits, to seek to improve the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- F.03 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleF03"
    >F.03 {{__('Water')}}</h2>
    <div x-show="F03" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Water is a key issue for sustainable development and the growth of economies. It is essential for immediate survival and long term food security, and is intertwined with the development of energy infrastructure. In addition to being a human right, clean water supports healthier and more productive populations and ecosystems.')}}
        </p>
        <p class="mb-4">
            {{__('Water is also a key issue for the global mining industry. Access to a stable water supply is critical for any mining operation, but securing access can be a challenge. As global concerns about water scarcity increase and mines expand into more water-stressed areas, the competition for water resources can create intractable and sometimes violent conflicts between mining companies and communities. These conflicts are often associated with serious human rights abuses, disproportionately suffered by members of affected communities')}}
        </p>
        <p class="mb-4">
            {{__('The sound management of water discharges, which is linked to responsible mine-waste and hazardous materials management, is critical at mines. Mining-related water management involves understanding the current water quality and quantity status and management context in the immediate vicinity of a mine and in the broader catchment or watershed area; assessing the risks to surface water and groundwater from mining activities; and developing and implementing strategies to minimise the risks and impacts on water users and ecosystems. Water quantity and quality should be monitored at the mine site and at downstream locations to determine if mitigation strategies are effective, and whether or not corrective actions might be necessary to improve environmental outcomes.')}}
        </p>
        <p class="mb-4">
            {{__('Increasingly, the mining industry also acknowledges that effective water management relies on positive and transparent engagement with stakeholders. Ongoing dialogue helps communities understand the mine’s water needs, and helps the mining company understand the community’s water use requirements, as well as stakeholders’ needs, expectations and priorities related to water use and water protection.')}}
        </p>
        <p class="mb-4">
            {{__('Transparency around water use and water quality impacts is becoming an expectation for mining stakeholders, and it is now standard practice for companies to report generally on water issues. Some companies, however, are demonstrating leadership around water transparency by making water-monitoring data accessible to affected communities and the general public.')}}
        </p>
        <p class="mb-4">
            {{__('The fear of water contamination can create opposition to mining projects, and actual contamination events can damage livelihoods, destroy positive company-community relations and create short- and long-term costs and financial and legal liabilities for mining companies. Conflicts related to water bring reputational, operational, legal, humanitarian, and financial risks to mining projects. Mining companies that engage with communities in the planning, management and monitoring of water, and are transparent about their water impacts are more likely to establish the trust with communities that is necessary to avoid conflicts and secure the social licence to operate.')}}
        </p>
        <p class="mb-4">
            {{__('Implementing leading social and technical water management practices, such as increasing the efficiency of water use, can also help companies reduce operating costs and potential environmental fines, expedite permitting processes, facilitate mine expansions, secure access to resources (water, ore, land), and preserve or improve a company’s reputation.')}}
        </p>
        {{-- detail --}}

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #76b82a">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to ensure its operations design and implement water stewardship strategies and plans, based on a catchment-level approach, to address water security in the affected area for current and future water users and the environment.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Has systems in place to ensure its operations develop water stewardship strategies and plans, based on a catchment-level approach, to respect the water needs and rights of current and future water users and the environment?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Has systems in place to ensure its operations consult with potentially-affected water users in the development of these water stewardship strategies and plans?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Systematically tracks the implementation of these water stewardship strategies?')}}
                </p>
            </div>
        </div>

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #0e6f24">
                <a class="transform  -rotate-90">{{__('Effectiveness')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{{__('The company tracks, reviews and acts to improve its performance on reducing its water consumption.')}}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, against targets and across successive time periods, on its performance on reducing its water consumption?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its measures taken to reduce its water consumption?')}}
                </p>
                <p class="mb-6">
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to reduce its water consumption?')}}
                </p>

                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company tracks, reviews and acts to improve its performance on reducing its adverse impacts on water quality.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, against targets and across successive time periods, on its performance on reducing its adverse impacts on water quality?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its measures taken to reduce its adverse impacts on water quality?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to reduce its adverse impacts on water quality?')}}
                </p>
            </div>

        </div>
    </div>

    {{-- F.04 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleF04"
    >F.04 {{__('Noise and Vibration')}}</h2>
    <div x-show="F04" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Noise is a common source of community concern related to mining. During a mine’s operational phase, noise can be generated 24 hours a day, seven days a week, and a mine may operate for many years. Potentially significant sources of mining related noise and vibrations include helicopters used during exploration, heavy equipment used during mine construction, drilling, blasting, loading and dumping waste rock, screening and crushing, and mineral transport (e.g., corridors for railways, roads and conveyor belts).')}}
        </p>
        <p class="mb-4">
            {{__('Noise may have adverse effects on human health, including stress-related illnesses, sleep disruption, high blood pressure, hearing loss and speech interference. Noise may also lead to social and behavioural effects, including annoyance, which is a widely accepted indicator of human health effects related to environmental noise. Additionally, vibrations from blasting and heavy truck traffic are often felt by nearby residents, and havebeen linked to, or suspected as the cause of, structural damage to homes located close to mine sites.')}}
        </p>
        <p class="mb-4">
            {{__('Wildlife may also be affected by anthropogenic noise. Mining or other industrial noise sources may cause an increase in stress, disruption of natural behaviours, temporary or permanent hearing damage, changes in breeding success, and avoidance of otherwise suitable habitat. The impacts on wildlife may, in turn, have implications for Indigenous Peoples or local communities whose food sources may be affected.')}}
        </p>
        <p class="mb-4">
            {{__('In order to address issues of noise and vibration, mining companies typically include noise assessments as part of their environmental and social impact assessments, and carry out baseline noise studies to gain an understanding of the pre mining noise conditions in communities and the project’s area of operation. Some national or sub-national governments may regulate noise and vibrations. However, even in the absence of regulations, there are internationally accepted standards that can help mining companies gauge acceptable noise and vibration levels at nearby homes, schools, or other noise “receptors.”')}}
        </p>
        <p class="mb-4">
            {{__('There are a variety of mitigation measures that can be employed to minimise the effects of mining-related noise and vibrations on communities and wildlife, including limiting known sources of particularly loud noises or strong vibrations, such as blasting, to daytime hours, as well as muffling or controlling noise and vibrations at their source.')}}
        </p>
        <p class="mb-4">
            {{__('Noise and vibration issues should be discussed during early engagement with stakeholders, and throughout the mine lifecycle. Communities are more likely to be tolerant of mining-related noise and vibrations when companies are transparent and work with them to develop acceptable mitigation strategies. If community concerns are not adequately considered or addressed, these issues can provoke community opposition to mining operations, and create significant strain on community company relationships.')}}
        </p>
        <p class="mb-4">
            {{__('While some noise and vibration mitigation strategies may require an upfront capital investment, they ultimately provide cost savings for the company through increased efficiency and improved occupational health and safety. Effective noise and vibration management also benefits the wider industry by improving community attitudes towards mining activities.')}}
        </p>
        {{-- detail --}}

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #76b82a">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to ensure its operations limit the impacts of noise and vibration on affected communities, structures, properties, and wildlife.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has systems in place to ensure its operations:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Regularly assess, against baseline values, the noise and vibration levels generated by their activities?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Develop strategies and plans to limit the impacts of noise and vibration generated by their activities in the surrounding areas?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Systematically engage with affected communities and other stakeholders in the development of these strategies?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- F.05--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleF05"
    >F.05 {{__('Biodiversity and Ecosystem Services')}}</h2>
    <div x-show="F05" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Biological diversity – or biodiversity – refers to the variety of plants, animals and microorganisms that exist, the genes they contain, and the ecosystems of which they are a part. Ecosystems that are genetically diverse and species-rich are more resilient and adaptable to external stresses, and have a greater ability to recover from disturbances such as floods, fires and diseases. Biodiversity plays a role in stabilising the earth’s climate; it contributes to sustainable livelihoods and economies; and creates conditions that enable cultural diversity to thrive.')}}
        </p>
        <p class="mb-4">
            {{__('The maintenance of global biodiversity is particularly relevant for rural communities in developing countries and for Indigenous Peoples, whose livelihoods and survival may be highly dependent on the ecosystems services supported through biodiversity, such as food, nutrients, medicines, fuel, fibre, flood control, clean drinking water and sacred sites.')}}
        </p>
        <p class="mb-4">
            {{__('Mining companies, like other businesses and society as a whole, rely on ecosystems and the services they provide. However, mining also has the potential to directly affect biodiversity, for example through the clearing of vegetation for roads, removal of primary forests and soils to access ore bodies, the conversion of land, wetlands or water-bodies into waste disposal sites, and planned or unplanned discharges of waste products to the environment. There may also be indirect impacts on biodiversity and ecosystem services from mining, such as increased pressures on wildlife for trade or bushmeat when mining roads are built in previously inaccessible areas, or intensified clearing of land as a result of the in migration of mine workers or others seeking economic opportunities.')}}
        </p>
        <p class="mb-4">
            {{__('Growing awareness of the potential direct, indirect, induced and cumulative impacts of mining on biodiversity and of the dependencies of companies on biodiversity and ecosystem services is leading many mining companies to carry out biodiversity assessments and develop systems and approaches to avoid critical habitats and key biodiversity areas whenever possible.')}}
        </p>
        <p class="mb-4">
            {{__('Some mining companies are also applying the “mitigation hierarchy” as a means of managing biodiversity risks. The mitigation hierarchy is an internationally recognised framework that prioritises avoidance of impacts on biodiversity and ecosystem services, and, if that is not possible, moves to minimisation, restoration and, as a last resort, the offsetting of residual impacts. While impact mitigation is an interactive process throughout the project lifecycle, opportunities for impact avoidance are greatest at the planning phase of development.')}}
        </p>
        <p class="mb-4">
            {{__('Offsetting is the last option in the hierarchy because it comes with a set of risks, including uncertainty of success, economic and governance challenges to sustaining offsets in perpetuity, and the potential for proposed offset projects to be socially or culturally unacceptable to relevant stakeholders. Where offsetting occurs, it should be carefully designed and guided by principles such as replacement of impacted biodiversity on an ecologically-equivalent, or like-for-like or better basis; no net loss and preferably a net gain of biodiversity; consultation with stakeholders to determine acceptable offsets; and creation of long-term mechanisms to fund offset projects.')}}
        </p>
        <p class="mb-4">
            {{__('As with any responsible environmental management system, the identification of risks, development of effective mitigation strategies and monitoring plans include the involvement of relevant stakeholders. Actions may also be designed or reviewed by experienced biologists and other specialists to ensure that mitigation is optimised in accordance with the hierarchy. Increasingly, companies are commissioning independent external audits or oversight to verify whether their biodiversity management strategies are being effectively implemented. Such external oversight is a useful means of building stakeholder trust and confidence that mining activities are not posing significant threats to biodiversity and important ecosystem services.')}}
        </p>
        <p class="mb-4">
            {{__('The business case for responsible biodiversity management is strong. Companies that take a proactive approach to biodiversity and ecosystem services management may experience a competitive advantage as regulatory regimes in areas with increasing pressures on biodiversity shift to more protective policies. Those companies that demonstrate good management practices, including application of the mitigation hierarchy and external audits of their management practices, may secure easier and less costly access to capital, land and resources. Strong approaches to protecting biodiversity and ecosystem services help to build trust with communities, non-governmental organisations, producing country governments and other stakeholders, thus strengthening the company’s social licence to operate.')}}
        </p>
        {{-- detail --}}

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #b9d478">
                <a class="transform  -rotate-90">{{__('Commitment')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company commits to not explore or mine in World Heritage Sites and to respect other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Formalised its commitment, that is endorsed by senior management, to not explore or mine in World Heritage Sites and to respect other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Assigned senior management or board-level responsibilities and accountability for carrying out this commitment?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Committed financial and staffing resources to implement this commitment?')}}
                </p>
            </div>
        </div>
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #0e6f24">
                <a class="transform  -rotate-90">{{__('Effectiveness')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company tracks, reviews and acts to improve its performance on biodiversity and ecosystem services management.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, across successive time periods, on its performance on biodiversity and ecosystem services management?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its measures taken to manage biodiversity and ecosystem services?')}}
                </p>
                <p >
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to manage biodiversity and ecosystem services?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- F.06--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleF06"
    >F.06 {{__('Climate Change and Energy Efficiency')}}</h2>
    <div x-show="F06" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Climate change is a global issue, but the effects are not equally distributed around the globe or even within individual countries. Developing countries are often disproportionately affected, and Indigenous Peoples, and poor and vulnerable groups within society are especially at risk from the impacts of climate change.')}}
        </p>
        <p class="mb-4">
            {{__('As the globe experiences increasing effects related to climate change, such as changes in precipitation, increased frequency of extreme events, increased temperatures and sea level rise, mining companies are being asked by investors and mine stakeholders to identify and disclose climate-related risks and impacts.')}}
        </p>
        <p class="mb-4">
            {{__('In the minerals and metals mining sector, the vast majority of greenhouse gas emissions are directly tied to energy consumption, with emissions primarily produced through the burning of fossil fuels to power buildings and operate mining and processing equipment and vehicles. Mining is an energy intensive undertaking, and future energy consumption is predicted to increase in the mining sector as viable ore deposits become deeper and lower-grade. Coal mining creates additional greenhouse gas emissions such as the release of fugitive methane or carbon dioxide during mining, and subsequent greenhouse gas emissions generated from the burning of coal. Mines may also create a net addition of carbon to the atmosphere through the removal of “carbon pools” such as forests, which may also have impacts on biodiversity.')}}
        </p>
        <p class="mb-4">
            {{__('Many in the mining industry recognise the global challenges related to greenhouse gas emissions and climate change, and companies are increasingly monitoring and publicly reporting on their energy use and greenhouse gas emissions, and are taking steps to reduce energy use and emissions by adopting renewable energy and low-emissions technologies, and improving energy efficiency. Some companies are also beginning to work with communities to assess the risks and develop strategies to plan for, mitigate and adapt to climate change.')}}
        </p>
        <p class="mb-4">
            {{__('There are many potential benefits for companies that proactivelyreduce energy consumption, greenhouse gas emissions and fossil fuel dependency. Those companies investing early in energy efficiency measures may enjoy a competitive advantage over those who lag behind, as increased efficiency can help protect companies from increased fuel costs, mitigate the impact of regulations that may limit or put a price on carbon emissions, and result in better market performance.')}}
        </p>
        <p class="mb-4">
            {{__('Additionally, mines proposed in regions that are vulnerable to climate change are increasingly likely to be faced with scepticism by insurers and investors. As a result, those companies that are transparent about their greenhouse gas emissions, their reduction targets, and their climate adaptation strategies, and can demonstrate a positive track record of reducing emissions and improving energy efficiency, are more likely to be viewed favourably by insurers, investors, and the communities in vulnerable regions, or wherever they hope to operate. Companies that proactively develop strategies to adapt to climate change can also contribute to sustainable development goals on poverty reduction and climate action.')}}
        </p>

        {{-- detail --}}

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #76b82a">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to identify and report on the potential implications of climate change on its current and future operations’ impacts on communities, workers and the environment, and to design and implement appropriate adaptation and transition strategies.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>.  {{__('Has systems in place to ensure its operations identify and report on the potential implications of climate change on their current and future operations’ impacts on communities, workers and the environment?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Has systems in place to ensure its operations develop strategies and plans to address these implications?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Systematically tracks the implementation of these strategies and plans?')}}
                </p>
            </div>
        </div>
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #0e6f24">
                <a class="transform  -rotate-90">{{__('Effectiveness')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company tracks, reviews and acts to improve its performance on managing the greenhouse gas (GHG) emissions generated by its activities and its energy use.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, against targets and across successive time periods, on its performance on managing the greenhouse gas (GHG) emissions generated by its activities and its energy use?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use?')}}
                </p>
                <p class="mb-6">
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, based on the findings of these audits and/or reviews, to seek to continuously improve the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use, in order to minimise them?')}}
                </p>

                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company tracks, reviews and acts to improve its performance on managing energy consumption throughout its operations.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, against targets and across successive time periods, on its performance on managing energy consumption throughout its operations?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its measures taken to manage energy consumption throughout its operations?')}}
                </p>
                <p >
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to manage energy consumption throughout its operations?')}}
                </p>
            </div>
        </div>
    </div>


    {{-- F.07--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleF07"
    >F.07 {{__('Hazardous Materials Management')}}</h2>
    <div x-show="F07" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Hazardous materials are those that represent a risk to human health, property or the environment due to their physical or chemical characteristics. There are a variety of potentially hazardous materials that are generated or used by mining operations.')}}
        </p>
        <p class="mb-4">
            {{__('Some hazardous substances, like mercury, arsenic, lead or cadmium, may be made more available as a result of mining. For example, mercury, which is associated with some gold, silver, copper or zinc deposits, may be mobilised during roasting or smelting, or be leached or released into soils, water or air from tailings. Sulphuric acid, a chemical often used in ore processing and a by-product of mining sulphide-bearing ores, may result in acidic drainage and the release of heavy metals into the environment.')}}
        </p>
        <p class="mb-4">
            {{__('Other hazardous chemicals are used to extract metals and minerals from ore. For example, cyanide is commonly used for processing gold and silver, and may be a minor processing reagent at some base metal mines. Cyanide, if released in the workplace or environment, can be lethal to many living organisms. Nitric acid, ammonium nitrate and fuel oil are often used as blasting agents. In addition to being potential environmental pollutants, these explosives may present a security risk for companies, and should be managed accordingly.')}}
        </p>
        <p class="mb-4">
            {{__('All hazardous materials require sound management of occupational health, environmental and social risks throughout their lifecycles - including during sourcing, transport, storage, use, production, and disposal. Typically, responsible management of hazardous materials prioritises avoidance, such as through the substitution of less hazardous chemicals or processes. Where avoidance is not possible, the leading practice will be to minimise the use or production of hazardous materials, and prevent and control releases and accidents.')}}
        </p>
        <p class="mb-4">
            {{__('These objectives can be addressed through the ongoing assessment of hazards and preparation of hazards materials risk management plans. Further measures include the implementation of actions such as education and training programmes for workers, contractors and communities; equipment and facility inspections and maintenance; monitoring of the concentrations of hazardous materials in wastes; and the development of procedures to address residual risks that cannot be prevented or controlled.')}}
        </p>
        <p class="mb-4">
            {{__('If not properly managed, the release of hazardous substances into the workplace or the environment can have severe and long-lasting negative impacts on water quality, the health of ecosystems, workers and local communities. It may also have reputational and financial ramifications for companies or governments that must bear the costs of remediating contamination and provide compensation to impacted workers or community members.')}}
        </p>
         {{-- detail --}}

         <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #76b82a">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to ensure its operations identify and assess potential risks related to the transportation, handling, storage, emission and disposal of hazardous materials, and to design and implement strategies and plans to address identified risks.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Has systems in place to ensure its operations identify and assess the risks related to their use of hazardous materials?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Has systems in place to ensure its operations develop strategies and plans to address these risks?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Systematically tracks the implementation of these strategies and plans?')}}
                </p>
            </div>
        </div>
    </div>


    {{-- F.08--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleF08"
    >F.08 {{__('Emergency Preparedness')}}</h2>
    <div x-show="F08" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Large-scale mines carry significant operational risks. The release or spill of hazardous chemicals, tailings dam failures, explosions, fires and a range of other possible accidents pose risks to mineworkers and nearby communities. Accidents may be related to human errors, equipment failure, or poor management of mine wastes or hazardous materials. Natural forces, such as earthquakes, floods, cyclones or forest fires mayalso cause or compound emergencies at mining operations.')}}
        </p>
        <p class="mb-4">
            {{__('Mining-related accidents or incidents may lead to significant and long-lasting impacts, including environmental damage, property damage, injuries, loss of life and psychological trauma. They may also cause significant financial losses for communities, governments and companies, and damage to the image of the mining industry as a whole.')}}
        </p>
        <p class="mb-4">
            {{__('Despite best efforts, mining-related accidents and emergencies can never entirely be prevented. However, mining companies, in collaboration with local governments, workers and communities, can develop and implement crisis management and emergency preparedness policies, training programmes and procedures to minimise the negative consequences of such emergencies.')}}
        </p>
        <p class="mb-4">
            {{__('Guidance has been developed to help mining companies prepare themselves, their workers and local communities for mining-related emergencies. The United Nations Environment Programme and others have recommended that companies adopt a collaborative approach to emergency response planning that involves local authorities, emergency responders and community members in the identification of potential mining-related accidents; the development of strategies to reduce and manage identified risks; and the creation of emergency response plans. To increase the effectiveness of emergency response plans, mining companies can test them with potentially affected parties and communicate them to the community-at-large so that key actors are prepared to respond effectively to a range of emergency scenarios.')}}
        </p>
        <p class="mb-4">
            {{__('A collaborative approach to emergency response can help to reduce community fears about potential mining-related impacts, reduce the risks to vulnerable populations that are often hit hardest and longest by disasters and emergencies, and build greater confidence and trust between mining operations and communities. In the event of a mining-related accident, well planned emergency response may reduce human casualties, limit impacts on property and the environment, and minimise financial losses to the company.')}}
        </p>
        <p class="mb-4">
            {{__('Financial preparedness is an additional component of responsible emergency preparedness. The leading practice is for companies to anticipate and insure against the cost of reparation for accidents or natural catastrophes, to ensure that funds are available to implement effective emergency response, pay compensation for damages, injury or loss of life, and for companies to fund recovery and reconstruction in a timely and efficient manner.')}}
        </p>

        {{-- detail --}}

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #76b82a">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to ensure its operations engage local authorities, workers and communities in developing, communicating and testing emergency preparedness and response plans.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has systems in place to ensure its operations:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Develop and maintain emergency preparedness and response plans?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Systematically engage with local stakeholders (e.g. local authorities and communities) in the design of emergency response plans?')}}
                </p>
                <p class="mb-6">
                    <a class="font-semibold">c</a>. {{__('Systematically engage with local stakeholders in the testing of these response plans?')}}
                </p>

                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company publicly discloses all relevant information about financial assurance that is provided for disaster management and recovery, throughout its operations.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Publicly discloses all relevant information about financial assurance that is provided for disaster management and recovery?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Includes in this disclosure information on specific financial assurance provisions on a mine-site-disaggregated basis?')}}

                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Updates this information on a yearly basis?')}}
                </p>
            </div>
        </div>
    </div>

    <p class="italic font-semibold mt-6 mb-2">Scoring Framework:</p>

    {{-- F.01.1--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF011"
    >F.01.1 The company commits to manage its environmental impacts systematically, through the mitigation hierarchy approach.<a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F011" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4 ">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has:</p>
            {{-- a --}}
            <div>
                <p class="mb-4"><a class="font-semibold ">a.</a> Formalised its commitment, that is endorsed by senior management, to prevent all direct and indirect forms of bribery and corruption?</p>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                    <p class="col-span-11">The company commits to manage its environmental impacts systematically, through the mitigation hierarchy approach, in a formal document which covers all of the company’s activities which is endorsed by senior management.</p>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                    <div class="col-span-11" >
                        <p >The company commits to manage its environmental impacts systematically, through the mitigation hierarchy approach, in a formal document which covers all of the company’s activities which is endorsed by senior management.</p>
                        <p>OR</p>
                        <p>The company commits to manage its environmental impacts systematically in a formal document which is endorsed by senior management, but does not cover all of the company’s activities</p>
                        <p>OR</p>
                        <p>The company commits to manage its environmental impacts systematically in a formal document which is endorsed by senior management, but it only covers some limited aspects of managing its environmental impacts and/or does not explicitly refer to the mitigation hierarchy approach.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12  mb-4">
                    <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                    <p  class="col-span-11"> The company refers to the need for managing its environmental impacts systematically, but does not make a clear commitment in a formal document which is endorsed by senior management.</p>
                </div>
            </div>

            {{-- b --}}
            <div>
                <p class="mb-4"><a class="font-semibold">b.</a> Assigned senior management or board-level responsibilities and accountability for carrying out this commitment?</p>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                    <p class="col-span-11">The company has a senior management level and/or Board level function responsible for carrying out this commitment, and there is detailed information on its actual scope, role and accountability.</p>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                    <div class="col-span-11">
                        <p>The company has a senior management level and/or Board level function responsible for carrying out this commitment but there is limited information on its actual scope, role and accountability</p>
                        <p>OR</p>
                        <p>The company has a senior-management-level or Board level function responsible for carrying out this commitment, but not on a company-wide basis</p>
                        <p>OR</p>
                        <p>The company provides evidence qualifying for a score of 2, but the company scored 1 under a).</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                    <div class="col-span-11">
                        <p >The company briefly refers to a function at the senior management level and/or Board level for carrying it out this commitment, but does not provide any additional information</p>
                        <p>OR</p>
                        <p>The company provides evidence qualifying for a score of 2 or 1, but the company scored 0.5 under a).</p>
                    </div>
                </div>
            </div>

            {{-- c --}}
            <div>
                <p class="mb-4"><a class="font-semibold">c.</a> Committed financial and staffing resources to implement this commitment?</p>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                    <div class="col-span-11">
                        <p>The company has company-wide operational-level teams responsible for coordinating efforts on managing its environmental impacts systematically, through the mitigation hierarchy approach</p>
                        <p>OR</p>
                        <p>The company conducts company-wide awareness and/or training programmes and/ or workshops related to its commitment, and there is detailed evidence of the specific financial and/or staffing resources commited.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                    <div class="col-span-11">
                        <p>The company conducts company-wide awareness and/or training programmes and/ or workshops related to its commitment to prevent bribery and corruption, and there is detailed evidence of the specific financial and/or staffing resources committed.</p>
                        <p>OR</p>
                        <p>The company has company-wide operational-level teams responsible for coordinating efforts on managing its environmental impacts systematically, but only on some limited aspects of managing its environmental impacts or not through the mitigation hierarchy approach</p>
                        <p>OR</p>
                        <p>The company allocates esources to implement this commitment (awareness/training programmes/workshops and/or responsible teams), but not on a company-wide basis</p>
                        <p>OR</p>
                        <p>The company provides evidence qualifying for a score of 2, but the company scored 1 under a).</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                    <div class="col-span-11">
                        <p >The company has plans related to the implementation of this commitment, but there is limited information on the actual financial and staffing resources committed</p>
                        <p>OR</p>
                        <p>The company provides evidence qualifying for a score of 2 or 1, but the company scored 0.5 under a).</p>
                    </div>
                </div>
            </div>
    </div>


     {{-- F.01.2--}}
     <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
     @click="toogleF012"
     >F.01.2 The company has systems in place to ensure its operations conduct and disclose regular assessments of its environmental impacts through an integrated approach that considers the linkages between socio-economic and environmental impacts. <a class="text-red-500">(/6.00)</a></h2>
     <div x-show="F012" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has systems in place to ensure its operations:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold">a.</a> Identify environmental baseline conditions and changes, through an integrated approach that considers the linkages between socio-economic and environmental impacts?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations identify environmental baseline conditions and changes, through an integrated approach that considers the linkages between socio-economic and environmental impacts, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p>The company has company-wide systems in place to ensure its operations identify environmental baseline conditions and/or changes through an integrated approach that considers the linkages between socio-economic and environmental impacts, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure ensure its operations identify environmental baseline conditions and/or changes through an integrated approach that considers the linkages between socio-economic and environmental impacts, and there is detailed evidence of the scope and/or content of these systems., but not on a company-wide basis.</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure operations identify environmental baseline conditions and/or changes, but not through an integrated approach that considers the linkages between socio-economic and environmental impacts.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of systems to ensure its operations identify environmental baseline conditions and/or changes, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of one or more isolated cases of operations having identified environmental baseline conditions and/or changes, but there is no evidence of company-wide approaches or systems in place.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">b.</a> Identify and assess the environmental impacts of their activities, through an integrated approach that considers the linkages between socio-economic and environmental impacts?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations identify and assess the environmental impacts of their activities through an integrated approach that considers the linkages between socio-economic and environmental impacts, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company has systems in place to ensure its operations identify and assess the environmental impacts of their activities through an integrated approach that considers the linkages between socio-economic and environmental impacts, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure operations identify and assess the environmental impacts of their activities but not through an integrated approach that considers the linkages between socio-economic and environmental impacts</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations identify and assess the environmental impacts of their activities through an integrated approach that considers the linkages between socio-economic and environmental impacts, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of systems in place to ensure its operations identify and assess the environmental impacts of their activities, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two operations having having identified and assessed the environmental impacts of their activities.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">c.</a> Regularly and systematically present and discuss the results of their assessments of environmental impacts with local communities?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has systems in place to ensure its operations regularly and systematically present and discuss the results of their assessments of environmental impacts with local communities, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to ensure its operations present and/or discuss the results of their assessments of environmental impacts with local limited evidence of the scope and/or content of these systems.</p>
                    <p>OR</p>
                    <p>The company has systems in to ensure its operations present and/or discuss the results of their assessments of environmental impacts with local communities, and there is detailed evidence of the scope and/or content of these system, but not on a company-wide basis</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of systems to present and/ or discuss the results of its assessments of environmental impacts with local communities, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two cases of operations having presented and/or discussed the results of their assessments of environmental impacts with local communities.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- F.02.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF021"
    >F.02.1 The company commits to not use riverine, lake or marine disposal of tailings. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F021" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Formalised its commitment, that is endorsed by senior management, to not use riverine,
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company commits to not use riverine, lake or marine disposal of tailings in a dedicated formal document which covers all of the company’s activities and is endorsed by senior management.</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p>The company commits to not use riverine, lake or marine disposal of tailings in a formal document which covers all of the company’s activities, but there is no evidence that this commitment is endorsed by senior management</p>
                    <p>OR</p>
                    <p>The company commits to not use riverine, lake or marine disposal of tailings in a formal document which is endorsed by senior management, but does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company commits to not use riverine, lake or marine disposal of tailings in a formal document which is endorsed by senior management, but it only covers some limited aspects of not using riverine, lake or marine disposal of tailings</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company refers to not using riverine, lake or marine disposal of tailings, but does not make a clear commitment in a formal document which is endorsed by senior management.</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Assigned senior management or board-level responsibilities and accountability for carrying out this commitment?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has a senior management level and/or Board level function responsible for carrying out this commitment, and there is detailed information on its actual scope, role and accountability.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p>The company has a senior management level and/or Board level function responsible for carrying out this commitment, but there is limited information on its actual scope, role and accountability</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2, but the company scored 1 under a).</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company briefly refers to a function at the senior management level and/or Board level for carrying out this commitment, but does not provide any additional information</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2 or 1, but the company scored 0.5 under a).</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Committed financial and staffing resources to implement this commitment?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <div class="col-span-11">
                    <p>The company has company-wide operational-level teams responsible for coordinating efforts on not using riverine, lake or marine disposal of tailings</p>
                    <p>OR</p>
                    <p>The company conducts company-wide awareness and/or training programmes and/ or workshops related ot its commitment, and there is detailed evidence of the specific financial and/or staffing resources commited.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company conducts company-wide awareness and/or training programmes and/or workshops related to coordinating efforts on not using riverine, lake or marine disposal of tailings, but there is limited information on the actual financial and/or staffing resources committed</p>
                    <p>OR</p>
                    <p>The company has company-wide operational-level teams responsible for coordinating efforts on not using riverine, lake or marine disposal of tailings, but only on some limited aspects of not using riverine, lake or marine disposal of tailings</p>
                    <p>OR</p>
                    <p>The company allocates financial and staffing resources to implement this commitment (awareness/training programmes/workshops and/or responsible teams), but not on a company-wide basis</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2, but the company scored 1 under a).</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company provides limited evidence of allocating financial and staffing resources to implement this commitment</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2 or 1, but the company  0.5 under a).</p>
                </div>
            </div>
        </div>
    </div>


    {{-- F.02.2 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF022"
    >F.02.2 Where applicable, the company publicly discloses information about the location and safety of all its tailings storage facilities. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F022" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Publicly discloses the number and exact location of all tailings storage facilities (including those currently active and those under rehabilitation or closed)?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses the exact locations of all its tailings storage facilities, including those currently active and those under rehabilitation or closed.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company discloses the exact locations of some of its tailings storage facilities, including those currently active and those under rehabilitation or closed</p>
                    <p>OR</p>
                    <p>The company discloses the approximate locations of all its tailings storage facilities, including those currently active and those under rehabilitation or closed.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses the approximate locations of some of its tailings storage facilities</p>
                    <p>OR</p>
                    <p>The company discloses the total number of its tailings storage facilities.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Publicly discloses the construction methods and hazard categories (based on impact assessments) of each of its tailings storage facilities?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company publicly discloses the construction methods and hazard categories (based on impact assessments) of all its tailings storage facilities.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company publicly discloses the construction methods and hazard categories (based on impact assessments) of some of its tailings storage facilities</p>
                    <p>OR</p>
                    <p>The company publicly discloses the construction methods or hazard categories (based on impact assessments) of all its tailings storage facilities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company publicly discloses the construction methods or hazard categories (based on impact assessments) of a limited number of its tailings storage facilities.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Makes this information freely available on its corporate website?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company scored 2pts on a) and b) and the information for a) and b) is freely available on the company’s corporate website</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company scored 1pt on a) and b) and the corresponding evidence is freely available on the company‘s corporate website</p>
                    <p>OR</p>
                    <p>The company scored more than 1pt on a) or b) but 1pt on the other and the corresponding evidence is freely available on the company‘s corporate website</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company scored 0.5pt on a) and/or b) and the corresponding evidence is freely available on the company‘s corporate website</p>
                    <p>OR</p>
                    <p>The company scored more than 0.5pt on a) or b) but 0.5pt on the other and the corresponding evidence is freely available on the company‘s corporate website</p>
                </div>
            </div>
        </div>
    </div>


{{-- F.02.3 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF023"
    >F.02.3 Where applicable, the company tracks, reviews and acts to improve its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F023" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Where applicable, can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Tracks and discloses data, across successive time periods, on its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent company-wide data (within the assessment period) on its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure, and the data is compared across successive time periods.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p>The company discloses recent company-wide data (within the assessment period) on its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure, but the data is not compared across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on its performance on addressing potential risks related to its tailings facilities, and the data is compared across successive time periods, but does not include seepage and tailings dam failure</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure and the data is compared across successive time periods, but does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company discloses recent data (within the assessment period) on its performance on addressing potential risks related to its tailings facilities, but the data is not compared across successive time periods and does not include seepage and tailings dam failure</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on addressing potential risks related to its tailings facilities, including seepage and tailings dam failure, but the data is not compared across successive time periods and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on addressing potential risks related to its tailings facilities, and the data is compared across successive time periods, but does not include seepage and tailings dam failure and does not cover all of the company’s activities.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Carries out third-party audits and/or reviews on the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on third-party reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses limited data on third-party reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company states that regular reviews and/or audits of the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that wire:were actually conducted, beyond statement.</p>
                    <p>OR</p>
                    <p>The company discloses information on actual third-party reviews/audits of the TSF stability and potential risks conducted across its operations, but there is no evidenceof third-party reviews/audits of the effectiveness of its measures taken to address these potential risks.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, on the basis of the findings of these third-party audits, to seek to improve the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure, and has disclosed information on reviews and/or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to address potential risks related to its tailings facilities, including seepage and tailings dam failure, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
            </div>
        </div>
    </div>


    {{-- F.03.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF031"
    >F.03.1 The company has systems in place to ensure its operations design and implement water stewardship strategies and plans, based on a catchment-level approach, to address water security in the affected area for current and future water users and the environment. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F031" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it: </p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Has systems in place to ensure its operations develop water stewardship strategies and plans, based on a catchment-level approach, to respect the water needs and rights of current and future water users and the environment?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations develop water stewardship strategies and plans, based on a catchment-level approach, o respect the water needs and rights of current and future water users and the environment, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p>The company has company-wide systems in place to ensure its operations develop water stewardship strategies and plans, based on a catchment-level approach, to respect the water needs and rights of current and future water users and the environment, but there is limited evidence of the scope and content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations develop water stewardship strategies and plans, based on a catchment-level approach, to respect the water needs and rights of current and future water users and the environment, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations develop water stewardship strategies and plands on one of the four dimensions is not addressed.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company provides a limited narrative description of systems to ensure its operations develop water stewardship strategies and plans, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two cases of operations having developed water stewardship strategies and plans.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Has systems in place to ensure its operations consult with potentially-affected water users in the development of these water stewardship strategies and plans?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations consult with potentially-affected water users in the development of these water stewardship strategies and plan, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to ensure its operations consult with potentially-affected water users in the development of these water stewardship strategies and plans, but there is limited evidence of the scope and/or content of these systems.</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations consult with potentiallyaffected water users in the development of these water stewardship strategies and plans, and there is detailed evidence of the scope and/or content of these systems., but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of systems to ensure its operations consult with potentially-affected water users in the development of these water stewardship strategies and plans, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two operations having consulted with potentially-affected water users in the development of these water stewardship strategies and plans.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Systematically tracks the implementation of these water stewardship strategies?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent data (within the assessment period) confirming the systematic, company-wide tracking of the implementation of these strategies and plans.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to systematically track the implementation of these strategies and plans, but there is limited evidence of the actual use of such systems</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) from the tracking of the implementation of strategies and plans at several of its operations, but there is no evidence of a systematic, company-wide approach.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that it tracks the implementation of these water stewardship strategies, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or more isolated cases of operations where the implementation of these strategies and plans is tracked.</p>
                </div>
            </div>
        </div>
    </div>


{{-- F.03.2 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF032"
    >F.03.2 The company tracks, reviews and acts to improve its performance on reducing its water consumption. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F032" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Tracks and discloses data, against targets and across successive time periods, on its performance on reducing its water consumption?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent company-wide data (within the assessment period) on its performance on reducing its water consumption, and the data is compared across successive time periods and against targets.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p>The company discloses recent company-wide data (within the assessment period) on its performance on reducing its water consumption, and the data is compared against targets, but not disclosed across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on its performance on reducing its water consumption, and the data is compared across successive time periods, but not against targets</p>
                    <p>OR</p>
                    <p>The company discloses company-wide data on its performance on reducing its water consumption, and the data is compared against targets and across successive time periods, but the data is outdated (older than the assessment period)</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on reducing its water consumption, and the data is compared across successive time periods and against targets, but does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company discloses recent company-wide data (within the assessment period) on its performance on reducing its water consumption, but the data is not compared against targets and not across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on reducing its water consumption, and the data is compared against targets, but not disclosed across successive time periods and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on reducing its water consumption, and the data is compared across successive time periods, but not against targets and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses data on its performance on reducing its water consumption, and the data is compared against targets and across successive time periods, but the data is outdated (older than the assessment period) and does not cover all of the company’s activities.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Audits and/or reviews the effectiveness of its measures taken to reduce its water consumption?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to reduce its water consumption.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to reduce its water consumption</p>
                    <p>OR</p>
                    <p>The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to reduce its water consumption, but the data does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that regular reviews and/or audits of the effectiveness of its measures taken to reduce its water consumption are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement.</p>
                    <p>OR</p>
                    <p>There is one or multiple isolated site-specific examples of reviews/audits having been conducted on the effectiveness of the measures taken to reduce water consumption, but there is no evidence of a company-wide systematic approach.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to reduce its water consumption?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to reduce its water consumption.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to reduce its water consumption, and has disclosed information on reviews and/or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement.</p>
                    <p>OR</p>
                    <p>The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to reduce its water consumption, but it does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that it integrates the recommendations from these audits and/ or reviews to continuously improve the effectiveness of its measures taken to reduce its water consumption, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
                    <p>OR</p>
                    <p>There is one or more isolated site-specific examples of reviews/audits recommendations having been integrated to continuously improve the effectiveness of the measures taken to reduce water consumption, but there is no evidence of a company-wide systematic approach.</p>
                </div>
            </div>
        </div>
    </div>





    {{-- F.03.3 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF033"
    >F.03.3 The company tracks, reviews and acts to improve its performance on reducing its adverse impacts on water quality. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F033" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a>Tracks and discloses data, against targets and across successive time periods, on its performance on reducing its adverse impacts on water quality?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">2 (Satisfactory evidence) The company discloses recent data (within the assessment period) on its performance on reducing its adverse impacts on water quality showing at least three dimensions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) and overall water quality category, and across successive time periods, and the company discloses improvement targets.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p>1 (Some satisfactory evidence) The company discloses recent company-wide data (within the assessment period) on its performance on reducing its adverse impacts on water quality, showing at least two dimensions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, and the company discloses improvement targets, but data is not disclosed across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on reducing its adverse impacts on water quality, throughout its operations showing at least two dimensnions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, and data is compared across successive time periods, but the company does not disclose improvement targets</p>
                    <p>OR</p>
                    <p>The company discloses data on its performance on reducing its adverse impacts on water quality, throughout its operations showing at least two dimensions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, an the company discloses improvement targets, and the data is compared across successive time periods, but the data is outdated (older than the assessment period)</p>
                    <p>OR</p>
                    <p>The company discloses recent data on its performance on reducing its adverse impacts on water quality showing at least three dimensions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) and overall water quality category, and across successive time periods, and the company discloses improvement targets, but the data disclosed does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company tracks and discloses data on its performance on reducing its adverse impacts on water quality showing only one or two dimensions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) and overall water quality category, and across successive time periods, and the company discloses improvement targets.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company discloses recent company-wide data (within the assessment period) on its performance on reducing its adverse impacts on water quality, but the data is not compared against targets and not across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on reducing its adverse impacts on water quality, showing at least two dimensions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, and the company discloses improvement targets, but data is not disclosed across successive time periods and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on reducing its adverse impacts on water quality, throughout its operations showing at least two dimensnions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, and data is compared across successive time periods, but the company does not disclose improvement targets and the data does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses data on its performance on reducing its adverse impacts on water quality, throughout its operations showing at least two dimensions (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, an the company discloses improvement targets, and the data is compared across successive time periods, but the data is outdated (older than the assessment period) and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on its performance on reducing its adverse impacts on water quality, showing only one dimension (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, and the company discloses improvement targets, but data is not disclosed across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on its performance on reducing its adverse impacts on water quality, throughout its operations showing only one dimensnion (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, and data is compared across successive time periods, but the company does not disclose improvement targets</p>
                    <p>OR</p>
                    <p>The company discloses data on its performance on reducing its adverse impacts on water quality, throughout its operations showing only one dimension (dimensions considered include heavy metals concentration, pH and other conventional variables, hydrocarbons, PCBs and dioxins) or overall water quality category, and the company discloses improvement targets, and the data is compared across successive time periods, but the data is outdated (older than the assessment period)</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Audits and/or reviews the effectiveness of its measures taken to reduce its adverse impacts on water quality?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to reduce its adverse impacts on water quality.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to reduce its adverse impacts on water quality.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that regular reviews and/or audits of the effectiveness of its measures taken to reduce its adverse impacts on water quality are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement.</p>
                    <p>OR</p>
                    <p>There is one or multiple isolated site-specific examples of reviews/audits having been conducted on the effectiveness of the measures taken to reduce adverse impacts on water quality, but there is no evidence of a company-wide systematic approach.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to reduce its adverse impacts on water quality?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to reduce its adverse impacts on water quality.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/ or reviews to continuously improve the effectiveness of its measures taken to reduce its adverse impacts on water quality, and has disclosed information on reviews and/ or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that it integrates the recommendations from these audits and/ or reviews to continuously improve the effectiveness of its measures taken to reduce its adverse impacts on water quality, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
                    <p>OR</p>
                    <p>There is one or more isolated site-specific examples of reviews/audits recommendations having been integrated to continuously improve the effectiveness of the measures taken to reduce adverse impacts on water quality, but there is no evidence of a company-wide systematic approach.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- F.04.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF041"
    >F.04.1 The company has systems in place to ensure its operations limit the impacts of noise and vibration on affected communities, structures, properties, and wildlife. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F041" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has systems in place to ensure its operations:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Regularly assess, against baseline values, the noise and vibration levels generated by their activities?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations regularly assess, against baseline values, the noise and vibration levels generated by their activities, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company has systems in place to ensure its operations assess the noise and vibration levels generated by their activities, but not against baseline values or not on a regular basis</p>
                    <p>OR</p>
                    <p>The company has systems in place to to ensure its operations regularly assess, against baseline values, either the noise or vibration levels generated by their activities</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations regularly assess, against
                        baseline values, the noise and vibration levels generated by their activities, and there
                        is detailed evidence of the scope and content of these systems, but not on a companywide
                        basis.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of systems to ensure its operations assess the noise and vibration levels generated by their activities, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or some isolated cases of operations having assessed the noise and vibration levels generated by their activities, but there is no evidence of a company-wide approach or system.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Develop strategies and plans to limit the impacts of noise and vibration generated by their activities in the surrounding areas?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations develop strategies and plans to limit the impacts of noise and vibration generated by their activities in the surrounding areas, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has systems in place to ensure its operations develop strategies and plans to limit the impacts of noise and/or vibration generated by their activities in the surrounding areas, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations develop strategies and plans to limit the impacts of noise and vibration generated by their activities in the surrounding areas, and there is detailed evidence of the scope and content of these systems, but not a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of its systems to ensure its operations develop strategies and plans to limit the impacts of noise and/or vibration generated by their activities in the surrounding areas, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two operations having developed strategies and plans to limit the impacts of noise and/or vibration generated by their activities in the surrounding areas.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Systematically engage with affected communities and other stakeholders in the development of these strategies?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations engage with affected communities and other stakeholders in the development of these strategies, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to ensure its operations engage with affected communities and other stakeholders in the development of these strategies, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations engage with affected communities and other stakeholders in the development of these strategies, and there is detailed evidence of the scope and content of these systems, but not on a companywide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that it engages with affected communities and other stakeholders in the development of these strategies, but there is no information beyond narrative statement</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two operations having engaged with with affected communities and other stakeholders in the development of these strategies.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- F.05.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF051"
    >F.05.1 The company commits to not explore or mine in World Heritage Sites and to respect other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F051" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Formalised its commitment, that is endorsed by senior management, to not explore or mine in World Heritage Sites and to respect other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company commits to not explore or mine in World Heritage Sites and to respect other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage in a formal document which covers all of the company’s activities and is endorsed by senior management.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company commits to not explore or mine in World Heritage Sites and to respect other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage in a formal document which covers all of the company’s activities, but there is no evidence that this commitment is endorsed by senior management</p>
                    <p>OR</p>
                    <p>The company commits to not explore or mine in World Heritage Sites and to respect other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage in a dedicated formal document which is endorsed by senior management, but does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company commits to not explore or mine in World Heritage Sites in a dedicated formal document which is endorsed by senior management, but it only covers some limited aspects or does not refer to respecting other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company refers to the need for respecting World Heritage Sites and other terrestrial and marine protected areas, but does not make a clear commitment in a formal document which is endorsed by senior management.</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Assigned senior management or board-level responsibilities and accountability for carrying out this commitment?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has a senior management level and/or Board level function responsible for carrying out this commitment and there is detailed information on its actual scope, role and accountability.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has a senior management level and/or Board level function responsible for carrying out this commitment, but there is limited information on its actual scope, role and accountability</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2, but the company scored 1 under a).</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company briefly mentions a function at the senior management level and/or Board level for carrying out this commitment, but does not provide any additional information</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2 or 1, but the company scored 0.5 under a).</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Committed financial and staffing resources to implement this commitment?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <div class="col-span-11">
                    <p >The company has company-wide operational-level teams responsible for coordinating efforts on not exploring or mining in World Heritage Sites and respecting other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage</p>
                    <p>OR</p>
                    <p>The company conducts company-wide awareness and/or training programmes and/ or workshops related to its commitment and there is evidence of the specific financial and/or staffing resources commited.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide operational-level teams responsible for coordinating efforts on not exploring or mining in World Heritage Sites, but only on some limited aspects or there is no reference to respecting other terrestrial and marine protected areas that are designated to conserve cultural or natural heritage.</p>
                    <p>OR</p>
                    <p>The company conducts company-wide awareness and/or training programmes and/ or workshops related to not exploring or mining in World Heritage Sites, but there is limited information on the actual financial and/or staffing resources committed</p>
                    <p>OR</p>
                    <p>The company allocates financial and staffing resources to implement this commitment (awareness/training programmes/workshops and/or responsible teams) but not on a company-wide basis</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2, but the company scored 1 under a).</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides limited evidence of awareness and/or training programmes and/or workshops and these do not relate specifically to World Heritage Sites or protected areas</p>
                    <p>OR</p>
                    <p>The company provides evidence qualifying for a score of 2 or 1, but the company scored 0.5 under a).</p>
                </div>
            </div>
        </div>
    </div>


    {{-- F.05.2 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF052"
    >F.05.2 The company tracks, reviews and acts to improve its performance on biodiversity and ecosystem services management. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F052" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Tracks and discloses data, across successive time periods, on its performance on biodiversity and ecosystem services management?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">2 (Satisfactory evidence) The company tracks and discloses recent data on its performance on biodiversity or ecosystem services management, showing multiple dimensions of tracking (i.e.: land disturbed vs. land restored/rehabilitated; land set aside for conservation/offset areas; conservation/protection of endangered species (fauna/flora); other KPIs…)and across successive time periods.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >1 (Some satisfactory evidence) The company tracks and discloses recent data on its performance on biodiversity or ecosystem services management, showing multiple dimensions of tracking (i.e.: land disturbed vs. land restored/rehabilitated; land set aside for conservation/offset areas; conservation/protection of endangered species (fauna/flora); other KPIs…), but not on a company-wide basis or not across successive time periods</p>
                    <p>OR</p>
                    <p>The company tracks and discloses recent data on its performance on biodiversity or ecosystem services management, on a company-wide basis and across successive time periods, but showing only one dimension of tracking.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses recent data (within the assessment period) on its performance on biodiversity or ecosystem services management, but showing only one dimension of tracking (i.e.: land disturbed vs. land restored/rehabilitated; land set aside for conservation/offset areas; conservation/protection of endangered species (fauna/flora); other KPIs…)</p>
                    <p>OR</p>
                    <p>The company provides only one or two relevant examples</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Audits and/or reviews the effectiveness of its measures taken to manage biodiversity and ecosystem services?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to manage biodiversity or ecosystem services.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to manage biodiversity or ecosystem services.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that regular reviews and/or audits of the effectiveness of its measures taken to manage biodiversity or ecosystem services are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to manage biodiversity and ecosystem services?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually conducted, and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to manage biodiversity or ecosystem services.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to manage biodiversity and ecosystem services, and has disclosed information on reviews and/ or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement</p>
                    <p>OR</p>
                    <p>The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to manage biodiversity or ecosystem services, but it does not cover all of the company’s activities.</p>

                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to manage biodiversity or ecosystem services, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
            </div>
        </div>
    </div>


    {{-- F.06.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF061"
    >F.06.1 The company has systems in place to identify and report on the potential implications of climate change on its current and future  operations’ impacts on communities, workers and the environment, and to design and implement appropriate adaptation and transition strategies. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F061" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Has systems in place to ensure its operations identify and report on the potential implications of climate change on their current and future operations’ impacts on communities, workers and the environment?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations identify and report on the potential implications of climate change on their current and future operations’ impacts on communities, workers and the environment, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company has systems in place to ensure its operations identify or report on the potential implications of climate change on their current or future operations’ impacts on at least two of the following dimensions: communities, workers or the environment</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations identify and report on the potential implications of climate change on their current and future operations’ impacts on communities, workers and the environment, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company has systems in place to ensure its operations identify or report on the potential implications of climate change on their current or future operations’ impacts but only related to one of the following dimensions: communities, workers or the environment.</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Has systems in place to ensure its operations develop strategies and plans to address these implications?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations develop strategies and plans to address these implications, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to ensure its operations develop strategies and plans to address these implications, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations develop strategies and plans to address these implications, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of its systems to ensure its operations develop strategies and plans to address these implications, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two operations having developed strategies and plans to address these implications.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Systematically tracks the implementation of these strategies and plans?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent data (within the assessment period) confirming the systematic, company-wide tracking of the implementation of these strategies and plans.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has systems in place to systematically track the implementation of these strategies and plans, but there is limited evidence of the actual use of such systems</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) from the tracking of the implementation of strategies and plans at several of its operations, but there is no evidence of a systematic, company-wide approach.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it tracks the implementation of these strategies and plans, but there is no information disclosed beyond a narrative description.</p>
            </div>
        </div>
    </div>


    {{-- F.06.2--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF062"
    >F.06.2 The company tracks, reviews and acts to improve its performance on managing the     greenhouse gas (GHG) emissions generated by its activities and its energy use. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F062" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Tracks and discloses data, against targets and across successive time periods, on its performance on managing the greenhouse gas (GHG) emissions generated by its activities and its energy use?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent company-wide data (within the assessment period) on GHG emissions generated by its activities and its energy use, and the data is compared across successive time periods and against targets.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company discloses recent company-wide data (within the assessment period) on GHG emissions generated by its activities and its energy use (Scope 1 and Scope 2), and the data is compared against targets, but not across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on GHG emissions generated by its activities and its energy use (Scope 1 and Scope 2), and the data is compared across successive time periods, but not against targets</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on GHG emissions generated by its activities and its energy use, and the data is compared across successive time periods and against targets, but the data does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses recent data (within the assessment period) on GHG emissions generated by its activities and its energy use, but the data is not compared against targets and not across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on GHG emissions generated by its activities and its energy use, and the data is compared against targets, but not across successive time periods and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on GHG emissions generated by its activities and its energy use, and the data is compared across successive time periods, but not against targets and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on GHG emissions generated by its activities only, and the data is compared against targets, but not across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on GHG emissions generated by its activities only, and the data is compared across successive time periods, but not against targets.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a>Audits and/or reviews the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that regular reviews and/or audits of the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement</p>
                    <p>OR</p>
                    <p>The company discloses data on the outcomes of reviews/audits that were conducted within the assessment period, but there is no information on the scope and actual content of these reviews/audits and the data does not cover all of companies’ activities</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, based on the findings of these audits and/or reviews, to seek to continuously improve the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use, in order to minimise them?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use, and has disclosed information on reviews and/or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to manage the GHG emissions generated by its activities and its energy use, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
            </div>
        </div>
    </div>


    {{-- F.06.3--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF063"
    >F.06.3 The company tracks, reviews and acts to improve its performance on managing energy consumption throughout its operations. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F063" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Tracks and discloses data, against targets and across successive time periods, on its performance on managing energy consumption throughout its operations?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent company-wide data (within the assessment period) on energy consumption, and the data is compared across successive time periods and against targets.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company discloses recent company-wide data (within the assessment period) on energy consumption, and the data is compared against targets but not across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on energy consumption, and the data is compared across successive time periods but not against targets</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on energy consumption, and the data is compared across successive time periods and against targets, but the data does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses recent company-wide data (within the assessment period) on energy consumption, but the data is not compared across successive time periods and not against targets</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on energy consumption and the data is compared against targets, but not across successive time periods and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on energy consumption, and the data is compared across successive time periods but not against targets and does not cover all of the company’s activities.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a>Audits and/or reviews the effectiveness of its measures taken to manage energy consumption throughout its operations?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to manage energy consumption.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to manage energy consumption.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that regular reviews and/or audits of the effectiveness of its measures taken to manage energy consumption throughout its operations are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, based on the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to manage energy consumption throughout its operations?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to manage energy consumption throughout its operations.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to manage energy consumption throughout its operations, and has disclosed information on reviews and/or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to manage energy consumption throughout its operations, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
            </div>
        </div>
    </div>



    {{-- F.07.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF071"
    >F.07.1 The company has systems in place to ensure its operations identify and assess potential risks related to the transportation, handling, storage, emission and disposal of hazardous materials, and to design and implement strategies and plans to address identified risks. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F071" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Has systems in place to ensure its operations identify and assess the risks related to their use of hazardous materials?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations identify and assess the risks related to their use of hazardous materials, covering both input and outputs, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to ensure its operations identify and assess the risks related to their use of hazardous materials, covering both inputs and outputs, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations identify and assess the risks related to their use of hazardous materials, covering either inputs or outputs, and there is detailed evidence of the scope and content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations identify and assess the risks related to their use of hazardous materials, covering both input and outputs, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of systems to ensure its operations identify and assess the risks related to their use of hazardous materials, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or multiple isolated cases of operations having identified and assessed the risks related to their use of hazardous materials, but there is no evidence of company-wide approaches or systems in place.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">F.</a> Has systems in place to ensure its operations develop strategies and plans to address these risks?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations develop strategies and plans to prevent, mitigate and account for how it addresses these identified impacts, covering both inputs and outputs, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide systems to ensure its operations develop strategies and plans to prevent, mitigate and account for how it addresses these identified impacts, covering both inputs and outputs, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has company-wide systems to ensure its operations develop strategies and plans to prevent, mitigate and account for how it addresses these identified impacts, and there is detailed evidence of their scope and content, but it only covers either inputs or outputs</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations develop strategies and plans to prevent, mitigate and account for how it addresses these identified impacts, covering both inputs and outputs, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides a limited narrative description of its systems to ensure its operations develop strategies and plans to address these risks, but there is no information about the scope, content and actual implementation of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two operations having developed strategies and plans to address these risks.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Systematically tracks the implementation of these strategies and plans?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent data (within the assessment period) confirming the systematic, company-wide tracking of the implementation of these strategies and plans which covers both input and outputs.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has systems in place to systematically track the implementation of these strategies and plans throughout its operations, covering both inputs and outputs, but there is limited evidence of the actual use of such systems</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) from the tracking of the implementation of strategies and plans at several of its operations, covering both inputs and outputs, but there is no evidence of a systematic, company-wide approach</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) confirming the systematic, company-wide tracking of the implementation of these strategies and plans related to only one or multiple specific substances or materials.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it tracks the implementation of these strategies and plans, but there is no information disclosed beyond a narrative description.</p>
            </div>
        </div>
    </div>


    {{-- F.08.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF081"
    >F.08.1 The company has systems in place to ensure its operations engage local authorities, workers and communities in developing, communicating and testing emergency preparedness and response plans. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F081" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has systems in place to ensure its operations:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Develop and maintain emergency preparedness and response plans?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to carry out due diligence on its suppliers and contractors to identify risks on human rights issues, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company has systems in place to ensure its operations develop and maintain emergency preparedness and response plans, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company provides evidence that all its operations have developed emergency response plans</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations develop and maintain emergency preparedness and response plans, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company has systems in place to ensure its operations develop and maintain emergency preparedness and response plans, but these systems are limited to one specific category of emergencies/risks.</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Systematically engage with local stakeholders (e.g. local authorities and communities) in the design of emergency response plans?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations engage with local authorities and local communities in the design of emergency response plans, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to ensure its operations engage with local authorities and local communities in the design of emergency response plans, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations engage with local authorities or local communities in the design of emergency response plans, and there is detailed evidence of the scope and content of these system, but these do not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations engage with local authorities and local communities in the design of emergency response plans, and there is detailed evidence of the scope and content of these systems, but not on a company-wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that it engages with local stakeholders in the design of emergency response plans, but there is no information beyond narrative statement</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or two operations having engaged with local stakeholders (authorities or communities).</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Systematically engage with local stakeholders in the testing of these response plans?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to ensure its operations engage with local authorities and local communities in the testing of these response plans, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company has company-wide systems in place to ensure its operations engage with local authorities and local communities in the testing of these response plans, but there is limited evidence of the scope and/or content of these systems</p>
                    <p>OR</p>
                    <p>The company has systems in place to ensure its operations engage with local authorities or local communities in the testing of these response plans, and there is detailed evidence of the scope and content of these systems, but not on a company wide basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company states that it engages with local stakeholders in the testing of these response plans, but there is no information disclosed beyond a narrative description</p>
                    <p>OR</p>
                    <p>The company provides evidence of only one or more isolated cases of operations having engaged with local stakeholders in the testing of these response plans.</p>
                </div>
            </div>
        </div>
    </div>



    {{-- F.08.2 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleF082"
    >F.08.2 The company publicly discloses all relevant information about financial assurance that is provided for disaster management and recovery, throughout its operations. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="F082" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Publicly discloses all relevant information about financial assurance that is provided for disaster management and recovery?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company publicly discloses all relevant information about financial assurance that is provided for disaster management and recovery.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company publicly discloses some information about financial assurance that is provided for disaster management and recovery.</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">n/a</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Includes in this disclosure information on specific financial assurance provisions on a mine-site-disaggregated basis?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company includes in this disclosure information on specific financial assurance provisions on a mine-site-disaggregated basis.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company includes in this disclosure information on specific financial assurance provisions on a mine-site-disaggregated basis, but only for some mine sites</p>
                    <p>OR</p>
                    <p>The company includes in this disclosure information on specific financial assurance provisions on a country-disaggregated basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">There is evidence of only one or two mine sites having disclosed this information.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Updates this information on a yearly basis?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company updates this information on a yearly basis.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company updates this information from time to time.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states it updates this information regularly, but there is no information beyond narrative statement.</p>
            </div>
        </div>
    </div>
</div>
