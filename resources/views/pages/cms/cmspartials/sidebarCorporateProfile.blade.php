<ul class="overflow-x-auto scrollbar-hide whitespace-nowrap  sm:col-span-3 sm:space-y-3  space-y-0 sm:space-x-0 mb-6 space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
    <li class="text-gray-500">
        <a wire:click='setSidenav("overview")'  class="  cursor-pointer text-sm @if ($sidenav == 'overview') font-bold px-2 border-l-2  border-black dark:border-white dark:text-white text text-newgray-900 @endif    dark:hover:text-white hover:text-black  " >
            Overview
        </a>
    </li>
    <li class="text-gray-500">
        <a wire:click='setSidenav("operationarea")' class="cursor-pointer text-sm @if ($sidenav == 'operationarea') font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900 @endif  dark:hover:text-white hover:text-black" >
            Operation Area
        </a>
    </li>

    <li class="text-gray-500">
        <a wire:click='setSidenav("financialandownership")' class="cursor-pointer text-sm @if ($sidenav == 'financialandownership') font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900 @endif  dark:hover:text-white hover:text-black" >
            Financial And Ownership
        </a>
    </li>

    <li class="text-gray-500">
        <a wire:click='setSidenav("corporatenetwork")' class="cursor-pointer text-sm @if ($sidenav == 'corporatenetwork') font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900 @endif  dark:hover:text-white hover:text-black" >
            Corporate Network
        </a>
    </li>

    <li class="text-gray-500">
        <a wire:click='setSidenav("spotlightcases")' class="cursor-pointer text-sm @if ($sidenav == 'spotlightcases') font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900 @endif  dark:hover:text-white hover:text-black" >
            Spotlight Cases ETC
        </a>
    </li>

</ul>
