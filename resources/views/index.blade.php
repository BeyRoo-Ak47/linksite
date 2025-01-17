@extends('main')
@section('content')
<div class="card socleil-wrapper grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-x-2 px-1" >
    @foreach ($site_list as $item)  
        <div class="link_wrapper py-2">
            <a href="{{route('category',['id'=>$item->id])}}">
                <div class="button-19 w-full flex flex-row items-center justify-between gap-3 px-5 py-3 border-b-2  border-gray-200">
                    <div class="category w-full flex flex-row items-center justify-start gap-3 border-gray-200">
                        <img src="{{ 'https://streamingadmin.m27.shop/'.$item->icons }}" alt="icon" class="w-8">
                        <h3 class="text-center text-lg">{{ $item->name }}</h3>
                    </div>
                    <div class="click">
                        <img class="animated-img" src="{{asset('click.png')}}" alt="click" class="w-6">
                    </div>
                </div>
            </a>     
            <ul class="flex flex-col items-start gap-1 border py-1">
                @php
                    $count = 1;
                    $hasSites = false;
                @endphp
                @foreach ($sites as $site)
                    @if ($site->site_category_id === $item->id && $count <= 10)
                        @php
                            $hasSites = true;
                        @endphp
                        <li class='button-47 w-full'>
                            <a href="{{ $site->referral != null ? url('/landing?id=' . $site->id) : $site->url }}" target="{{$site->referral != null ? '':'_blank'}}" 
                                class="flex flex-row items-center justify-start gap-2 py-0 pl-2 w-full
                                    {{ 
                                        $site->ranking == 1 ? 'text-green-600 font-bold animate-charcter' : 
                                        ($site->ranking == 2 ? 'text-green-500 font-bold animate-charcter' : 
                                        ($site->ranking == 3 ? 'text-blue-400 font-bold animate-charcter' : 
                                        ($site->ranking == 4 ? 'font-bold' : 
                                        ($site->ranking == 5 ? 'font-bold' : ''))))
                                    }}">
                                <img class="rank" src="{{ asset('rank_icon/'.$count.'.jpg') }}" alt="{{ $site->name }}" >
                                <span class="text-sm">{{ $site->name }}</span>
                            </a>                                        
                        </li>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
                @if (!$hasSites)
                    <ul class="flex flex-col items-start px-2 gap-3 w-full">
                        @for ($i = 0; $i < 10; $i++)
                            <li class='button-47 w-full'>
                                <a href="/inquiry"
                                    class="flex flex-row items-center justify-start gap-2 py-0 pl-2 w-full">
                                    <img src="{{ asset('rank_icon/'.($i+1).'.jpg') }}" alt="site" 
                                    width="36" height="36">
                                    <span class="text-base md:text-md flex w-full items-center">
                                            <p class="animate-charcter">
                                                입점 문의
                                            </p>
                                            <img src="{{asset('registered.gif')}}" alt="Reg" class="w-10 ml-auto">
                                    </span>
                                </a>                                        
                            </li>
                        @endfor
                    </ul>
                @endif
            </ul>
        </div>
    @endforeach
</div>
@endsection