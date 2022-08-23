@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.headerDetail')
    @include('partials.nav')

    <main class="bgrmi">
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8 min-h-screen">
            <livewire:corporate-profile-component :idcorporate="$id"/>
        </div>
    </main>


    @include('partials.footer')
@endsection
