@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection


@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi min-h-screen"

    >
        <div class="max-w-6xl mx-auto px-6 sm:py-16 py-8">
            {{-- <div class="">{!! $data->content ?? '' !!}</div> --}}
            {{-- @include('partials.methodology1') --}}
            {{-- <h1 class="uppercase text-gray-300 text-3xl font-bold mb-6">{{__('About')}}</h1> --}}

            @include('partials.methodology2')

        </div>

        {{-- modal --}}
        {{-- @include('partials.modalMethodology') --}}


    </main>




    @include('partials.footer')
@endsection
