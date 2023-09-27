<div>
    <div class="text-right mb-6">
        <button wire:loading.remove wire:target='storeCorporate'  wire:click='storeCorporate' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
            Save
        </button>
        <button wire:loading wire:target='storeCorporate' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
            <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </button>
    </div>
    <div class="grid grid-cols-12" x-data="corporateProfiles">
        <div class= "sm:col-span-3 col-span-12" >
            <ul class="overflow-x-auto scrollbar-hide whitespace-nowrap  sm:col-span-3 sm:space-y-3  space-y-0 sm:space-x-0 mb-6 space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                <li class="text-gray-500">
                    <template x-if="Overview">
                        <a
                        @click="toogleOverview"   class="  cursor-pointer text-sm  font-bold px-2 border-l-2  border-black dark:border-white dark:text-white text text-newgray-900   dark:hover:text-white hover:text-black  " >
                        Overview
                        </a>
                    </template>
                    <template x-if="!Overview">
                        <a @click="toogleOverview"   class="cursor-pointer text-sm  dark:hover:text-white hover:text-black  " >
                            Overview
                        </a>
                    </template>
                </li>

                <li class="text-gray-500">
                    <template x-if="Operation">
                        <a @click="toogleOperation" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                            Area
                        </a>
                    </template>
                    <template x-if="!Operation">
                        <a @click="toogleOperation" class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                            Area
                        </a>
                    </template>
                </li>

                <li class="text-gray-500">
                    <template x-if="Financial">
                        <a @click="toogleFinancial" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                            Financial
                        </a>
                    </template>
                    <template x-if="!Financial">
                        <a @click="toogleFinancial" class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                            Financial
                        </a>
                    </template>
                </li>

                <li class="text-gray-500">
                    <template x-if="Ownership">
                        <a @click="toogleOwnership" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                            Ownership
                        </a>
                    </template>
                    <template x-if="!Ownership">
                        <a @click="toogleOwnership" class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                            Ownership
                        </a>
                    </template>
                </li>

                <li class="text-gray-500">
                    <template x-if="CorporateNetwork">
                        <a @click="toogleCorporateNetwork" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                            Corporation
                        </a>
                    </template>
                    <template x-if="!CorporateNetwork">
                        <a @click="toogleCorporateNetwork" class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                            Corporation
                        </a>
                    </template>
                </li>

                <li class="text-gray-500">
                    <template x-if="Spotlight">
                        <a @click="toogleSpotlight" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                            Spotlight
                        </a>
                    </template>
                    <template x-if="!Spotlight">
                        <a @click="toogleSpotlight" class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                            Spotlight
                        </a>
                    </template>
                </li>

                <li class="text-gray-500">
                    <a class=" text-sm  " >
                        Data :
                    </a>
                </li>
                <li class="text-gray-500">
                    <template x-if="eEconomicdevelopment">
                        <a @click="toogleEconomicDevelopment" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                           - Economic Development
                        </a>
                    </template>
                    <template x-if="!eEconomicdevelopment">
                        <a @click="toogleEconomicDevelopment" class="cursor-pointer px-2 text-sm  dark:hover:text-white hover:text-black" >
                            - Economic Development
                        </a>
                    </template>
                </li>
                <li class="text-gray-500">
                    <template x-if="dataBconduct">
                        <a @click="toogleDataBconduct" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                           - Bussines Conduct
                        </a>
                    </template>
                    <template x-if="!dataBconduct">
                        <a @click="toogleDataBconduct" class="cursor-pointer px-2 text-sm  dark:hover:text-white hover:text-black" >
                            - Bussines Conduct
                        </a>
                    </template>
                </li>
                <li class="text-gray-500">
                    <template x-if="eLifecyclemanagement">
                        <a @click="toogleLifecyclemanagement" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                           - Lifecycle Management
                        </a>
                    </template>
                    <template x-if="!eLifecyclemanagement">
                        <a @click="toogleLifecyclemanagement" class="cursor-pointer px-2 text-sm  dark:hover:text-white hover:text-black" >
                            - Lifecycle Management
                        </a>
                    </template>
                </li>
                <li class="text-gray-500">
                    <template x-if="eCommunitywellbeing">
                        <a @click="toogleCommunitywellbeing" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                           - Community Wellbeing
                        </a>
                    </template>
                    <template x-if="!eCommunitywellbeing">
                        <a @click="toogleCommunitywellbeing" class="cursor-pointer px-2 text-sm  dark:hover:text-white hover:text-black" >
                            - Community Wellbeing
                        </a>
                    </template>
                </li>
                <li class="text-gray-500">
                    <template x-if="eWorkingCondition">
                        <a @click="toogleWorkingcondition" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                           - Working Condition
                        </a>
                    </template>
                    <template x-if="!eWorkingCondition">
                        <a @click="toogleWorkingcondition" class="cursor-pointer px-2 text-sm  dark:hover:text-white hover:text-black" >
                            - Working Condition
                        </a>
                    </template>
                </li>

                <li class="text-gray-500">
                    <template x-if="eResponsibility">
                        <a @click="toogleeResponsibility" class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                           - Environmental Responsibility
                        </a>
                    </template>
                    <template x-if="!eResponsibility">
                        <a @click="toogleeResponsibility" class="cursor-pointer px-2 text-sm  dark:hover:text-white hover:text-black" >
                            - Environmental Responsibility
                        </a>
                    </template>
                </li>


            </ul>
        </div>
        <livewire:toastr />

        <div class="sm:col-span-9 col-span-12 " >


            {{-- overview --}}
            <div x-show="Overview" x-cloak style="display: none !important"  class="pb-6">
                <div class="flex  justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Overview</h1>

                </div>
                <div class="mb-6">
                    <label class="text-newgray-900 dark:text-gray-300">Corporate Name:</label>
                    <input type="text" class=" w-full border border-gray-300 py-1 px-4 focus:outline-none" id="corporatename" wire:model.defer='corporatename' placeholder="Name. . . ">
                </div>

                <div class="mb-6">
                    <label class="text-newgray-900 dark:text-gray-300">Corporate Category:</label>
                    <label class="w-full">
                        <div wire:click='toogleCategory'    type="text" name="" id="" class="w-full mb-2 bg-gray-100  text-gray-700     border  py-1  px-4 focus:outline-none border-gray-300 dark:border-opacity-20" >  {{$category}}
                            @foreach ($categories as $key => $value)
                            <a class="inline-flex justify-between   bg-black text-white  rounded py-1 px-2 focus:outline-none items-center">{{$value}}
                                <svg wire:click='deleteCategory({{$key}})' class="ml-1 h-4 w-4 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></a>
                        @endforeach
                        </div>
                    </label>
                    <div class="flex flex-wrap space-x-4">

                    </div>
                    @if ($isCategory)
                    <div class="shadow px-4 py-4 flex flex-col mt-2  bg-black relative "  >
                            <div class="relative py-4">
                                <div class="absolute top-0 right-0 text-white">
                                    <svg wire:click='closeCategory' xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg></div>
                            </div>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('nikel')" >Nikel</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('emas')" >Emas</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('batubara')" >Batubara</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('pasirbesi')" >Pasir Besi</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('timah')" >Timah</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('bauksit')" >Bauksit</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('tembaga')" >Tembaga</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('perak')" >Perak</a>
                            <a class=" text-white py-1 hover:bg-gray-700 px-4 cursor-pointer" wire:click="setCategory('mangan')" >Mangan</a>
                    </div>
                    @endif
                </div>

                <div class="mb-6">
                    <label class="text-newgray-900 dark:text-gray-300">Group Name:</label>
                    <input type="text" class="w-full border border-gray-300 py-1 px-4 focus:outline-none" id="groupname" wire:model.defer='groupname' placeholder="Group Name. . . ">
                    @error('groupname') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-6 flex flex-col">
                    <label class="text-newgray-900 dark:text-gray-300">Location</label>
                    <textarea cols="80" id="location"  rows="4"  wire:model.defer='location' required placeholder="Location. . ." class="border-gray-300 border px-4 py-1 focus:outline-none"></textarea>
                </div>
                <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#overviewenglish',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('overviewenglish', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="overviewenglish" name="overviewenglish"  wire:model.defer='overviewenglish' required></textarea>
                    </div>

                <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#overviewindonesia',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('overviewindonesia', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="overviewindonesia" name="overviewindonesia"  wire:model.defer='overviewindonesia' required></textarea>
                    </div>
            </div>


            {{-- operationarea --}}
            <div x-show="Operation" x-cloak style="display: none !important" class="pb-6">
                <div class="flex  justify-between items-center mb-2" >
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Operation Area</h1>
                </div>
                <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#operationenglish',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('operationenglish', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="operationenglish" name="operationenglish"  wire:model.defer='operationenglish' required></textarea>
                    </div>

                <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#operationindonesia',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('operationindonesia', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="operationindonesia" name="operationindonesia"  wire:model.defer='operationindonesia' required></textarea>
                    </div>
            </div>


            {{-- financial --}}
            <div x-show="Financial" x-cloak style="display: none !important"  class="pb-6">
                <div class="flex justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Financial</h1>
                </div>
                <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#financialenglish',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('financialenglish', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="financialenglish" name="financialenglish"  wire:model.defer='financialenglish' required></textarea>
                    </div>

                <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#financialindonesia',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('financialindonesia', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="financialindonesia" name="financialindonesia"  wire:model.defer='financialindonesia' required></textarea>
                    </div>
            </div>

            {{--  ownership --}}
            <div x-show="Ownership" x-cloak style="display: none !important"  class="pb-6">
                <div class="flex justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold"> Ownership</h1>
                </div>
                <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#ownershipenglish',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('ownershipenglish', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="ownershipenglish" name="ownershipenglish"  wire:model.defer='ownershipenglish' required></textarea>
                    </div>

                <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#ownershipindonesia',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('ownershipindonesia', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="ownershipindonesia" name="ownershipindonesia"  wire:model.defer='ownershipindonesia' required></textarea>
                    </div>
            </div>


            {{-- Corporation --}}
            <div x-show="CorporateNetwork" x-cloak style="display: none !important"  class="pb-6">
                <div class="flex justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Corporation</h1>

                </div>
                <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#corporatenetworkenglish',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('corporatenetworkenglish', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="corporatenetworkenglish" name="corporatenetworkenglish"  wire:model.defer='corporatenetworkenglish' required></textarea>
                    </div>

                <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#corporatenetworkindonesia',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('corporatenetworkindonesia', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="corporatenetworkindonesia" name="corporatenetworkindonesia"  wire:model.defer='corporatenetworkindonesia' required></textarea>
                    </div>
            </div>

            {{-- spotlight --}}
            <div x-show="Spotlight" x-cloak style="display: none !important"  class="pb-6">
                <div class="flex justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Spotlight</h1>

                </div>
                <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#spotlightenglish',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('spotlightenglish', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="spotlightenglish" name="spotlightenglish"  wire:model.defer='spotlightenglish' required></textarea>
                    </div>

                <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
                <div class="w-full  "
                        wire:ignore
                        x-init="
                        tinymce.init({
                            selector: '#spotlightindonesia',
                            height : 500,
                            height : '70vh',
                            relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                content_style: 'body {  background-color: #f4f5f7; }',
                                plugins:
                                    'lists advlist autolink  link image  charmap    anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template  help',

                                    toolbar: ' fullscreen fontfamily fontsizeselect fontsize   bold italic underline forecolor backcolor |  link image  |  bullist numlist   alignleft aligncenter alignright alignjustify outdent indent| ' +
                                            ' | media  | ' +
                                            ' backcolor emoticons |undo redo  help',
                                    menu: {
                                    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                                    },
                                    menubar: ' file edit view insert format tools table help',
                                    file_picker_callback : function(callback, value, meta) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                        var cmsURL = '/cms/' + 'rmi-filemanager?editor=' + meta.fieldname;
                                        if (meta.filetype == 'image') {
                                            cmsURL = cmsURL + '&type=Images';
                                        } else {
                                            cmsURL = cmsURL + '&type=Files';
                                        }
                                        tinyMCE.activeEditor.windowManager.openUrl({
                                            url : cmsURL,
                                            title : 'Filemanager',
                                            width : x * 0.8,
                                            height : y * 0.8,
                                            resizable : 'yes',
                                            close_previous : 'no',
                                            onMessage: (api, message) => {
                                            callback(message.content);
                                            }
                                        });
                                    },
                                    setup: function(editor) {
                                        editor.on('change', function(e) {
                                            @this.set('spotlightindonesia', editor.getContent());
                                    });
                                }
                        });">
                        <textarea rows="20" id="spotlightindonesia" name="spotlightindonesia"  wire:model.defer='spotlightindonesia' required></textarea>
                    </div>
            </div>

            {{-- Economic Development --}}
            <div x-show="eEconomicdevelopment" x-cloak style="display: none !important"  class="pb-6 h-screen">
                <div class="flex  justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Economic Development</h1>
                </div>
                <div class="mb-4 ">
                    <label class="text-newgray-900 dark:text-gray-300">Development:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='development' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">Average:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='developmentAverage' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">E-ALL:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='developmentAll' placeholder="0">
                </div>
            </div>

            {{-- Bussines Conduct --}}
            <div x-show="dataBconduct" x-cloak style="display: none !important"  class="pb-6 h-screen">
                <div class="flex  justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Bussines Conduct</h1>
                </div>
                <div class="mb-4 ">
                    <label class="text-newgray-900 dark:text-gray-300">Execution:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='execution' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">Average:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='bAverage' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">B-ALL:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='bAll' placeholder="0">
                </div>
            </div>

            {{-- Lifecycle Management --}}
            <div x-show="eLifecyclemanagement" x-cloak style="display: none !important"  class="pb-6 h-screen">
                <div class="flex  justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Lifecycle Management</h1>
                </div>
                <div class="mb-4 ">
                    <label class="text-newgray-900 dark:text-gray-300">Management:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='management' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">Average:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='managementAverage' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">B-ALL:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='managementAll' placeholder="0">
                </div>
            </div>
            {{-- Community Wellbeing --}}
            <div x-show="eCommunitywellbeing" x-cloak style="display: none !important"  class="pb-6 h-screen">
                <div class="flex  justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Community Wellbeing</h1>
                </div>
                <div class="mb-4 ">
                    <label class="text-newgray-900 dark:text-gray-300">Execution:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='communityExecution' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">Average:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='communityAverage' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">B-ALL:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='communityAll' placeholder="0">
                </div>
            </div>

            {{-- Working Conditions --}}
            <div x-show="eWorkingCondition" x-cloak style="display: none !important"  class="pb-6 h-screen">
                <div class="flex  justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Working Conditions</h1>
                </div>
                <div class="mb-4 ">
                    <label class="text-newgray-900 dark:text-gray-300">Condition:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='condition' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">Average:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='workingAverage' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">B-ALL:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='workingAll' placeholder="0">
                </div>
            </div>

            {{-- Environmental Responsibility --}}
            <div x-show="eResponsibility" x-cloak style="display: none !important"  class="pb-6 h-screen">
                <div class="flex  justify-between items-center mb-2">
                    <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Environmental Responsibility</h1>
                </div>
                <div class="mb-4 ">
                    <label class="text-newgray-900 dark:text-gray-300">Responsibility:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='responsibility' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">Average:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='fAverage' placeholder="0">
                </div>
                <div class="mb-4">
                    <label class="text-newgray-900 dark:text-gray-300">F-ALL:</label>
                    <input type="number" class="w-full border border-gray-300 py-1 px-4 focus:outline-none"  wire:model.defer='fAll' placeholder="0">
                </div>
            </div>

        </div>

    </div>

</div>
