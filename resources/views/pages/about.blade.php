@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="h-screen bgrmi" >
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
            <h1 class="uppercase text-center text-gray-300 text-3xl font-bold mb-6">{{__('About')}}</h1>
            <p class="text-gray-300 text-xl text-left ">{{__('The RMI Reports 2020 covers 38 companies from 19 home countries, including publicly-listed, stated-owned and private companies. These companies operate in more than 780 mine sites in 49 producing countries and control over 200 closed or suspended mine sites. The assesment covers most mined commodities, excluding oil and gas. it is possible to filter by company, using the list of all companies on the left hand side, and also to filter by producing country or commodity, using the fields below.')}}
            </p>
        </div>

    </main>


    @include('partials.footer')
@endsection
