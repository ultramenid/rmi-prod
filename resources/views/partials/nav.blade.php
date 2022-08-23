<div class="bg-black py-10 shadow-2xl sm:block hidden">
    <div class="max-w-6xl mx-auto px-6 md:px-8 bg-black">
        <nav class="flex justify-between leading-5 overflow-x-auto scrollbar-hide ">
            <a href="{{ route('about', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline @if($nav == "about") underline @endif ">{{__('About')}}</a>
            <a href="{{ route('index', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline @if($nav == "index") underline @endif">{{__('Indexing Result')}}</a>
            <a href="{{ route('methodology', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline @if($nav == "methodology") underline @endif">{{__('Methodology')}}</a>
            <a  href="{{ route('corporateprofile', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline @if($nav == "corporateprofile") underline @endif">{{__('Corporate Profile')}}</a>
        </nav>
    </div>
</div>
