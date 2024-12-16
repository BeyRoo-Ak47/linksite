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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body style="scrollbar-width:thin">



<!-- drawer init and show -->
        <div class="text-center">
            <header class="bg-blue-600 md:px-20 lg:px-32 xl:px-56">
                <nav id="main-nav" class="w-full flex flex-col md:flex-row  justify-between items-center bg-blue-600 py-2 pr-4">
                    <div class="mb-2 logo w-11/12  md:w-9/12 flex justify-between gap-1">
                        <div class="logo flex">
                            <button class="menu text-2xl text-white focus:ring-4 rounded-lg px-5 py-2 hover:bg-blue-400 bg-transparent border" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                                &#187;
                            </button>
                            <a href="/">
                                <img src="{{asset('logo.png')}}" class="w-52 md:w-60">
                            </a>
                        </div>
                        <div class="button-66 py-2 px-5"><a href="{{url('/inquiry')}}" class="text-white">등록하다</a></div>
                    </div>
                    <div id="search-model" class="relative shearch-model px-4 py-3 w-11/12 md:w-3/12">
                        <form method="GET" action="/looking" id='search-form'>        
                            <div class="flex flex-row items-center border-gray-300 border-b-2 gap-2 justify-start w-full rounded-lg">
                                <input type="text" name='s' class="mb-1 placeholder-red::placeholder w-full text-white bg-transparent border-none focus:border-none focus:outline-none px-2 py-2" id="search-input" placeholder="찾다...">
                                <div class="w-12 text-right text-white">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>  
                        </form>                  
                        <div id="search-results" class="absolute flex flex-col items-start justify-start gap-1 w-full">
                        </div>
                    </div>
                </nav>
                <div class="flex flex-row w-full items-start gap-3 justify-around">
                <div class="w-full">
                    <form id="searchForm" action="https://www.google.co.kr/search?service=" target="_blank" class="py-3 px-5 flex flex-row items-center justify-start gap-2">
                        <div class="w-60 selection border-b-2 h-full border-blue-300 rounded">
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
                            <input id="searchQuery" type="text" placeholder="검색어를 입력하세요" class="px-1 mb-1 w-full text-white bg-transparent border-none focus:border-none focus:outline-none px-2 py-1">
                        </div>
                        <button type="submit" class="text-nowrap w-16 py-1 bg-blue-600 rounded border h-full flex flex-column items-center justify-center">
                            <span class="text-white">검색</span>
                        </button>
                    </form>
                </div>
            </div>
            </header>
            <div class="w-full flex justify-between md:px-20 lg:px-32 xl:px-56 mt-3 mb-2 items-center flex-wrap">
                    <div class="logo px-6 mb-4">
                        <a target="_blank" href="https://google.com">
                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="social-icon" style="max-width:80px; min-width:50px">
                        </a>
                    </div>
                    <div class="logo px-6 mb-4">
                        <a target="_blank" href="https://naver.com">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Naver_Logotype.svg/1280px-Naver_Logotype.svg.png" alt="social-icon" style="max-width:80px; min-width:50px">
                        </a>
                    </div>
                    <div class="logo px-6 mb-4">
                        <a target="_blank" href="https://daum.net">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Daum_communication_logo.svg/1280px-Daum_communication_logo.svg.png" alt="social-icon" style="max-width:80px; min-width:50px">
                        </a>
                    </div>
                    <div class="logo px-6 mb-4">
                        <a target="_blank" href="https://m.nate.com">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Nate_Logo.svg/1280px-Nate_Logo.svg.png" alt="social-icon" style="max-width:80px; min-width:50px">
                        </a>
                    </div>
                    <div class="logo px-6 mb-4">
                        <a target="_blank" href="https://zum.com">
                            <img src="https://news.zumst.com/v2/images/logo_zum_2x.png?_LM=1733198768000" alt="social-icon" style="max-width:80px; min-width:50px">
                        </a>
                    </div>
                    <div class="logo px-6 mb-4">
                        <a target="_blank" href="https://youtube.com">
                            <img src="https://cdn.worldvectorlogo.com/logos/youtube-6.svg" alt="social-icon" style="max-width:80px; min-width:50px">
                        </a>
                    </div>
                    <div class="logo px-6 mb-4">
                        <a target="_blank" href="https://bing.com">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e3/Bing_Fluent_Logo_Text.svg" alt="social-icon" style="max-width:80px; min-width:50px">
                        </a>
                    </div>
                </div>
        </div>


        <!-- drawer component -->
        <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-blue-500" tabindex="-1" aria-labelledby="drawer-navigation-label" style="scrollbar-width:thin">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">메뉴 </h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
        <div class="yield md:px-20 lg:px-32 xl:px-56">
            @yield('content')
        </div>
        <button class="scroll-to-top" onclick="scrollToTop()">↑</button>

        <div class="mt-8 w-full p-2 pt-8 text-center flex flex-col items-center">
            <p class="text-base text-blue-700">위의 모든 링크는 우리 사이트와 아무런 협력 관계가 없습니다. 단지 다음과 같이 제공할 뿐입니다...즐기세요!</p>
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
              <script>
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
            </script>
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
</body>
</html>