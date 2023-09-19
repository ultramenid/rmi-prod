@extends('layout.index')


@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi h-min-screen">


        {{-- Overall text --}}
        <div class="max-w-6xl mx-auto sm:py-16 py-8">


            <h1 class="uppercase text-center text-gray-300 sm:text-3xl text-xl font-bold mb-6 px-4">{{__('Overall Company Result')}}</h1>
            <div class="flex w-full sm:flex-row flex-col flex-wrap px-4">
                <div class="bgrmi  sm:w-4/12 w-full">
                    <div class="flex items-center space-x-3 px-4  ">
                        <img src="{{ asset('assets/Economicdevelopicon.png') }}" alt="" class="w-9">
                        <a href="#" class="text-gray-300  flex underline text-xl">{{__('Economic Development')}}</a>
                    </div>
                    <div id="chart"></div>
                </div>
                <div class="bgrmi sm:w-4/12 w-full">
                    <div class="flex items-center space-x-3 px-4  ">
                        <img src="{{ asset('assets/handshake.png') }}" alt="" class="w-9">
                        <a href="#" class="text-gray-300  flex underline text-xl">{{__('Bussines Conduct')}}</a>
                    </div>
                    <div id="chart1"></div>
                </div>
                <div class="bgrmi sm:w-4/12 w-full">
                    <div class="flex items-center space-x-3 px-4  ">
                        <img src="{{ asset('assets/lifecycle.png') }}" alt="" class="w-9">
                        <a href="#" class="text-gray-300  flex underline text-xl">{{__('Lifecycle Management')}}</a>
                    </div>
                    <div id="chart2"></div>
                </div>
                <div class="bgrmi sm:w-4/12 w-full mt-12">
                    <div class="flex items-center space-x-3 px-4  ">
                        <img src="{{ asset('assets/Communitywel.png') }}" alt="" class="w-9">
                        <a href="#" class="text-gray-300  flex underline text-xl">{{__('Community Wellbeing')}}</a>
                    </div>
                    <div id="chart3"></div>
                </div>
                <div class="bgrmi sm:w-4/12 w-full mt-12">
                    <div class="flex items-center space-x-3 px-4  ">
                        <img src="{{ asset('assets/WorkingConditions.png') }}" alt="" class="w-9">
                        <a href="#" class="text-gray-300  flex underline text-xl">{{__('Working Conditions')}}</a>
                    </div>
                    <div id="chart4"></div>
                </div>
                <div class="bgrmi sm:w-4/12 w-full mt-12">
                    <div class="flex items-center space-x-3 px-4  ">
                        <img src="{{ asset('assets/leaf.png') }}" alt="" class="w-9">
                        <a href="#" class="text-gray-300  flex underline text-xl">{{__('Environmental Responsibility')}}</a>
                    </div>
                    <div id="chart5"></div>
                </div>
            </div>





        </div>

        {{-- rmi framework --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
            <h1 class="uppercase text-center text-gray-300 sm:text-3xl text-xl font-bold mb-6">{{__('RMI analytical framework')}}</h1>
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
                            <a class="text-gray-300 sm:text-base text-xs text-center px-1">{{__('Commitment')}} (14%)</a>
                        </div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t sm:w-7/12 w-5/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs px-1">{{__('Action')}} (58%)</a>
                        </div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t border-l border-r sm:w-2/12 w-3/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs text-center px-1">{{__('Effectiveness')}} (28%)</a>
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

                     <div  class="border-l border-gray-600">
                        <div class="flex "  >
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 ">
                                <img src="{{ asset('assets/handshake.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #d1af98">
                                <a  class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #8d5d43">
                                <a  href="{{ route('methodology', app()->getlocale() )}}" class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Business Conduct')}}</a>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #5d3c23">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
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
                                <a href="{{ route('methodology', app()->getlocale() )}}" class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Environmental Responsibility')}}</a>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #0e6f24">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <h1 class="uppercase text-center text-gray-300 sm:text-3xl text-xl font-bold mb-6">{{__('Companies')}}</h1>
        {{-- map --}}
         <div class="flex sm:flex-row flex-col justify-between">
            <div id="map" class="sm:block hidden sm:w-10/12 w-full overflow-auto h-screen sm:order-1 order-2" style=" background-color: #111725 "></div>
            <div class="flex flex-wrap sm:w-2/12 w-full sm:order-2 order-1  z-50">
                <div id="data1" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/18">ADARO</a>
                </div>
                <div id="data2" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/19">ANTAM</a>
                </div>
                <div id="data3" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/20">BRMS</a>
                </div>
                <div id="data4" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/21">BUKIT ASAM</a>
                </div>
                <div id="data5" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/22">CITA</a>
                </div>
                <div id="data6" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/23">GEMS</a>
                </div>
                <div id="data7" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/24">MERDEKA</a>
                </div>
                <div id="data8" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/25">TIMAH</a>
                </div>
                <div id="data9" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/26">TOBA BARA</a>
                </div>
                <div id="data10" style="background-color: #111725;"  class=" hover:bg-gray-500 text-yellow-100 font-bold hover:underscore lg:w-6/12 w-full items-center flex justify-center px-2 border border-gray-800 cursor-pointer">
                    <a href="{{$currenturl}}/corporate/27">VALE</a>
                </div>

            </div>

        </div>


         {{-- companies text --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
           <h1 class="uppercase text-center text-gray-300 sm:text-3xl text-xl font-bold mb-6">{{__('Companies')}}</h1>
           <p class="text-gray-300 sm:text-center text-left font-semibold leading-8">
            {{__('The RMI Reports')}} {{date('Y')}} {{__('covers 38 companies from 19 home countries, including publicly-listed, stated-owned and private companies. These companies operate in more than 780 mine sites in 49 producing countries and control over 200 closed or suspended mine sites. The assesment covers most mined commodities, excluding oil and gas. it is possible to filter by company, using the list of all companies on the left hand side, and also to filter by producing country or commodity, using the fields below.')}}</p>
        </div>

    </main>



    @include('partials.footer')
    <script>
        var economicdevelopment = JSON.parse('<?php echo $dataEconomicDevelopment ?>')
        var bussinesconduct = JSON.parse('<?php echo $dataBussinessConduct ?>')
        var lifecyclemanagement = JSON.parse('<?php echo $dataLifecyclemanagement ?>')
        var communitywellbeing = JSON.parse('<?php echo $dataCommunitywellbeing ?>')
        var workingconditions = JSON.parse('<?php echo $dataWorkingconditions ?>')
        var environmental = JSON.parse('<?php echo $dataEnviromental ?>')

        console.log(lifecyclemanagement)
        var options = {
          series: [{
            name: 'Economic Development %' ,
            type: 'bar',
            data: economicdevelopment.development,
          }, {
            name: 'Average %',
            type: 'line',
            data: economicdevelopment.developmentAverage,
          },{
            name: 'ED-ALL',
            type: 'area',
            data: economicdevelopment.developmentAll,
          }],

          chart: {
            id: 'development',
            group: 'charts',
            foreColor: 'gray',
            width: '100%',
            height: 400,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#0065b0', '#ffcd10', '#835640'],
          fill: {
            colors: ['#0065b0', '#ffcd10', '#835640'],

          },
          markers: {
            size: 0
          },
          labels:economicdevelopment.name,
          xaxis: {
              type: 'category',
              categories: [],
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var options1 = {
          series: [{
            name: 'Bussiness Conduct %' ,
            type: 'bar',
            data: bussinesconduct.bExecution,
          }, {
            name: 'Average %',
            type: 'line',
            data: bussinesconduct.bAverage,
          },{
            name: 'BC-ALL',
            type: 'area',
            data: bussinesconduct.bAll,
          }],

          chart: {
            id: 'busssines',
            group: 'charts',
            foreColor: 'gray',
            width: '100%',
            height: 400,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#865F47', '#ffcd10', '#85B645'],
          fill: {
            colors: ['#865F47', '#ffcd10', '#85B645'],

          },
          markers: {
            size: 0
          },
          labels:bussinesconduct.name,
          xaxis: {
              type: 'category',
              categories: []
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var options2 = {
          series: [{
            name: 'Lifecyle Management %' ,
            type: 'bar',
            data: lifecyclemanagement.management,
          }, {
            name: 'Average %',
            type: 'line',
            data: lifecyclemanagement.managementAverage,
          },{
            name: 'LM-ALL',
            type: 'area',
            data: lifecyclemanagement.managementAll,
          }],

          chart: {
            id: 'management',
            group: 'charts',
            foreColor: 'gray',
            width: '100%',
            height: 400,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#99277E', '#ffcd10', '#835640'],
          fill: {
            colors: ['#99277E', '#ffcd10', '#835640'],

          },
          markers: {
            size: 0
          },
          labels:lifecyclemanagement.name,
          xaxis: {
              type: 'category',
              categories: []
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var options3 = {
          series: [{
            name: 'Community Wellbeing %' ,
            type: 'bar',
            data: communitywellbeing.communityExecution,
          }, {
            name: 'Average %',
            type: 'line',
            data: communitywellbeing.communityAverage,
          },{
            name: 'CW-ALL',
            type: 'area',
            data: communitywellbeing.communityAll,
          }],

          chart: {
            id: 'community',
            group: 'charts',
            foreColor: 'gray',
            width: '100%',
            height: 400,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#E08330', '#ffcd10', '#835640'],
          fill: {
            colors: ['#E08330', '#ffcd10', '#835640'],

          },
          markers: {
            size: 0
          },
          labels:communitywellbeing.name,
          xaxis: {
              type: 'category',
              categories: []
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var options4 = {
          series: [{
            name: 'Working Conditions %' ,
            type: 'bar',
            data: workingconditions.condition,
          }, {
            name: 'Average %',
            type: 'line',
            data: workingconditions.workingAverage,
          },{
            name: 'WC-ALL',
            type: 'area',
            data: workingconditions.workingAll,
          }],

          chart: {
            id: 'working',
            group: 'charts',
            foreColor: 'gray',
            width: '100%',
            height: 400,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#D23A2B', '#ffcd10', '#835640'],
          fill: {
            colors: ['#D23A2B', '#ffcd10', '#835640'],

          },
          markers: {
            size: 0
          },
          labels:workingconditions.name,
          xaxis: {
              type: 'category',
              categories: []
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var options5 = {
          series: [{
            name: 'Environmental Responsibility %' ,
            type: 'bar',
            data: environmental.eResponsibility,
          }, {
            name: 'Average %',
            type: 'line',
            data: environmental.eAverage,
          },{
            name: 'ER-ALL',
            type: 'area',
            data: environmental.fAll,
          }],

          chart: {
            id: 'working',
            group: 'charts',
            foreColor: 'gray',
            width: '100%',
            height: 400,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#85B645', '#ffcd10', '#835640'],
          fill: {
            colors: ['#85B645', '#ffcd10', '#835640'],

          },
          markers: {
            size: 0
          },
          labels:environmental.name,
          xaxis: {
              type: 'category',
              categories: []
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
        var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
        var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
        chart.render();
        chart1.render();
        chart2.render();
        chart3.render();
        chart4.render();
        chart5.render();
    </script>
@endsection
