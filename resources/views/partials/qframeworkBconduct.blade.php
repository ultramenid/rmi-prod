{{-- qframework2 --}}
<div class="w-full border border-gray-200 dark:border-opacity-20 rounded min-h-screen bg-gray-300 px-4 py-4 " x-show="qframework2" x-transition x-cloak style="display: none !important"
x-data="qframework2">
    <h1 class="text-2xl font-semibold mb-4">{{__('Business Conduct')}}</h1>

    {{-- B.01 --}}
    <h2 class="text-1xl font-semibold cursor-pointer hover:underline "
    @click="toogleB01"
    >B.01 {{__('Business Ethics and Anti-Bribery and Corruption')}}</h2>
    <div x-show="B01" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 ">
        <p class="mb-4">
            {{__('Business ethics is the application of ethical values to the conduct of a company or individuals within that company. The set of ethical values adopted by a company is discretionary, but often includes values such as: integrity, fairness, openness. These values can then be applied to relevant economic, environmental, social and governance (EESG) issues such as conflicts of interest; gifts and hospitality; political donations and lobbying; bribery and corruption; data privacy; use of social media; diversity; human rights; and treatment of or interactions with workers, communities and the environment.')}}
        </p>
        <p class="mb-4">
            {{__('Ethical conduct is more likely to be achieved if values are embedded in the company’s culture, throughout all of its departments and operations; expected behaviour is clearly communicated to all employees (through education and awareness raising programmes), relevant business partners and stakeholders; there are sanctions for breaches of conduct,but also incentives for achieving high ethical conduct; and monitoring mechanisms are in place to understand the extent to which the company is living up to its stated values. Also important is reporting to employees and stakeholders, which promotes learning and accountability at all levels of the company, and provides a means to demonstrate that commitments made at the corporate level are being carried out at the mine operational level.')}}
        </p>
        <p class="mb-4">
            {{__('Companies committed to ethical conduct will also have effective mechanisms in place that enable individuals from within or external to the company to raise concerns about unethical or unlawful conduct, including whistleblowing hotlines or similar procedures that allow anonymous, confidential reporting without fear of retaliation. In some situations, in order to build trust in the mechanism, it may be helpful to have an independent third-party manage the mechanism and report back to the company on the results. The creation of a culture of trust and openness also entails ensuring that workers (employees and contract workers) and suppliers have the confidence, and are encouraged, to raise issues of concern, and that protection is provided to those who speak out. This, in turn, is more likely to result in the early identification and prevention of unacceptable behaviours, enabling companies to protect their reputation, reduce financial losses, improve employee morale and reduce turnover.')}}
        </p>
        <p class="mb-4">
            {{__('An integral part of a company’s approach to ethical conduct is a robust system to prevent direct and indirect forms of bribery and corruption. In 2003, the United Nations General Assembly adopted the United Nations Convention Against Corruption. In the convention document, UN Secretary General Kofi Annan stated that, “Corruption hurts the poor disproportionately by diverting funds intended for development, undermining a Government’s ability to provide basic services, feeding inequality and injustice and discouraging foreign aid and investment. Corruption is a key element in economic underperformance and a major obstacle to poverty alleviation and development.”')}}
        </p>
        <p class="mb-4">
            {{__('The mining sector is classified as one of the highest-risk sectors for corruption. Mining companies must obtain numerous licences and approvals to explore and develop mineral resources. Some government officials or others with enough political influence to block or delay mining projects may attempt to solicit bribes in exchange for facilitating those processes. This practice is especially prevalent when mining operations are located in countries that have a weak regulatory environment and rule of law.')}}
        </p>
        <p class="mb-4">
            {{__('The problem, however, cannot be placed solely at the feet of unethical government officials and other intermediaries. Some mining companies admit that they would willingly make cash payments or give unethical gifts to help their business during financially difficult times. Also, companies may be indirectly and in some cases unknowingly implicated in bribery or  corruption through their relationships with agents, consultants or joint venture partners.')}}
        </p>
        <p class="mb-4">
            {{__('Bribery and corruption can be prevented or greatly reduced through implementation of robust and transparent anti-corruption due diligence and compliance programmes and other measures such as transparency around contracts, taxes and payments made to producing countries. Anti-corruption due diligence helps companies fight corruption within their own businesses, and reduce the potential of being associated with corruption through the actions of third parties such as agents, consultants, or suppliers. Such due diligence is now an expectation in many countries, and companies are also voluntarily taking steps to implement anti-corruption programmes to minimise their risks.')}}
        </p>
        <p class="mb-4">
            {{__('Less corruption in a society will lead to a more predictable and stable investment environment for companies, and help producing countries demonstrably maximise the benefits from the development of their natural resources.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #d1af98">
                <a class="transform  -rotate-90">{{__('Commitment')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company tracks, reviews and acts to improve its performance on anti-bribery and corruption.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Formalised its commitment, that is endorsed by senior management, to prevent all direct and indirect forms of bribery and corruption?')}}
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
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white" style="background-color: #5d3c23">
               <a class="transform  -rotate-90">{{__('Effectiveness')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">{{__('The company commits to prevent all direct and indirect forms of bribery and corruption')}}</h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, across successive time periods, on its prevention of bribery and corruption, including number and nature of incidents and actions taken in response?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption?')}}
                </p>
                <p class="mb-6">
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, on the basis of the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption?')}}
                </p>

                <h1 class="text-xl font-semibold mb-2">{{__('The company tracks, reviews and acts to improve the effectiveness of its whistleblowing mechanisms for reporting concerns about unethical behaviour.')}}</h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, across successive time periods, on the functioning and uptake of its whistleblowing mechanisms, including number and nature of incidents and actions taken in response?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its whistleblowing mechanisms?')}}
                </p>
                <p >
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, on the basis of the findings of these audits and/or reviews, to seek to improve the effectiveness of its whistleblowing mechanisms?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- B.02 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleB02"
    >B.02 {{__('Board and Senior Management Accountability and Diversity')}}</h2>
    <div x-show="B02" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">
            {{__('Corporate sustainability is a concept that has been embraced by companies around the globe. It is increasingly viewed as essential to long-term corporate success. It involves businesses respecting fundamental responsibilities in areas such as human rights, labour, environment and anti-corruption, and taking actions to support and create value for societies around them.')}}
        </p>
        <p class="mb-4">
            {{__('Increasingly, companies are developing policies that demonstrate a commitment to responsible conduct on economic, environmental, social (including human rights) and governance (EESG) issues. However, policies do not always translate into long-term positive changes in producing countries or a sustained shift in corporate culture and values toward more responsible behaviour. Successful implementation of policies typically requires commitment, leadership and accountability from corporate boards and senior managers (at the corporate and mine-site levels), as well as dedicated personnel at the operational level to ensure that strategic decisions are applied throughout a company’s operations.')}}
        </p>
        <p class="mb-4">
            {{__('Achievement of corporate goals to protect environmental values, human rights, the health and socio-economic wellbeing of communities can better be realised when businesses adopt internal accountability and incentive mechanisms for performance, which can be applied to corporate-level decision-makers as well as site-level managers and workers. Such actions can help to improve operational level performance and attitudes about the relevance of the EESG commitments, and help embed them into the company’s culture and values.')}}
        </p>
        <p class="mb-4">
            {{__('The composition of corporate boards and senior management may also influence the successful implementation of EESG goals. Board members and managers of different genders, ethnicities and ages, and a diversity of backgrounds and qualifications, including on economic, environmental and social issues, can contribute to a broad spectrum of knowledge on how external factors may impact the company.')}}
        </p>
        <p class="mb-4">
            {{__('Studies have shown that gender diversity on boards of directors and in senior management positions can lead to better overall financial performance, good corporate governance, greater adherence to global EESG standards, better sustainability performance, enhanced innovation, better risk management, and an improved corporate reputation.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #8d5d43">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to hold individual board directors and senior managers accountable for responsible business conduct on ESG issues.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has taken specific measures to ensure that:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Clear roles and responsibilities are defined for individual board directors and senior managers for responsible business conduct on ESG issues?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Competency requirements are in place for key senior management and board-level positions responsible for ESG issues?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Individual board directors and senior managers responsible for such performance are held accountable via documented measures?')}}
                </p>
            </div>
        </div>

        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #5d3c23">
                <a class="transform  -rotate-90">{{__('Effectiveness')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">{{__('The company tracks, reviews and acts to improve its gender balance at board and senior management levels.')}}</h1>
                <p class="italic">
                    {{__('Can your company demonstrate that it systematically:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Tracks and discloses data, against targets and across successive time periods, on the percentage of women at board and senior management levels?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Audits and/or reviews the effectiveness of its interventions (programmes, initiatives, etc) to improve gender balance at senior management level?')}}
                </p>
                <p class="mb-6">
                    <a class="font-semibold">c</a>. {{__('Takes responsive action, on the basis of the findings of these audits and/or reviews, to seek to improve its gender balance at senior management level?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- B.03 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleB03"
    >B.03 {{__('Contracts Disclosure')}}</h2>
    <div x-show="B03" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Producing countries issue licenses and develop agreements with companies to explore or exploit mineral resources (e.g., through bids, leases, permits, concession agreements, exploration and exploitation agreements, development agreements). Governments also sign contracts or negotiate agreements with companies to establish various terms and conditions related to mineral development, such as the financial benefits that a country will receive from taxes, production-sharing, profit-sharing and royalties; provisions related to critical infrastructure or other investments; and terms that can have implications for citizens such as environmental protection measures or rights related to land use or the displacement of local communities.')}}
        </p>
        <p class="mb-4">
            {{__('Governments bear the responsibility of managing their country’s resources in a manner that is in the interest of national development and the wellbeing of the people. Unfortunately, corruption, lack of information or institutional capacity challenges have prevented some countries from negotiating the best deals for their citizens – often resulting in the loss of millions or billions of dollars in potential revenue.')}}
        </p>
        <p class="mb-4">
            {{__('The contracts governing mining or other extractive projects may constitute the most significant rules governing the benefits received by producing countries and affected communities, and yet, these public-interest documents are often hidden from public view. According to a 2015 report by the Extractive Industries Transparency Initiative, while some countries publish contracts, transparency is not universal. In some cases there are legal or contractual prohibitions on disclosure, and in others, even though laws support disclosure it is only partially done, or is not occurring at all.')}}
        </p>
        <p class="mb-4">
            {{__('Contract disclosure, however, is increasingly being recognised as necessary to enable the responsible management and good governance of natural resources, and to promote growth and economic development by ensuring a level playing field for companies. By systematically making contracts publicly available, government officials have more tools and a stronger incentive to negotiate contracts that ensure that their countries receive an equitable share of the benefits from mineral development. Contract transparency enables civil society to play a greater role in the debate over how developing countries manage their non-renewable resources, and can also help companies and governments demonstrate to citizens the value of mining projects and what are realistic income expectations over time. In addition to disclosure of the contracts themselves, disclosure of related documents (including, for example, records of the allocation and award process, as well as information about contract terms and their implementation) can enable stronger accountability and transparency.')}}

        </p>
        <p class="mb-4">
            {{__('A growing number of mining companies and associations publicly support the practice of contract publication, arguing that it ensures a level playing field for companies and helps increase the quality of their relationship with society at large and more effectively match citizen expectations. Some companies are also taking leadership roles in advancing transparency by disclosing contracts in countries where it is not required, and others are proactively including exception clauses in contracts with governments that enable public disclosure.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #8d5d43">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company publicly discloses all the legal titles that grant it the rights to extract mineral resources on its mine sites.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Publicly discloses all the legal titles (e.g. contracts, permits, licences, leases, conventions, agreements) that grant it the rights to extract mineral resources on its mine sites?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Makes these documents freely available on its company website?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Publicly discloses these documents as full-text documents without redactions or omissions?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- B.04 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleB04"
    >B.04 {{__('Tax Transparency')}}</h2>
    <div x-show="B04" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Mining-related taxes are a significant and critically important source of income for mineral-rich countries. Revenues from taxes allow countries to pay for essential public services and infrastructure. In the case of developing countries, a solid tax base can reduce reliance on foreign aid, enabling countries to have a greater say in their own development. If managed carefully, the taxes received over the lifecycle of a mine can fund economic and social development initiatives that will continue to generate benefits long after the mining operations have ceased.')}}
        </p>
        <p class="mb-4">
            {{__('There is ample evidence that many producing countries are failing to collect a significant proportion of taxes from extractive industries, especially from companies with operations in many countries. Companies are able to avoid paying taxes through questionable but nominally legal tactics, such as transfer pricing manipulation (by shifting profits to subsidiaries in low-tax or secrecy jurisdictions), trade mispricing (by under-declaring the value of products being exported) or through the use of complex ownership structures. Tax evasion may also occur through illegal activities, such as smuggling.')}}
        </p>
        <p class="mb-4">
            {{__('Developing countries may also lose out on tax revenues by offering incentives such as tax holidays or reduced tax rates. Often, tax incentives in producing countries are not guided by proper cost-benefit analyses but are driven instead by the pressure to create a more attractive investment climate than the next country, and given the location-specific nature of mining operations there are numerous examples showing that investment would have occurred even without tax incentives. Although not illegal, overly generous or ill-conceived tax incentives may be viewed with suspicion, create legitimacy issues for governments and companies, and do nothing to improve the investment climate in a country.')}}
        </p>
        <p class="mb-4">
            {{__('Much work needs to be done to establish tax policies, structures and enforcement capacity in a manner that both attracts investment and delivers economic benefits to the country. There is no single definition of tax transparency, but it generally includes the disclosure of information on how much profit a company makes in each country where it operates and how much taxes it pays in each country, and reporting on tax strategies, such as its approach to taxation, details on management of tax risk and tax planning, and information on tax havens.')}}
        </p>
        <p class="mb-4">
            {{__('Increasingly, global companies are recognising that tax-related policy commitments and proactive disclosure of tax strategies and practices at a country level, are crucial to building and maintaining relationships and credibility with investors and producing countries, and fostering a stable investment climate in the countries where they operate.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #8d5d43">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company practices tax transparency in all its tax jurisdictions.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it publicly:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Discloses its corporate structure mentioning all tax jurisdictions where it has registered entity(ies) and under what names (e.g. those of subsidiary or branch entities) it is known in that place?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Reports on its approach to tax transparency, including its strategy relating to its presence in any low-tax jurisdictions?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Discloses all tax benefits and tax holidays received at local and national levels in all tax jurisdictions where it has registered entity(ies)?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- B.05--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleB05"
    >B.05 {{__('Beneficial Ownership')}}</h2>
    <div x-show="B05" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('The identities of the people who ultimately own, control and reap the profits from a mining company’s activities - the beneficial owners - are not always disclosed. In some cases they are hidden behind a chain of corporate or private entities that spans multiple countries.')}}
        </p>
        <p class="mb-4">
            {{__('When ownership of a company is opaque it creates avenues for corruption, tax evasion, money laundering and other types of financial misconduct, which can then lead to negative economic, environmental or social impacts. For example, an individual with an ownership stake in a company may be in a position to unduly influence the granting of government contracts, mining licences or permits to unqualified companies, or approve overly lenient terms and conditions. Knowing the identity of the beneficial owners isimportant both to deter corruption and to ensure that a company that has obtained a license has the intention and necessary financial and technical expertise to develop, operate and close a mining project in a responsible manner.')}}
        </p>
        <p class="mb-4">
            {{__('Governments, financial institutions, voluntary initiatives and even mining company executives are increasingly advocating for and moving towards increased transparency in the beneficial ownership of companies. For example, the Extractive Industries Transparency Initiative has put in place requirements that by 2020 “all implementing countries have to ensure that all oil, gas and mining companies that bid for, operate or invest in extractive projects in their countries disclose their real owners,” and reveal the level of ownership and details about how ownership or control is exerted (e.g., through a percentage ownership of shares in the company, or control through contractual arrangements or powers of attorney).')}}
        </p>
        <p class="mb-4">
            {{__('Proactive disclosure of beneficial ownership is fast becoming standard practice within the extractive industry. Such disclosure demonstrates commitment to transparency and to the integrity of mineral licensing and contracting processes. It will also help to build greater trust from mining stakeholders, help avoid the risks of corruption and tax evasion, and enable governments to better assess the credibility of mining proposals, thereby improving the investment climate for the mining sector globally.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #8d5d43">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company publicly discloses its ultimate beneficial owners.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it publicly:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Discloses the names of the individuals that are its ultimate beneficial owner(s) (i.e. not only direct shareholders), specifying any threshold ownership level applied to this disclosure?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Discloses how ownership is held and how control is exercised?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Identifies any beneficiaries who are politically exposed persons and discloses regular updates of information?')}}
                </p>
            </div>
        </div>
    </div>

    {{-- B.06--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleB06"
    >B.06 {{__('Payments to Producing Countries')}}</h2>
    <div x-show="B06" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Governments grant mining companies the right to explore and exploit mineral resources, and, in exchange, companies pay taxes, royalties, license fees, bonuses, or make other contributions to compensate a country for the minerals being extracted. The payments made by mining companies can be a significant source of revenue for developing countries, and have the potential to fuel economic growth and social development.')}}
        </p>
        <p class="mb-4">
            {{__('Information on payments to governments is often not publicly available. Greater transparency from mining companies would help governments and citizens know if companies are meeting their contractual obligations, and it would enable companies to demonstrate their economic contributions to workers, local communities, and to the national economy at large.')}}
        </p>
        <p class="mb-4">
            {{__('It is generally agreed that transparency of payments made by extractive companies to governments can enhance good governance by removing conditions that enable corruption and misuse of revenues. Better management of mineral revenues, in turn, increases the potential to reduce poverty and foster sustainable economies. Disclosure of payments is also a way for countries to reduce political risk and create a more stable investment environment.')}}
        </p>
        <p class="mb-4">
            {{__('In the past decade efforts to increase payments transparency have gained traction. In particular, the Extractive Industries Transparency Initiative, a global standard that promotes open and accountable management of oil gas and mineral resources, and regulations in the European Union and Canada, have created legal obligations for many companies to report payments made to national and sub-national government bodies, and to disclose these payments for each country where they operate.')}}
        </p>
        <p class="mb-4">
            {{__('Project-level disclosures are also becoming standard practice in many developed nations, and there are calls for similar project by-project reporting in other regions. Communities located close to mines experience a wide range of social and environmental impacts, yet often they do not receive adequate funds to alleviate impacts and promote economic growth, even when they are legally entitled to a percentage of the revenue generated by mining projects.')}}
        </p>
        <p class="mb-4">
            {{__('Access to both country-level and project-level revenue data allows local governments to better monitor company compliance with contract obligations, and enables local communities to track their entitlements and hold their governments accountable if revenues are not being appropriately allocated.')}}
        </p>
        <p class="mb-4">
            {{__('In countries that do not yet have project-level requirements, companies that demonstrate a willingness to disclose payments, can increase trust and support and enable producing country communities to become better informed about the revenues received from mining and how these are being spent.')}}
        </p>

        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #8d5d43">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company publicly discloses all payments it makes to sub-national and national governments, providing disaggregated data on a project-level basis.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Publicly discloses project-level disaggregated information on all the payments made to sub-national and national governments?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Makes this information freely available on the company’s main website?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>. {{__('Updates this information on a yearly basis?')}}
                </p>
            </div>
        </div>
    </div>


    {{-- B.07--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleB07"
    >B.07 {{__('Lobbying Practices')}}</h2>
    <div x-show="B07" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('In many countries lobbying plays a prominent role in policy making. Private lobbyists, industry groups and civil society organisations work in a variety of ways to influence politicians and decision-makers. Lobbying, however, is often highly unregulated, creating the potential for powerful interests to exert undue influence through corrupt or otherwise questionable practices. The general lack of transparency and accountability around lobbying creates suspicion that companies, either independently or through industry bodies, are advocating for rules that are not in society’s best interest.')}}
        </p>
        <p class="mb-4">
            {{__('Mining companies can take proactive steps to help foster greater integrity and trust in public decision-making processes and elicit greater trust from stakeholders. For example, they can voluntarily disclose information related to lobbying policies, practices and political contributions. They can also disclose lobbying positions, which not only demonstrates a willingness to be transparent, but may also reveal areas of common ground with stakeholders, and present opportunities for working together to develop public policies that can serve affected communities, producing countries, and the mining industry alike.')}}
        </p>
        <p class="mb-4">
            {{__('While lobbying is a legitimate activity and an important part of the democratic process it is not the only avenue for mining companies to influence mining policy and institutional or economic reforms. Many mining companies are engaged in partnerships with governments and other stakeholders to help increase the capacity of producing country governments to manage mineral resources and develop economic opportunities.')}}
        </p>
        <p class="mb-4">
            {{__('Increased transparency in lobbying and engagement in multi stakeholder dialogues to improve mineral transparency and resource governance are important means to building stakeholder trust, combating bribery and corruption, and creating a more stable and attractive climate for investment.')}}
        </p>
        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #8d5d43">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('Where applicable, the company publicly discloses its lobbying practices and positions in all jurisdictions.')}}
                </h1>
                <p class="italic">
                    {{__('Where applicable, can your company demonstrate at the corporate level that it publicly:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Discloses the roles and responsibilities for those involved in its lobbying activities in all jurisdictions?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>. {{__('Discloses the subject matter of its lobbying activities and the outcomes being sought?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>.  {{__('Discloses the names of public officials or institutions being engaged?')}}
                </p>
            </div>
        </div>
    </div>


    {{-- B.08--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline"
    @click="toogleB08"
    >B.08 {{__('Responsible Contracting and Sourcing')}}</h2>
    <div x-show="B08" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="mb-4">{{__('Increasingly, there is a global expectation that businesses not only demonstrate a high level of human rights, social and environmental responsibility in their own actions, but also demand the same of their business partners and supply chains.')}}
        </p>
        <p class="mb-4">
            {{__('Mining companies often contract with firms to deliver specialised services such as welding repairs, mechanical work, and facility maintenance. Security services are also often contracted out. In the past decade, labour shortages or cost-cutting efforts have increased the use of contracted workers for core mining operations as well.')}}
        </p>
        <p class="mb-4">
            {{__('The use of contracted labour has implications for mining companies. Hiring workers via a contractor may present occupational health and safety challenges that must be managed. Also, poor labour, social or environmental practices by contractors create reputational and financial risks for mining companies. For example, discrepancies in wages and working conditions between workers and contractors are of concern due to issues of inherent inequality, and also because they have led to violent protests and mine shutdowns.')}}
        </p>
        <p class="mb-4">
            {{__('Mining companies also face risks related to the practices of their suppliers, such as interruptions in supply and reputational damage resulting from accidents, labour challenges, corruption, association with armed groups or illegal activity, human rights abuses, community protests or legal actions related to supplier non-compliance with social or environmental regulations.')}}
        </p>
        <p class="mb-4">
            {{__('Companies can minimise risks to workers, communities, the environment and their own reputations by assessing the social, environmental, labour and human rights risks associated with suppliers and contractors, and ensuring that contractors, sub contractors and suppliers commit to and implement high social, environmental and ethical standards in their activities and throughout their own supply chains.')}}
        </p>
        <p class="mb-4">
            {{__('This approach is increasingly being taken by leading mining companies. For example, numerous mining companies have codes of conduct that apply equally to employees, contractors, sub-contractors and suppliers, although often these codes are non-binding. As a result, some mining companies are now incorporating social and environmental requirements into bilateral contracts to create legally binding obligations. Some companies also carry out audits to assess compliance and evaluate how well contractors, sub-contractors and suppliers are managing their own impacts and those that may be occurring within their supply chains.')}}
        </p>
        <p class="mb-4">
            {{__('In addition to formalising expectations in agreements, mining companies are investing in the training of contractors, sub contractors and suppliers to help them meet the company’s requirements. These programmes are mutually beneficial: mining companies reduce their labour and supply chain risks and create more stable, reliable relationships; meanwhile, suppliers, contractors and sub-contractors can reduce their own risks, build capacity and potentially gain access to more competitive supply chain finance.')}}
        </p>
        <p class="mb-4">
            {{__('Producing countries stand to benefit from these initiatives, as well. Home-grown businesses that can meet high social and environmental standards will be better able to compete and integrate into responsible global supply chains. Moreover, if mine contractors, sub-contractors and suppliers are held to high environmental, social, human rights and labour standards, such as ensuring safe workplaces and paying living wages, workers and their families will be better off, and mining will have greater positive benefits for local economies and communities.')}}
        </p>

        {{-- detail --}}
        <div class="flex border border-gray-400 mb-4">
            <div class="lg:w-1/12 w-2/12  inline-flex items-center justify-center text-white " style="background-color: #8d5d43">
                <a class="transform  -rotate-90">{{__('Action')}}</a>
            </div>
            <div class="lg:w-10/12 w-10/12 px-6 py-3">
                <h1 class="text-xl font-semibold mb-2">
                    {{__('The company has systems in place to identify and assess any human rights, labour and environmental risks associated with its suppliers and contractors.')}}
                </h1>
                <p class="italic">
                    {{__('Can your company demonstrate at the corporate level that it has systems in place to identify and assess risks related to its suppliers and contractors on:')}}
                </p>
                <p>
                    <a class="font-semibold">a</a>. {{__('Human rights issues?')}}
                </p>
                <p>
                    <a class="font-semibold">b</a>.  {{__('Labour issues?')}}
                </p>
                <p>
                    <a class="font-semibold">c</a>.  {{__('Environmental issues?')}}
                </p>
            </div>
        </div>
    </div>

    <p class="italic font-semibold mt-6 mb-2">Scoring Framework:</p>

    {{-- B.01.1--}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB011"
    >B.01.1 The company commits to prevent all direct and indirect forms of bribery and corruption. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B011" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4 ">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has:</p>
            {{-- a --}}
            <div>
                <p class="mb-4"><a class="font-semibold ">a.</a> Formalised its commitment, that is endorsed by senior management, to prevent all direct and indirect forms of bribery and corruption?</p>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                    <p class="col-span-11">The company commits to prevent all direct and indirect forms of bribery and corruption in a formal document which covers all of the company’s activities and is endorsed by senior management.</p>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                    <div class="col-span-11" >
                        <p >The company commits to prevent all direct and indirect forms of bribery and corruption in a formal document which covers all of the company’s activities, but there is no evidence that this commitment is endorsed by senior management</p>
                        <p>OR</p>
                        <p>The company commits to prevent all direct and indirect forms of bribery and corruption in a formal document which is endorsed by senior management, but does not cover all of the company’s activities</p>
                        <p>OR</p>
                        <p>The company commits to prevent bribery and corruption in a formal document which is endorsed by senior management, but the commitment does not cover all forms of bribery and corruption.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12  mb-4">
                    <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                    <p  class="col-span-11"> The company refers to the need for preventing all direct and indirect forms of bribery and corruption, but does not make a clear commitment in a formal document which is endorsed by senior management.</p>
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
                        <p>The company has a senior management level and/or Board level function responsible for carrying out this commitment but there is limited information on its actual scope, role and accountability</p>
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
                        <p>The company has company-wide, operational-level teams responsible for coordinating efforts on preventing bribery  and corruption</p>
                        <p>OR</p>
                        <p>The company conducts company-wide awareness and/or training programmes and/ or workshops related to its commitment to prevent bribery and corruption, and there is detailed evidence of the specific financial and/or staffing resources committed.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                    <div class="col-span-11">
                        <p>The company conducts company-wide awareness and/or training programmes and/ or workshops related to its commitment to prevent bribery and corruption, and there is detailed evidence of the specific financial and/or staffing resources committed.</p>
                        <p>OR</p>
                        <p>The company has company-wide operational-level teams responsible for coordinating efforts on preventing bribery and corruption, but only on some limited aspects of bribery and corruption.</p>
                        <p>OR</p>
                        <p>The company allocates financial and/or staffing resources to implement this commitment (awareness/training programmes/workshops and/or responsible teams) but not on a company-wide basis</p>
                        <p>OR</p>
                        <p>The company provides evidence qualifying for a score of 2, but the company scored 1 under a).</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 mb-4">
                    <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                    <div class="col-span-11">
                        <p >The company has company-wide requirement for the commitment of financial and/ or staffing resources but there is limited evidence of these resources having been .</p>
                        <p>OR</p>
                        <p>The company allocates resources to investigate and address allegations and violations of relevant policy, but there is no evidence of resources committed to prevent bribery and corruption</p>
                        <p>OR</p>
                        <p>The company provides evidence qualifying for a score of 2 or 1, but the company scored 0.5 under a).</p>
                    </div>
                </div>
            </div>
    </div>


     {{-- B.01.2--}}
     <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
     @click="toogleB012"
     >B.01.2 The company tracks, reviews and acts to improve its performance on anti-bribery and corruption. <a class="text-red-500">(/6.00)</a></h2>
     <div x-show="B012" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold">a.</a> Tracks and discloses data, across successive time periods, on its prevention of  bribery and corruption, including number and nature of incidents and actions taken in response?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <div class="col-span-11">
                    <p>The company discloses recent company-wide data (within the assessment period) across successive time periods including number, nature and actions taken in response</p>
                    <p>OR</p>
                    <p>The company reports that no corruption-related incidents happened at all within the assessment period and the data is compared over successive time periods.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p>The company discloses recent data (within the assessment period) on two of the three dimensions only: number, nature or actions taken in response</p>
                    <p>OR</p>
                    <p>The company reports that no corruption-related incidents happened at all within the assessment period, but the data is not compared across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) across successive time periods including number, and nature and actions taken in response, but the data does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company reports that no corruption-related incidents happened at all within the assessment period and the data is compared over successive time periods but does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses recent data (within the assessment period) on one of the three dimensions only: number, nature or actions taken in response</p>
                    <p>OR</p>
                    <p>The company reports that no incidents happened within the assessment period on some corruption-related topics only</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on two of the three dimensions only: number, nature or actions taken in response, but the data does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company reports that no corruption-related incidents happened at all within the assessment period, but the data is not compared across successive time periods and does not cover all of the company’s activities.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">b.</a> Audits and/or reviews the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption.</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p  class="col-span-11">The company states that regular reviews and/or audits of the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">c.</a> Takes responsive action, on the basis of the findings of these audits and/or reviews, to seek to improve the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually  and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to prevent all direct and indirect forms of bribery and corruption, and has disclosed information on reviews and/or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement.</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p  class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its measures taken to preventall direct and indirect forms of bribery and corruption, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
            </div>
        </div>
    </div>

    {{-- B.01.3 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB013"
    >B.01.3 The company tracks, reviews and acts to improve the effectiveness of its whistleblowing mechanisms for reporting concerns about unethical behaviour. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B013" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Tracks and discloses data, across successive time periods, on the functioning and uptake of its whistleblowing mechanisms, including number and nature of incidents and actions taken in response?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <div class="col-span-11">
                    <p>The company discloses recent company-wide data (within the assessment period) across successive time periods on number, nature and actions taken in response</p>
                    <p>OR</p>
                    <p>The company reports that no incidents were reported at all through its whistleblowing mechanism within the assessment period and the data is compared over successive time period.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p>The company discloses recent company-wide data (within the assessment period) on two of the three dimensions only: number, nature or actions taken in response</p>
                    <p>OR</p>
                    <p>The company reports that no incidents were reported at all through its whistleblowing mechanism, but the data is not compared across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) across successive time periods on number, nature and actions taken in response, but the data does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company reports that no incidents were reported through its whistleblowing mechanism within the assessment period and the data is compared over successive period but does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) across successive time periods on number, nature and actions taken in response, but the data is aggregated between all reporting channels, and not specific only to whistleblowing mechanism/s</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p>The company discloses recent data (within the assessment period) on one of the three dimensions only: number, nature or actions taken in response</p>
                    <p>OR</p>
                    <p>The company reports that no incidents were reported through its whistleblowing mechanism on some topics only</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on two of the three dimensions only: number, nature or actions taken in response, but the data does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company reports that no incidents were reported through its whistleblowing mechanism, but the data is not compared across successive time periods and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on two of the three dimensions only: number, nature or actions taken in response, but the data is aggregated between all reporting channels, and not specific only to whistleblowing mechanism/s</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) across successive time periods on number, nature and actions taken in response, but the data does not cover all of the company’s activities, but the data is aggregated between all reporting channels, and not specific only to whistleblowing mechanism/s</p>
                    <p>OR</p>
                    <p>The company reports that no incidents were reported through its whistleblowing mechanism within the assessment period and the data is compared over successive time period but does not cover all of the company’s activities, but the data is aggregated between all reporting channels, and not specific only to whistleblowing mechanism/s</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Audits and/or reviews the effectiveness of its whistleblowing mechanisms?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its whistleblowing mechanisms.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its whistleblowing mechanisms.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11"> The company states that regular reviews and/or audits of the effectiveness of its whistleblowing mechanisms are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, on the basis of the findings of these audits and/or reviews, to seek to improve the effectiveness of its whistleblowing mechanisms?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its whistleblowing mechanisms.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its whistleblowing mechanisms, and has disclosed information on reviews and/or audits that were actually conducted, t there is no information on the integration of recommendations, beyond statement.</p>
                    <p>OR</p>
                    <p>The company discloses information of reviews and/or audits that were actually conducted and discloses some information on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its whistleblowing mechanisms.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its whistleblowing mechanisms, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
            </div>
        </div>
    </div>



    {{-- B.02.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB021"
    >B.02.1 The company has systems in place to hold individual board directors and senior managers accountable for responsible business conduct on ESG issues. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B021" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has taken specific measures to ensure that:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Clear roles and responsibilities are defined for individual board directors and senior managers for responsible business conduct on ESG issues?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has defined clear roles and responsibilities at the corporate level which include both board-level and senior-management-level individuals for responsible  business conduct on all the following issues: environmental, social and human rights.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company has defined clear roles and responsibilities at the corporate level which include both board-level and senior-management-level individuals for responsible business conduct on only one or two of the following issues: environmental, social or human rights.</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company has defined roles and responsibilities at the corporate level which include both board-level and senior-management-level individuals for responsible business conduct but their scope is unclear.</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Competency requirements are in place for key senior management and board-level positions responsible for ESG issues?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has competency requirements in place for key senior management and board-level positions responsible for all the following issues: environmental, social and human rights.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company has competency requirements in place for key senior management and board-level positions responsible for only one or two of the following issues: environmental, social or human rights.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company mentions qualifications and/or experience and/or continuous training programmes related to key senior management and board-level positions responsible for environmental, social and human rights issues, but there is no information on actual competency requirements.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Individual board directors and senior managers responsible for such performance are held accountable via documented measures?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on indicators related to performance on environmental, social and human rights issues which are included in the remuneration incentive scheme for responsible individuals at both the board and the senior-management level.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company discloses information on indicators related to performance on environmental, social and human rights issues which are included in the remuneration incentive scheme for responsible individuals at either the board or the senior-management level</p>
                    <p>OR</p>
                    <p>The company mentions indicators related to performance on environmental, social and human rights issues which are included in the remuneration incentive scheme for responsible individuals at both the board or the senior-management level, but there is limited information on the actual metrics and their implementation, beyond narrative description.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company mentions indicators related to performance on environmental, social and human rights issues which are included in a remuneration incentive scheme, mited information on the individuals it applies to and/or the actual scope covered by such indicators.</p>
            </div>
        </div>
    </div>


    {{-- B.02.2 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB022"
    >B.02.2 The company tracks, reviews and acts to improve its gender balance at board and
    senior management levels. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B022" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate that it systematically:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Tracks and discloses data, against targets and across successive time periods, on the percentage of women at board and senior management levels?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses recent company-wide data (within the assessment period) on the percentage of women at board and senior management levels, and the data is disclosed against targets and compared across successive time periods.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company discloses recent company-wide data (within the assessment period) on the percentage of women at board and senior management levels, and the data is compared against targets, but not disclosed across successive time periods</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on the percentage of women at board and senior management levels, and the data is compared across successive time periods, but not disclosed against targets</p>
                    <p>OR</p>
                    <p>The company discloses company-wide data on the percentage of women at board and senior management levels, and the data is disclosed against targets and compared across successive time periods, but the data is outdated (older than the assessment period)</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on the percentage of women at board and senior management levels, and the data is disclosed against targets and compared across successive time periods, but does not cover all of the company’s activities.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses recent company-wide data (within the assessment period) on the percentage of women at board and/or senior management levels, but the data is not disclosed against targets and not compared across successive time periods.</p>
                    <p>OR</p>
                    <p>The company discloses recent data (within the assessment period) on the percentage of women at board and senior management levels, and the data is compared against targets, but not disclosed across successive time periods and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses recent company-wide data (within the assessment period) on the percentage of women at board and senior management levels, and the data is compared across successive time periods, but not disclosed against targets and does not cover all of the company’s activities</p>
                    <p>OR</p>
                    <p>The company discloses data on the percentage of women at board and senior management levels, and the data is disclosed against targets and compared across successive time periods, but the data is outdated (older than the assessment period) and does not cover all of the company’s activities.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Audits and/or reviews the effectiveness of its interventions (programmes, initiatives, etc) to improve gender balance at senior management level?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses detailed data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its interventions to improve gender balance at senior management level.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses limited data on reviews and/or audits conducted within the assessment period to assess the effectiveness of its interventions to improve gender balance at senior management level.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that regular reviews and/or audits of the effectiveness of its interventions (programmes, initiatives, etc) to improve gender balance at senior management level are required and shall be conducted by an identified internal or external body, but there is no information on reviews and/or audits that were actually conducted, beyond statement.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Takes responsive action, on the basis of the findings of these audits and/or reviews, to seek to improve its gender balance at senior management level?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has disclosed information on reviews and/or audits that were actually conducted and discloses data on how it has integrated recommendations and acted on findings to continuously improve the effectiveness of its interventions to improve gender balance at senior management level.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its interventions (programmes, initiatives, etc) to improve gender balance at senior management level, and has disclosed information on reviews and/or audits that were actually conducted, but there is no information on the integration of recommendations, beyond statement.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company states that it integrates the recommendations from these audits and/or reviews to continuously improve the effectiveness of its interventions (programmes, initiatives, etc) to improve gender balance at senior management level, but there is no information on reviews and/or audits that were actually conducted, and thus no information on the integration of recommendations.</p>
            </div>
        </div>
    </div>

    {{-- B.03.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB031"
    >B.03.1 The company publicly discloses all the legal titles that grant it the rights to extract mineral resources on its mine sites. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B031" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Publicly discloses all the legal titles (e.g. contracts, permits, licences, leases, conventions, agreements) that grant it the rights to extract mineral resources on its mine sites?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses the names of all the institutions or public officials being engaged.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company discloses the names of some institutions or public officials being engaged.</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company discloses the legal titles that grant it the rights to extract mineral resources for at least one mine site, but for less than half of its mine sites.</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Makes these documents freely available on its corporate website?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses the legal titles for all its mine sites on its corporate website.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company discloses the legal titles for all its mine sites, but they are only available on various subsidiaries’ websites</p>
                    <p>OR</p>
                    <p>The company discloses the legal titles for some of its mine sites on its corporate website.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company discloses the legal titles for some of its mine sites on various subsidiaries’ websites.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Publicly discloses these documents as full-text documents without redactions or omissions?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses in full-text the legal titles that grant it the rights to extract mineral resources for all its mine sites.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses in full-text the legal titles that grant it the rights to extract mineral resources for at least half of its mine sites, but no for all mine sites.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company discloses in full-text the legal titles that grant it the rights to extract mineral resources for at least one mine site but less than half of the mine sites.</p>
            </div>
        </div>
    </div>


    {{-- B.04.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB041"
    >B.04.1 The company practices tax transparency in all its tax jurisdictions. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B041" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it publicly:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Discloses its corporate structure mentioning all tax jurisdictions where it has registered entity(ies) and under what names (e.g. those of subsidiary or branch entities) it is known in that place?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses its corporate structure, mentioning all tax jurisdictions where it has registered entity(ies) and under what names it is known in that place.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company discloses its corporate structure, mentioning only some of the tax jurisdictions where it has registered entities and under what names it is known in that place</p>
                    <p>OR</p>
                    <p>The company discloses its corporate structure, mentioning all the names of its registered entites but not the tax jurisdictions where they are registered.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">n/a</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Reports on its approach to tax transparency, including its strategy relating to its presence in any low-tax jurisdictions?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company reports on its approach to tax transparency, including its strategy relating to its presence in any low-tax jurisdictions.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company reports on its approach to tax transparency, but does not disclose its strategy relating to its presence in any low-tax jurisdictions.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company mentions tax transparency, but does not report on its approach to tax transparency.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Discloses all tax benefits and tax holidays received at local and national levels in all tax jurisdictions where it has registered entity(ies)?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses data on all tax benefits, tax holidays, tax relief and tax credits it receives at both local and national levels.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses data on all tax benefits, tax holidays, tax relief and tax credits it receives but in an aggregated form, without information on local and national levels.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company discloses limited information on some of the tax benefits or tax credits it receives.</p>
            </div>
        </div>
    </div>



    {{-- B.05.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB051"
    >B.05.1 The company publicly discloses its ultimate beneficial owners. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B051" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it publicly:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Discloses the names of the individuals that are its ultimate beneficial owner(s) (i.e. not only direct shareholders), specifying any threshold ownership level applied to this disclosure?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses all the names of its ultimate individual beneficial owners – or controlling States in case of SOE.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company only discloses the names of some of its ultimate individual beneficial owners – or controlling States in case of SOE – owning together at least 50% of the company.</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company only discloses the name of one of its ultimate individual beneficial owner – or controlling State in case of SOE.</p>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Discloses how ownership is held and how control is exercised?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on how all its individual beneficial owners – or controlling States in case of SOE - hold ownership and on how they exercise control over.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses information on how all its individual beneficial owners – or controlling States in case of SOE - hold ownership, but does not provide information on how they exercise control over.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company discloses limited information on how some of its individual beneficial owners – or controlling State in case of SOE - hold ownership, but does not provide information on how they exercise control over.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Identifies any beneficiaries who are politically exposed persons and discloses regular updates of information?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses information on any beneficiaries who are politically exposed persons and discloses regular updates of information.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses information on any beneficiaries who are politically exposed persons, but does not disclose regular updates of information.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company is fully or partly State-owned and discloses limited information on the State body/ies that hold control over it.</p>
            </div>
        </div>
    </div>



    {{-- B.06.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB061"
    >B.06.1 The company publicly discloses all payments it makes to sub-national and national governments, providing disaggregated data on a project-level basis. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B061" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Publicly discloses project-level disaggregated information on all the payments made to sub-national and national governments?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <div class="col-span-11">
                    <p >The company discloses its payments made to sub-national and national governments (i.e.: in all its producing countries), on a project-disaggregated basis.</p>
                    <p>OR</p>
                    <p>The project discloses all its payments made to national governments, on a projectdisaggregated e to sub-national governments, but not on a project-disaggregated basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <div class="col-span-11">
                    <p >The company discloses all its payments made to national governments, on a projectdisaggregated  at the sub-national level</p>
                    <p>OR</p>
                    <p>The company discloses its payments made to national and sub-national governments, on a project-disaggregated basis, but not for all its producing countries.</p>
                    <p>OR</p>
                    <p>The company discloses all its payments made to national and sub-national governments, but not on a project-disaggregated basis.</p>
                </div>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses some of its payments made to sub-national and/or national governments.</p>
                    <p>OR</p>
                    <p>The company discloses all its payments made to national governments but not on a project-disaggregated basis, and not systematically showing disaggregation at the sub-national level.</p>
                    <p>OR</p>
                    <p>The company discloses an aggregated figure for all its payments to governments.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Makes this information freely available on its corporate website?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses on its corporate website all its payments made to sub-national and national governments,on a project-disaggregated basis .</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <div class="col-span-11">
                    <p >The company discloses all its payments made to sub-national and national governments on a project-disaggregated basis, but these are only available on subsidiaries’ websites</p>
                    <p>OR</p>
                    <p>The company discloses on its corporate website some of its payments made to sub-national and national governments, on a project-disaggregated basis</p>
                    <p>OR</p>
                    <p>The company discloseson its corporate website all its payments made to national governments, on a project-disaggregated basis, but does not disclose on its corporate website all its payments made to sub-national governments.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company discloses some of its payments made to sub-national and/or national governments on subsidiaries’ websites.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Updates this information on a yearly basis?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">As per (a), with update available on a yearly basis.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">As per (a), with update available on a yearly basis.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">As per (a), with update available on a yearly basis.</p>
            </div>
        </div>
    </div>



    {{-- B.07.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB071"
    >B.07.1 Where applicable, the company publicly discloses its lobbying practices and positions in all jurisdictions. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B071" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it publicly:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Discloses the roles and responsibilities for those involved in its lobbying activities in all jurisdictions?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses the names and responsibilities of all its lobbyists.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company discloses the names and responsibilities of its lobbyists, but the evidence does not cover all of the company’s activities.</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company refers to active lobbyists but does not disclose any names</p>
                    <p>OR</p>
                    <p>The company discloses the names of its lobbyists without their responsibilities (or only limited information) and the evidence does not cover all of the company’s activities.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Discloses the subject matter of its lobbying activities and the outcomes being sought?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses all the subject matters of all its lobbying activities and all the outcomes being sought.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses some of the subject matters of its lobbying activities and the outcomes being sought but the evidence does not cover all of company’s activities.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <p class="col-span-11">The company discloses some of the subject matters of its lobbying activities without clear information on the outcomes being sought and the evidence does not cover all of the company’s activities.</p>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Discloses the names of public officials or institutions being engaged?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company discloses the names of all the institutions or public officials being engaged.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company discloses the names of some institutions or public officials being engaged.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company discloses the nature of institutions or officials engaged in the context of lobbying activities, but does not disclose any names</p>
                    <p>OR</p>
                    <p>The company discloses the name of one institution or public official being engaged.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- B.08.1 --}}
    <h2 class="text-1xl font-semibold  cursor-pointer hover:underline mb-2"
    @click="toogleB081"
    >B.08.1 The company has systems in place to identify and assess any human rights, labour and environmental risks associated with its suppliers and contractors. <a class="text-red-500">(/6.00)</a></h2>
    <div x-show="B081" x-transition x-cloak style="display: none !important" class=" border-b border-t border-gray-400 py-2 mb-4">
        <p class="italic mb-2">Can your company demonstrate at the corporate level that it has systems in place to identify and assess risks related to its suppliers and contractors on:</p>
        {{-- a --}}
        <div>
            <p class="mb-4"><a class="font-semibold ">a.</a> Human rights issues?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to carry out due diligence on its suppliers and contractors to identify risks on human rights issues, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point </a>
                <p class="col-span-11">The company has systems in place to carry out due diligence on its suppliers and contractors to identify risks on human rights issues, but there is limited evidence of the scope and content of these systems</p>
            </div>
            <div class="grid grid-cols-12  mb-4">
                <a class="text-red-500  text-sm col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides evidence of only one or two cases of carrying out due diligence on its suppliers and contractors to identify risks on human rights issues, and there is no evidence of company-wide approaches or systems in place</p>
                    <p>OR</p>
                    <p>The company mentions that it carries out due diligence on its suppliers and contractors to identify risks on human rights issues, but does not provide any additional information.</p>
                </div>
            </div>
        </div>

        {{-- b --}}
        <div>
            <p class="mb-4"><a class="font-semibold">b.</a> Labour issues?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to carry out due diligence on its suppliers and contractors to identify risks on labour issues, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company has systems in place to carry out due diligence on its suppliers and contractors to identify risks on labour issues, but there is limited evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides evidence of only one or two cases of carrying out due diligence on its suppliers and contractors to identify risks on labour issues, and there is no evidence of company-wide approaches or systems in place</p>
                    <p>OR</p>
                    <p>The company mentions that it carries out due diligence on its suppliers and contractors to identify risks on labour issues, but does not provide any additional information.</p>
                </div>
            </div>
        </div>

        {{-- c --}}
        <div>
            <p class="mb-4"><a class="font-semibold">c.</a>Environmental issues?</p>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">2 points</a>
                <p class="col-span-11">The company has company-wide systems in place to carry out due diligence on its suppliers and contractors to identify risks on environmental issues, and there is detailed evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">1 point</a>
                <p class="col-span-11">The company has systems in place to carry out due diligence on its suppliers and contractors to identify risks on environmental issues, but there is limited evidence of the scope and content of these systems.</p>
            </div>
            <div class="grid grid-cols-12 mb-4">
                <a class="text-red-500  text-sm  col-span-1 text-center">0.5 point</a>
                <div class="col-span-11">
                    <p >The company provides evidence of only one or two cases of carrying out due diligence on its suppliers and contractors to identify risks on environmental issues, and there is no evidence of company-wide approaches or systems in place</p>
                    <p>OR</p>
                    <p>The company mentions that it carries out due diligence on its suppliers and contractors to identify risks on environmental issues, but does not provide any additional information.</p>
                </div>
            </div>
        </div>
    </div>
</div>
