@extends('main')
@section('content')
    <div class="container flex w-full justify-center items-center flex-col">
        <div class=" p-3 border rounded-md border-2 mb-1">
            <a href="{{$site->url}}" target="_blank">
                <img src="{{$site->logo_url==null ? 'https://streamingadmin.m27.shop/'.$site->logo : $site->logo_url}}" alt="logo" class="w-64 h-auto">
            </a>
        </div>
        <div class="detail text-center">
            <a href="{{$site->url}}" target="_blank">
                <p class="text-2xl animate-charcter">URL: {{ $site->url }}</p>
            </a>
            <hr>
            <strong class="referral text-2xl animate-charcter">회원코드: {{ $site->referral }}</strong class="text-lg">
        </div>
        <div class=" p-3 border rounded-md border-2 mb-1">
            <a href="{{$site->url}}" target="_blank">
                <img src="https://streamingadmin.m27.shop/{{$site->logo}}" alt="logo" class="h-auto">
            </a>
        </div>
        <div class="detail text-center">
            <a href="{{$site->url}}" target="_blank">
                <p class="text-2xl animate-charcter">URL: {{ $site->url }}</p>
            </a>
            <hr>
            <strong class="referral text-2xl animate-charcter">회원코드: {{ $site->referral }}</strong class="text-lg">
        </div>
        <div class="back bg-blue-700 p-3 rounded-lg mt-7">
            <a class="text-white" href="{{route('category',['id'=>$site->site_category_id])}}" >
                <p>목록으로 돌아가기 &nbsp &#9777;</p>
            </a>
        </div>
    </div>
@endsection