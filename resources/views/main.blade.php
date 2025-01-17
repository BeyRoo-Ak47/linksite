<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Alllink</title>

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
        <link rel="icon" href="{{asset('john-logo.png')}}" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <style>
                
        </style>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body style="scrollbar-width:thin">



<!-- drawer init and show -->
        <div class="text-center bg-blue-600 flex justify-center items-center">
            <header class="container flex flex-col items-start sm:px-16 md:px-24">
                <nav id="main-nav" class="flex flex-col md:flex-row md:w-10/12  justify-between items-center bg-blue-600 py-2 pr-4">
                    <div class="mb-2 mainHead flex justify-between gap-1 pl-2">
                        <div class="Mainlogo w-full flex">
                            <button class="menu mr-1 text-2xl text-white focus:ring-4 rounded-lg py-2 hover:bg-blue-400 bg-transparent border" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                                &#9776;
                            </button>
                            <a href="/">
                                <img src="{{asset('logo.png')}}" class="w-40">
                            </a>
                            <div class="md:hidden mobileInq">
                                <div class="button-66 hidden py-3 px-5 flex justify-center"><a href="{{url('/inquiry')}}" class="text-white text-sm">등록/변경</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="button-66 py-3 px-5 md:w-2/12"><a href="{{url('/inquiry')}}" class="text-white">등록하다</a></div> -->
                    <div id="search-model" class="relative shearch-model py-3 w-11/12 md:w-6/12 ">
                        <!-- <form method="GET" action="/looking" id='search-form'>        
                            <div class="flex flex-row items-center border-gray-300 border-b-2 gap-2 justify-start w-full rounded-lg">
                                <input style="border:none;" type="text" name='s' class="mb-1 placeholder-red::placeholder w-full text-white bg-transparent border-none focus:border-none focus:outline-none px-2 py-2" id="search-input" placeholder="찾다...">
                                <div class="w-12 text-right text-white">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>  
                        </form>                   -->
                        <form id="searchForm" action="https://www.google.co.kr/search?service=" target="_blank" class="py-3 flex flex-row items-center justify-start gap-2">
                        <div class="w-6/12 selection border-4 h-full border-white py-0.5">
                            <select id="searchEngine" name="service" class="search-box  border-none py-1 w-full h-full bg-transparent text-white focus:outline-none py-1 rounded">
                                <option class="bg-blue-800 px-2 py-2" data-engine="google" data-query="q" value="https://www.google.co.kr/search?q=">구글</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="naver" data-query="query" value="https://search.naver.com/search.naver?sm=top_hty&amp;fbm=1&amp;ie=utf8&amp;query=">네이버</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="daum" data-query="q" value="https://search.daum.net/search?w=tot&amp;DA=YZR&amp;t__nil_searchbox=btn&amp;sug=&amp;sugo=&amp;q=">다음</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="nate" data-query="q" value="https://search.daum.net/nate?thr=sbma&amp;w=tot&amp;q=">네이트</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="zum" data-query="query" value="https://search.zum.com/search.zum?method=uni&amp;option=accu&amp;qm=f_typing&amp;rd=1&amp;query=">ZUM</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="youtube" data-query="q" value="https://www.youtube.com/results?search_query=">유튜브</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="bing" data-query="q" value="https://www.bing.com/search?q=">Bing</option>
                            </select>
                        </div>
                        <div class="w-full px-3 searchbar border-4 h-full border-white flex flex-row items-center justify-start gap-1 ">
                            <input style="border:none;" id="searchQuery" type="text" placeholder="검색어를 입력하세요" class="search-box px-1 mb-1 w-full text-white bg-transparent border-none focus:border-none focus:outline-none px-2 py-1">
                        </div>
                        <button style="white-space:nowrap;" type="submit" class="text-nowrap w-16 py-1.5  border-white bg-blue-600 border-4 px-1 h-full flex flex-column items-center justify-center">
                            <span class="text-white">검색</span>
                        </button>
                    </form>
                        <div id="search-results" class="absolute flex flex-col items-start justify-start gap-1 w-full">
                        </div>
                    </div>
                    <div class="inq md:w-1/12">
                    <div class="button-66 hidden py-2 px-1 flex justify-center"><a href="{{url('/inquiry')}}" class="text-white text-sm">등록/변경</a></div>
                    </div>
                </nav>
                <div class="flex md:w-9/12 flex-row media md:w-10/12 items-start gap-3 justify-around">
                <div class="w-full">
                    <!-- <form id="searchForm" action="https://www.google.co.kr/search?service=" target="_blank" class="py-3 px-5 flex flex-row items-center justify-start gap-2">
                        <div class="w-60 selection border-b-2 h-full border-blue-700 rounded">
                            <select id="searchEngine" name="service" class="w-full bg-transparent text-white focus:outline-none py-1 rounded">
                                <option class="bg-blue-800 px-2 py-2" data-engine="google" data-query="q" value="https://www.google.co.kr/search?q=">구글</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="naver" data-query="query" value="https://search.naver.com/search.naver?sm=top_hty&amp;fbm=1&amp;ie=utf8&amp;query=">네이버</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="daum" data-query="q" value="https://search.daum.net/search?w=tot&amp;DA=YZR&amp;t__nil_searchbox=btn&amp;sug=&amp;sugo=&amp;q=">다음</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="nate" data-query="q" value="https://search.daum.net/nate?thr=sbma&amp;w=tot&amp;q=">네이트</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="zum" data-query="query" value="https://search.zum.com/search.zum?method=uni&amp;option=accu&amp;qm=f_typing&amp;rd=1&amp;query=">ZUM</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="youtube" data-query="q" value="https://www.youtube.com/results?search_query=">유튜브</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="bing" data-query="q" value="https://www.bing.com/search?q=">Bing</option>
                            </select>
                        </div>
                        <div class="w-full px-3 searchbar border-b-2 border-l-2 h-full border-blue-300 flex flex-row items-center justify-start gap-1 rounded-md">
                            <input style="border:none;" id="searchQuery" type="text" placeholder="검색어를 입력하세요" class="px-1 mb-1 w-full text-white bg-transparent border-none focus:border-none focus:outline-none px-2 py-1">
                        </div>
                        <button type="submit" class="text-nowrap w-16 py-1 bg-blue-600 rounded border h-full flex flex-column items-center justify-center">
                            <span class="text-white">검색</span>
                        </button>
                    </form> -->
                </div>
            </div>
            </header>
        </div>
        <!-- <div class="theSocial w-full flex justify-center">
            <div class="w-10/12 bg-white mb-1 mt-1  container insideSocial py-4">
                <div class="logo px-3 mb-1 flex items-center">
                    <a class="flex justify-center" target="_blank" href="https://google.com">
                        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google" class="w-full md:w-5/12">
                    </a>
                </div>
                <div class="logo px-3 mb-1 flex items-center">
                    <a class="flex justify-center" target="_blank" href="https://naver.com">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Naver_Logotype.svg/1280px-Naver_Logotype.svg.png" alt="Naver" class="w-full md:w-5/12">
                    </a>
                </div>
                <div class="logo px-3 mb-1 flex items-center">
                    <a class="flex justify-center" target="_blank" href="https://daum.net">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Daum_Communications_logo_%282000%E2%80%932010%29.svg/300px-Daum_Communications_logo_%282000%E2%80%932010%29.svg.png" alt="Daum" class="w-full md:w-5/12">
                    </a>
                </div>
                <div class="logo px-3 mb-1 flex items-center">
                    <a class="flex justify-center" target="_blank" href="https://m.nate.com">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Nate_Logo.svg/1280px-Nate_Logo.svg.png" alt="Nate" class="w-full md:w-5/12">
                    </a>
                </div>
                <div class="logo px-3 mb-1 flex items-center">
                    <a class="flex justify-center" target="_blank" href="https://zum.com">
                        <img src="https://news.zumst.com/v2/images/logo_zum_2x.png?_LM=1733198768000" alt="Zum" class="w-full md:w-5/12">
                    </a>
                </div>
                <div class="logo px-3 mb-1 flex items-center">
                    <a class="flex justify-center" target="_blank" href="https://youtube.com">
                        <img src="https://cdn.worldvectorlogo.com/logos/youtube-6.svg" alt="YouTube" class="w-full md:w-5/12">
                    </a>
                </div>
                <div class="logo px-3 mb-1 flex items-center">
                    <a class="flex justify-center" target="_blank" href="https://bing.com">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e3/Bing_Fluent_Logo_Text.svg" alt="Bing" class="w-full md:w-5/12">
                    </a>
                </div>
            </div>
        </div> -->

        <!-- drawer component -->
        <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-blue-500" tabindex="-1" aria-labelledby="drawer-navigation-label" style="scrollbar-width:thin">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400 text-white text-lg">메뉴 </h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                @foreach($site_list as $site)
                    <li class="rounded">
                        <a href="{{route('category',['id'=>$site->id])}}" class="button-19 w-full flex items-center py-2 px-4  text-gray-900 dark:text-white hover:bg-blue-400 dark:hover:bg-gray-700 group">
                            <img src="https://streamingadmin.m27.shop/{{$site->icons}}" alt="icon" class="w-10">
                            <span class="ms-3 text-lg font-bold">{{$site->name}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
                    </div>
        <div class="theBody w-full flex justify-center">
            <div class="yield flex container gap-1 sm:px-16 md:px-24">
                <div class="myContain md:w-10/12">
                    <div class="ads grid grid-cols-2 md:grid-cols-4 gap-1">
                        <img class="w-full h-20 md:h-24 mb-1" src="{{asset('0243561. Winn_banner (590 120).gif.gif')}}" alt="">
                        <img class="w-full h-20 md:h-24 mb-1" src="{{asset('202410221729593068970-image.gif')}}" alt="">
                        <img class="w-full h-20 md:h-24 mb-1" src="{{asset('202410231729670142945-image.gif')}}" alt="">
                        <img class="w-full h-20 md:h-24 mb-1" src="{{asset('202410221729593081776-image.gif')}}" alt="">
                    </div>
                    <div class=" longAds  flex justify-center flex-col items-center">
                        <img class="w-full h-24 md:h-28 mb-1 longAds" src="{{asset('ot-800x133-1111-7-17.jpg')}}" alt="" id="bannerImg2nd">
                    </div>
                    @yield('content')
                </div>
                <div class="myBanner md:w-2/12">
                    <div class="sidebar w-full" id="sidebar" style="">
                        <div class="banner w-full px-3" id="scrollingBanner">
                            <img src="{{asset('rightBanner.jpg')}}" class="banner-image w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="scroll-to-top" onclick="scrollToTop()">↑</button>
        <div class="mt-8 w-full p-2 pt-8 text-center flex flex-col items-center">
            <p class="text-base text-blue-700">개제된 사이트들과 직접적인 연관이 없는 링크/중계 사이트 입니다.</p>
            <a class="text-indigo-400">website.com</a>
            <img src="{{asset('logo.png')}}" alt="logo" class="w-24">
        </div>
        <script>
                document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('search-form').addEventListener('submit', function(event) {
                    const input = document.getElementById('search-input').value.trim(); // Remove leading/trailing spaces
                    console.log(input);
                    if (input === '') {
                        event.preventDefault(); // Stop form submission
                        alert('검색할 항목을 입력하세요..');
                    }
                    });
                });

        </script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
            const scrollToTopButton = document.querySelector(".scroll-to-top");

            scrollToTopButton.addEventListener("click", () => {
                window.scrollTo({
                top: 0,
                behavior: 'smooth' // Smooth scrolling effect
                });
            });
            });
        
        </script>
              <!-- <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const searchBtn = document.getElementById('search-btn');
                    const searchModel = document.getElementById('search-model');
                    const closeBtn = document.getElementById('close-btn');
                    const searchResults = document.getElementById('search-results');

                    // searchBtn.addEventListener('click', function(event) {
                    //     event.preventDefault();
                    //     searchModel.classList.toggle('hidden');
                    // });

                    // closeBtn.addEventListener('click', function() {
                    //     searchModel.classList.add('hidden');
                    // });

                    const searchInput = searchModel.querySelector('input');
                    
                    searchInput.addEventListener('input', function() {
                        const query = searchInput.value.trim();
                        if (query.length > 0) { // Start searching when input has more than 2 characters
                            fetch(`{{url('/')}}/search?q=${encodeURIComponent(query)}`)
                                .then(response => response.json())
                                .then(data => {
                                    searchResults.innerHTML = ''; // Clear previous results
                                    data.forEach(site => {
                                        const resultItem = document.createElement('div');
                                        resultItem.classList.add('px-2');
                                        resultItem.classList.add('bg-blue-400');
                                        resultItem.classList.add('rounded');
                                        resultItem.classList.add('w-11/12');
                                        
                                        const link = document.createElement('a');
                                        link.href = site.url; // Assuming `site.url` contains the URL
                                        link.target = '_blank';
                                        link.textContent = site.name; // Assuming `site.name` contains the name of the site
                                        
                                        resultItem.appendChild(link);
                                        searchResults.appendChild(resultItem);
                                    });
                                })
                                .catch(error => {
                                    console.error('Error fetching search results:', error);
                                });
                        }
                        else{
                            searchResults.innerHTML='';
                        }
                    });
                });
            </script> -->
            <script>
                    document.getElementById('searchForm').addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent the default form submission
                        
                        const select = document.getElementById('searchEngine');
                        const queryInput = document.getElementById('searchQuery');
                        const selectedOption = select.options[select.selectedIndex];
                        const baseURL = selectedOption.value;
                        const queryParam = selectedOption.getAttribute('data-query');
                        const query = encodeURIComponent(queryInput.value);
                            
                        const finalURL = baseURL + query;
                            
                        window.open(finalURL, '_blank'); // Open the search in a new tab
                    });
            </script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <script>
            document.querySelector("#tel").addEventListener("keypress", function (evt) {
                if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
                {
                    evt.preventDefault();
                }
            });
        </script>
        <script>
            
    document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const banner = document.getElementById('scrollingBanner');

    if (sidebar && banner) {
        // Add your scroll logic here
        window.addEventListener('scroll', () => {
            const sidebarRect = sidebar.getBoundingClientRect();
            const sidebarTopOffset = sidebarRect.top + window.scrollY;
            const sidebarHeight = sidebar.offsetHeight;
            const bannerHeight = banner.offsetHeight;
            const scrollY = window.scrollY;
            const maxOffset = sidebarHeight - bannerHeight;
            const offset = Math.min(Math.max(scrollY - sidebarTopOffset, 0), maxOffset);
            banner.style.transform = `translateY(${offset}px)`;
        });

        window.addEventListener('resize', () => {
            window.dispatchEvent(new Event('scroll'));
        });
    } else {
        console.warn("Sidebar or banner element not found");
    }
});
</script>
<script>
    var docWidth = document.documentElement.offsetWidth;

    [].forEach.call(
    document.querySelectorAll('*'),
    function(el) {
        if (el.offsetWidth > docWidth) {
        console.log(el);
        }
    }
    );
</script>
</body>
</html>