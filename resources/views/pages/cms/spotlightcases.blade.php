@extends('layout.dashboard')

@section('content')
    @include('pages.cms.cmspartials.header')
    @include('pages.cms.cmspartials.navbar')

    <main class="bg-white dark:bg-newgray-900 min-h-screen">
        <div class="max-w-6xl px-6 mx-auto">
            <div class="sm:pt-8 pt-4 ">
                <div class="grid grid-cols-12">
                    <ul class="overflow-x-auto scrollbar-hide whitespace-nowrap  sm:col-span-3 sm:space-y-3  space-y-0 sm:space-x-0 mb-6 space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
                        @include('pages.cms.partials.sidebarCorporateProfile')
                    </ul>
                    <div class="sm:col-span-9 col-span-12 space-y-1">
                        <livewire:spotlight-cases-component />
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
