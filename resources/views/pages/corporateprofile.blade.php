@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi">
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8 min-h-screen">
            {{-- <livewire:corporate-profile-component /> --}}
            <div class="text-center">
                <h1 class="uppercase text-center text-gray-300 text-3xl font-bold mb-6">{{__('List of all companies')}}</h1>
            </div>

            <div class="bg-gray-300  px-4 py-6">
                <div class="flex justify-between">
                    <div class="w-7/12 px-2 py-3">
                        <h2 class="text-rmi text-xl font-bold">Company Name</h2>
                    </div>
                    <div class="w-5/12 px-2 py-3">
                        <h2 class="text-rmi text-xl font-bold">Location</h2>
                    </div>
                </div>
                @foreach ($corporates as $item)
                    <div class="flex sm:flex-row flex-col justify-between mb-6">
                        <div class="sm:w-7/12 w-full px-2 py-3 border border-rmi items-center flex space-x-6">
                            <img src="{{ asset('storage/files/shares/'.$item->logo) }}" alt="responsible mining indonesia" class="h-20">
                            <a href="{{ route('corporatedetail', [app()->getLocale(), $item->id]) }}" class="hover:underline text-rmi text-xl font-bold">{{$item->name}}</a>
                        </div>
                        <div class="sm:w-5/12 w-full  px-2 py-3 border-r border-b sm:border-t sm:border-l-0 border-l border-rmi">
                            <h2 class="text-rmi font-light">{{ (app()->getLocale() == 'en') ? $item->lokasiEN :  $item->lokasi}}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="flex flex-col justify-center">
                @foreach ($corporates as $item)
                    <a href="{{ route('corporatedetail', [app()->getLocale(), $item->id]) }}" class="underline text-gray-200 text-center mb-1">{{$item->name}}</a>
                @endforeach
            </div> --}}

        </div>
    </main>


    @include('partials.footer')
@endsection
