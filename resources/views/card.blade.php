@extends('main')
@section('content')
    @php
        $newValue = request()->input('id');
    @endphp
    @if($newValue)
        @foreach($site_list as $site)
            @if($site->id == $newValue)
                <div class="title mb-2 flex">
                    <img src="https://streamingadmin.m27.shop/{{$site->icons}}" alt="Icon" class="w-10">
                    <h2 class="py-2 px-4 text-2xl flex">
                        {{$site->name}}
                    </h2>
                </div>
                <hr class="w-full h-1 mb-2">
            @endif    
        @endforeach
    @endif
    <div class="card px-2 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
    @foreach($sites as $site)
        <a href="{{ $site->referral != null ? url('/landing?id=' . $site->id) : $site->url }}" target="{{$site->referral != null ? '':'_blank'}}" class="w-full h-full relative">
            @if($site->ranking <= 3)
                <div class="absolute cardLogo z-10 top-0 left-0 text-white px-3 py-1 text-xs font-bold rounded-lg">
                    <!-- Rank {{$site->ranking}} -->
                    <img class="rank w-6" src="{{ asset('rank_icon/'.$site->ranking.'.jpg') }}" alt="{{ $site->name }}" >
                </div>
            @endif
            <div class="button-47 w-full h-full flex flex-col justify-center py-5
                {{ 
                    $site->ranking == 1 ? 'text-green-600 font-bold gradient-border' : 
                    ($site->ranking == 2 ? 'text-green-500 font-bold gradient-border' : 
                    ($site->ranking == 3 ? 'text-blue-400 font-bold gradient-border' : 
                    ($site->ranking == 4 ? 'text-green-300 font-bold' : 
                    ($site->ranking == 5 ? 'text-red-300 font-bold' : ''))))
                }}
            ">
                <img src="{{$site->logo_url==null ? 'https://streamingadmin.m27.shop/'.$site->logo : $site->logo_url}}" alt="logo" class="h-16 mt-8">
                <div class="title mt-5 w-full text-center">
                    <h2 class="text-md md:text-lg font-bold text-blue-900">
                        {{$site->name}}
                    </h2>
                </div>
            </div>
        </a>
    @endforeach
</div>


@endsection