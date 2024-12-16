@extends('main')
@section('content')
<section class="body-font  relative text-gray-400">
    @if(session('success'))
    <div class="mt-2 bg-green-500 text-sm text-center text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-success-label">
        <span id="hs-solid-color-success-label" class="font-bold">Success</span> {{Session::get('success')}}
    </div>
    @endif
    <form method="POST" action="/sent">
        @csrf
        @honeypot
        <div class="container mx-auto px-5 py-5">
        
        <div class="mb-12 flex w-full flex-col text-center">
            <h1 class="title-font mb-4 text-2xl text-blue-700 sm:text-3xl italic font-bold">언제든지 저희에게 연락주세요!
            </h1>
            <hr class="h-2">
            <p class="mx-auto text-blue-700 text-base leading-relaxed lg:w-2/3">언제든지 저희에게 연락하세요! 질문, 피드백 또는 협업 제안이 있으시다면, 여러분의 의견을 듣고 싶습니다.
            </p>
        </div>
    
        <div class="mx-auto md:w-2/3 lg:w-1/2">
            <div class="-m-2 flex flex-wrap">
    
            <!-- form -->
            <div class="w-1/2 p-2 mb-4">
                <div class="relative">
                <input type="text" id="name" name="name" class="peer w-full rounded border border-gray-700  bg-opacity-40 py-1 px-3 text-base leading-8 text-blue-700 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500  focus:ring-indigo-900" placeholder="Name" required/>
                <label for="name" class="absolute left-3 -top-6 text-sm leading-7 text-blue-700">닉네임</label>
                </div>
            </div>
            <div class="w-1/2 p-2 mb-4">
                <div class="relative">
                <select id="countries" name="type" class="bg-transparent border border-gray-300 text-blue-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-blue-700 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option class="bg-transparent text-blue-700" selected value="등록된 사이트하기">사이트 등록하기</option>
                    <option class="bg-transparent text-blue-700" value="광고문의">광고문의</option>
                    <option class="bg-transparent text-blue-700" value="링크 수정">링크 수정</option>
                    <option class="bg-transparent text-blue-700" value="기타 문의">기타 문의</option>
                </select>
                <label class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-blue-700 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">문의 유형</label>
                </div>
            </div>
            <div class="w-1/2 p-2 mb-2">
                <div class="relative">
                <input type="number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="tel" name="tel"class="peer w-full rounded border border-gray-700  bg-opacity-40 py-1 px-3 text-base leading-8 text-blue-700 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500  focus:ring-indigo-900" placeholder="Email" required/>
                <label class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-blue-700 transition-all">담당자(<span class="text-lg">&#9743;</span>)</label>
                </div>
            </div>
            <div class="w-1/2 p-2 mb-2">
                <div class="relative">
                <input type="text" id="tele" name="telegram" class="peer w-full rounded border border-gray-700 bg-opacity-40 py-1 px-3 text-base leading-8 text-blue-700 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500  focus:ring-indigo-900" placeholder="Email" required/>
                <label class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-blue-700 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">텔레그램 &nbsp; (Link<span class="text-lg">&#x260D;</span>)</label>
                </div>
            </div>
            <div class="w-full p-2 mb-2">
                <div class="relative">
                <input type="text" id="logo" name="logo" class="peer w-full rounded border border-gray-700 bg-opacity-40 py-1 px-3 text-base leading-8 text-blue-700 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500  focus:ring-indigo-900" placeholder="Email" />
                <label class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-blue-700 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Logo's url <span class="text-red-700">&#9728;</span><span style="height:10px; width:10px ;background:green; border-radius:50%;"></span></label>
                </div>
            </div>
            <div class="mt-4 w-full p-2">
                <div class="relative">
                <textarea id="message" name="message" class="peer h-40 w-full resize-none rounded border border-gray-700  bg-opacity-40 py-1 px-3 text-base leading-6 text-blue-700 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500  focus:ring-indigo-900" placeholder="Message" required></textarea>
                <label for="message" class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-blue-700 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">
                    문의 내용
                </label>
                </div>
            </div>
            <div class="w-full p-2 text-center">
                <button type="submit" class="p-3 border rounded bg-blue-500 text-white">전송된</button>
            </div>
    
    
            <!-- footer -->
            
    
            </div>
        </div>
    
        </div>
    </form>

</section>
@endsection