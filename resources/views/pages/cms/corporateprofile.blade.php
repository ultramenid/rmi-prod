@extends('layout.dashboard')

@section('content')
    @include('pages.cms.cmspartials.header')
    @include('pages.cms.cmspartials.navbar')

    <main class="bg-white dark:bg-newgray-900 min-h-screen">
        <div class="max-w-6xl px-6 py-6 mx-auto ">
            <livewire:corporates-master-component />
        </div>
    </main>
@endsection
