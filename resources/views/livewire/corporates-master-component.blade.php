<div>
    <div x-data="{ open: @entangle('deleter') }">
        @include('livewire.corporates.deleterCorporates')
    </div>
    <livewire:toastr />
    <div class="flex justify-between mb-6">
        <h1 class="sm:text-2xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Corporates Profile</h1>

        <a data-turbolinks="false" href="{{ url('/cms/page/overview') }}" id="myBtn" class="inline-flex sm:px-12 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
            Add
        </a>

    </div>

    <input wire:model='search' type="text" class=" mr-2  dark:bg-newgray-900 dark:border-opacity-60 dark:border-gray-700 dark:text-gray-300 appearance-none border rounded lg:w-1/4 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  placeholder="Search. . . ">


    <div class="flex flex-col py-5">
        <div class="-my-2  sm:-mx-6 lg:-mx-8 ">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8 ">
                <div class="shadow  border-b border-gray-200 dark:border-gray-800 sm:rounded-lg dark:bg-opacity-10  dark:text-white " >
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-800 rounded-lg  ">
                    <thead >
                        <tr >
                            <th wire:click='sortingField("name")' class="px-6 py-4 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                               <div class="flex space-x-1">
                                   <a>Corporates Name</a>
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class=" text-right bg-gray-50 dark:bg-opacity-10  dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider ">

                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-opacity-20 dark:text-white divide-y divide-gray-200 dark:divide-gray-900">
                        @forelse ($corporates as $item)
                                <tr>
                                    <td class="px-6 py-4 break-words text-sm font-bold text-gray-500 dark:text-gray-100">
                                        {{ $item->name }}
                                    </td>
                                    <td colspan="2" class=" break-words text-sm text-gray-500 dark:text-gray-300 ">
                                        <div class="relative " x-data="{ open: false }">

                                            <button class="block focus:outline-none text-center" @click="open = true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                  </svg>
                                            </button>

                                            <ul
                                                class="absolute mt-2 sm:left-0 right-0 bg-white rounded-lg shadow-lg block w-24 z-10"
                                                x-show.transition="open"
                                                @click.away="open = false"
                                                x-cloak style="display: none !important">
                                                <a data-turbolinks="false" href="{{ url('/cms/corporates/'.$item->id) }}"><li class="block hover:bg-gray-200 cursor-pointer py-1 mt-2 px-4 dark:text-gray-500" @click.away="open = false">Edit</li></a>
                                                <li class="block hover:bg-gray-200 cursor-pointer  py-1 mb-2 px-4 dark:text-gray-500"  wire:click="delete({{ $item->id }})" @click.away="open = false">Delete</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="whitespace-nowrap text-sm text-gray-500 px-6 py-3">
                                No data found
                            </td>
                        </tr>
                        @endforelse
                        <!-- More rows... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- @if ($products)
{{ $products->links('livewire.pagination') }}
@endif --}}

</div>
