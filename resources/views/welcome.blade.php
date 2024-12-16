<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Like site</title>

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Open Sans', '나눔바른고딕', NanumBarunGothic, ng, '맑은 고딕', 'Malgun Gothic', '돋움', Dotum, '애플 SD 산돌고딕 Neo', 'Apple SD Gothic Neo', AppleGothic, Helvetica, sans-serif;
                font-weight: bold;
            }
            body::scr
            .nested-list {
                
                border-top: 2px solid #ccc; /* Adjust border color as needed */
            }
        </style>
    </head>
    <body>
        <div class=" ">
            <header class="bg-blue-800 px-2 md:px-20 lg:px-32 xl:px-56">
                <nav id="main-nav" class="w-full flex flex-col md:flex-row  justify-between items-center bg-blue-800 py-2 pr-4">
                    <div class="logo w-full md:w-1/2">
                        <img src="{{asset('logo.png')}}" class="w-40 md:w-60">
                    </div>
                    <ul class="flex flex-row items-center justify-end gap-3 w-full md:w-1/2">
                        <li><a href="{{url('/inquiry')}}" class="text-white">등록하다</a></li>
                        <li><a href="https://t.me/Maycs09" class="text-white">연락하다</a></li>
                        <li><a href="https://t.me/Maycs09" target="_blank" class="text-white"><i class="fa-brands fa-telegram mr-1"></i>1:1문의</a></li>
                        <li class="pl-3" id="search-btn">
                            <!-- <a href="#고객센터" class="text-white"><i class="fa fa-search"></i></a> -->
                            <div id="search-model" class="shearch-model px-4 py-3">
                                <div class="flex flex-row items-center border-gray-300 border-b-2 gap-2 justify-start w-full">
                                    <input type="text" class="w-full text-white bg-transparent border-none focus:border-none focus:outline-none px-2 py-2" id="search-input" placeholder="search">
                                    <div class="w-12 text-right text-white">
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>                    
                                <div id="search-results" class="flex flex-col items-start justify-start bg-white">
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="flex flex-row w-full items-start gap-3 justify-around">
                <div class=" w-full ">
                    <form id="searchForm" action="https://www.google.co.kr/search?service=" target="_blank" class="bg-blue-800 py-3 px-5 flex flex-row items-center justify-start">
                        <div class="w-60 selection border-b-2 h-full border-green-300">
                            <select id="searchEngine" name="service" class="w-full bg-transparent text-white focus:outline-none py-1">
                                <option class="bg-blue-800 px-2 py-2" data-engine="google" data-query="q" value="https://www.google.co.kr/search?service=q">구글</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="naver" data-query="query" value="https://search.naver.com/search.naver?sm=top_hty&amp;fbm=1&amp;ie=utf8&amp;query=">네이버</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="daum" data-query="q" value="https://search.daum.net/search?w=tot&amp;DA=YZR&amp;t__nil_searchbox=btn&amp;sug=&amp;sugo=&amp;q=">다음</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="nate" data-query="q" value="https://search.daum.net/nate?thr=sbma&amp;w=tot&amp;q=">네이트</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="zum" data-query="query" value="https://search.zum.com/search.zum?method=uni&amp;option=accu&amp;qm=f_typing&amp;rd=1&amp;query=">ZUM</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="youtube" data-query="q" value="https://www.youtube.com/results?search_query=">유튜브</option>
                                <option class="bg-blue-800 px-2 py-2" data-engine="bing" data-query="q" value="https://www.bing.com/search?q=">Bing</option>
                            </select>
                        </div>
                        <div class="w-full searchbar border-b-2 border-l-2 h-full border-green-300 flex flex-row items-center justify-start gap-1">
                            <input id="searchQuery" type="text" placeholder="검색어를 입력하세요" class="w-full text-white bg-transparent border-none focus:border-none focus:outline-none px-2 py-1">
                            <button type="submit" class="text-nowrap w-16 py-1 bg-blue-600 h-full flex flex-column items-center justify-center">
                                <span class="text-white">검색</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="socleil-wrapper mb-14 px-9 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-9 py-4 gap-4" style=" border-bottom:1px solid gray;">
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/904c36c0ede8d4bada6f275279d5e872.png" alt="Icon">
                </div>
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/fa60b0bddca55c41242e3e87322ded15.png" alt="Icon">
                </div>
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/8abffce0f4832cee0b153fc254cfb8c8.png" alt="Icon">
                </div>
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/f3bdcae6dc6b0b4bb418c79de1d1a695.png" alt="Icon">
                </div>
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/b1107931d870580f3d7d68cfac968f8c.png" alt="Icon">
                </div>
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/17313f1ef20fa0006ed5f67d64f0a8d1.png" alt="Icon">
                </div>
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/70f8a0f1a6779965f03ba327c6ca714a.png" alt="Icon">
                </div>

                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/8e668421ecb15a282624ef2d9f15235b.png" alt="Icon">
                </div>
                <div class="socleil-item-icon-wrapper">
                    <img src="https://linkdott.com/files/attach/images/161/161/d4efbdf021b55e5bebec08bcad2376f0.png" alt="Icon">
                </div>
            </div>
             <!-- yieldher -->
            <div class="yield px-2 md:px-20 lg:px-32 xl:px-56">
                @yield('content')
            </div>
            
        </div>
        <div class=" w-12 h-12 shadow-md flex flex-row fixed bottom-4 right-2 items-center justify-center rounded-full text-white bg-blue-600 scroll-to-top">
            <i class="fa-solid fa-angles-up"></i>
        </div>
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
                        const query = searchInput.value;
                        if (query.length > 0) { // Start searching when input has more than 2 characters
                            fetch(`{{url('/')}}/search?q=${encodeURIComponent(query)}`)
                                .then(response => response.json())
                                .then(data => {
                                    searchResults.innerHTML = ''; // Clear previous results
                                    data.forEach(site => {
                                        const resultItem = document.createElement('div');
                                        resultItem.classList.add('px-2');
                                        
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
                            
                            const finalURL = baseURL + (baseURL.includes('?') ? '&' : '?') + queryParam + '=' + query;
                            
                            window.open(finalURL, '_blank'); // Open the search in a new tab
                        });
                    </script>
    </body>
</html>
