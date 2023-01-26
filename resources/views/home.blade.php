@extends('layouts.nav')

@section('content')
<img src="image/arcade-impos.png" alt="" class="absolute w-[12vw] mt-[55vw] ml-[14vw] rotate-12">
<img src="image/impos-footer.png" alt="" class="absolute w-[15vw] mt-[317.8vw] ml-[0vw]">
<img src="image/logo2.png" alt="" class="absolute w-[25vw] mt-[310.8vw] ml-[6vw]">
<img src="image/impos-jahat.png" alt="" class="absolute w-[9vw] mt-[75vw] ml-[0vw] rotate-12">
<img src="image/coin-impos.png" alt="" class="absolute w-[10vw] mt-[50vw] ml-[70vw] origin-bottom -rotate-12    ">
<img src="image/impostor-ijo.png" alt="" class="absolute w-[12vw] mt-[70vw] ml-[87vw] origin-bottom -rotate-12">
<img src="image/googleplay-logo.png" alt="" class="absolute w-[5vw] mt-[319.1vw] ml-[25vw] origin-bottom rounded-xl">
<img src="image/appstore-logo.png" alt="" class="absolute w-[4vw] mt-[319vw] ml-[20vw] origin-bottom ">
<h1 class="text-[6vw] absolute mt-[128vw] text-white ml-[24vw]" style="font-family: 'permanent marker'">In Associated With</h1>
{{-- Hero --}}
<div class="hero w-[98.95vw] flex h-[92vh]"
    style="background-image: url('image/bg-impostor.png'); background-size: cover">
    <img src="image/impostor2.png" alt="" class="w-[26vw] h-[69vh] mt-[4vw]">
    <div class="judul">
        <button data-text="Awesome" class="button">
            <span class="actual-text">&nbsp;Parallax&nbsp;</span>
            <span class="hover-text" aria-hidden="true">&nbsp;Parallax&nbsp;</span>
        </button>
        {{-- <h1 class="text-[7vw] font-[400] text-white ml-[8vw] mt-[2vw]" style="font-family: 'Permanent Marker', cursive;"> Parallax</h1> --}}
        <h1 class="text-[2.6vw] font-[800] text-white font-[gugi] ml-[2vw] mt-[2vw]">Place to find your gaming
            friends</h1>
        <h1 class="text-[3vw] font-[800] text-white font-[gugi] ml-[13vw] mt-[1vw]">Social Place</h1>
        <button class="btn-explore" style="font-family: 'Permanent Marker', cursive;"><span>Explore</span></button>
    </div>
    <img src="image/impostor1.png" alt="" class="w-[26vw] h-[69vh] mt-[2vw] ml-[2vw]">
</div>

<div class="videos" id="videos">
    <div class="video-title">
        <img src="image/logo2.png" alt="" class="w-[20vw] ml-[40.5vw] mt-[5vw]">
        <h1 class="w-[24vw] text-[2.5vw] font-[outfit] text-white font-[700] ml-[41vw] mt-[1vw]">FORGET LIMITS. FIND
            YOURSELF.</h1>
        <h1 class="w-[50vw] text-[1.2vw] font-[outfit] text-white font-[500] ml-[34vw]">Explore other peoples and find a
            greates experience in your life.</h1>
        <button class="button-video">Watch All Our Videos</button>
    </div>
    <iframe width="1160" height="625" src="https://www.youtube.com/embed/lqxmmhJKQ8s" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen class="mt-[4vw] ml-[13.4vw] rounded-2xl"></iframe>
</div>
<div class="associated w-[98.8vw] h-[55vh] bg-[#2f4eb6] mt-[14vw] ">
    <div class="associated-atas flex">
        <img src="image/roblox-nobg.png" alt="" class="ml-[6vw] w-[9vw] h-[6vw] mt-[6vw]">
        <img src="image/farcry-nobg.png" alt="" class="ml-[6vw] w-[9vw] h-[2vw] mt-[8vw]">
        <img src="image/bard-nobg.png" alt="" class="ml-[6vw] w-[15vw] h-[6vw] mt-[6vw]">
        <img src="image/gears-nobg.png" alt="" class="ml-[6vw] w-[15vw] h-[8vw] mt-[5.5vw]">
        <img src="image/trover-nobg.png" alt="" class="ml-[6vw] w-[14vw] h-[10vw] mt-[5vw]">
    </div>

    <div class="associated-bawah flex">
        <img src="image/pixar-nobg.png" alt="" class="ml-[32vw] w-[16vw] h-[10vw] mt-[3vw]">
        <img src="image/squad-nobg.png" alt="" class="ml-[6vw] w-[14vw] h-[10vw] mt-[3vw]">
        
    </div>
</div>




{{-- Carousell --}}

<!-- component -->
<!-- This is an example component -->
<div class="max-w-7xl ml-[10vw] mt-[7vw]">

    <div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>

                <img src="image/tokped-bg-slider1.webp" class="w-full bg-cover" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="image/tokped-bg-slider2.webp" class="bg-cover w-full" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="image/tokped-bg-slider3.webp" class="bg-cover w-full" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-white group-hover:bg-white/50 dark:group-hover:bg-white group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button"
            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-white  group-hover:bg-white/50 dark:group-hover:bg-white group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

<div class="content">
    <div class="find-player-game" id="games">
        <h2 class="font-[anton] text-white text-[5vw] mt-[7vw] ml-[10vw]">Find Players By Game</h2>
        <div class="cards">
        @foreach ($dataProduct as $item)
       
            <div class="card">
                <div class="card-img">
                    <img src="{{asset('fotoproduct/'.$item->foto)}}" alt=""
                        style="width: 15vw; height: 16vw; border-radius: 10px">
                </div>
    
                <div class="card-info">
                    <p class="title" style="font-size: 1.2vw; font-family: 'outfit'; ">{{$item->name}}</p>
                    <p class="subtitle" style="font-family:'outfit'; font-weight:'500'">{{$item->type['name']}}</p>
                </div>
            </div>
        
     
        @endforeach
    </div>

    </div>

    <div class="find-players" id="players">
        <h2 class="font-[anton] text-white text-[5vw] mt-[7vw] ml-[10vw]">Find Players</h2>
        {{-- <div class="card-2 w-[14vw] h-[45vh] bg-[#2f4eb6] ml-[10vw]"  style="border-radius: 10px 10px 10px 10px">
            <div class="card-image ">
                <img src="image/mobile-legend-game.png" alt="" class="w-[15vw] h-[30vh] bg-cover" style="border-radius: 10px 10px 0px 0px">
            </div>
            <div class="heading"> A heading that must span over two lines
                <div class="author"> By <span class="name">Abi</span> 4 days ago</div>
            </div>
        </div> --}}

        
        <div class="cardsss ml-[10vw] mt-[5vw] flex">
            <div class="cardss-1">
                
                    @foreach ($dataSeller->take(8) as $item)
                    <a href="">
                    <div class="cardss">
                        <div class="card-imgss">
                            <img src="{{asset('fotoseller/'.$item->foto)}}" alt="" style="width: 100%; height: 100%; border-radius: 10px; background-size: cover; object-fit: cover"> 
                        </div>
                        <div class="card-infoss">
                          <p class="text-title font-[outfit]">{{$item->username}} </p>
                          <p class="text-body font-[outfit]">{{$item->product->name}}</p>
                        </div>
                        <div class="card-footer">
                        <div class="card-rating mt-[-3vw] flex">
                            <img src="image/star-parallax.png" alt="" class="w-[1vw] h-[2vh] mt-[0.1vw]">
                            <h3 class="ml-[0.3vw] font-[500] font-[outfit] text-[1.1vw]  pt-[0vw]">{{$item->rating->name}}</h3>
                        </div>
                        <h2 class="text-title23">Rp. {{$item->harga}}</h2>
                        <div class="card-button mt-[1vw]">
                          <svg class="svg-icon w-[2.1vw] h-[2.1vw]" viewBox="0 0 20 20">
                            <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                            <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                            <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                </a>
                    @endforeach
                    
                
               
            </div>
       
           
           
        </div>
    </div>

    <div class="footer w-[99vw] h-[50vh] bg-[#2f4eb6] mt-[10vw]">
        <div class="content-foot flex ml-[40vw] pt-[5vw]">
            <ul class="text-[3vw] text-white font-[outfit] font-[600]">
                <li><a href="">FAQ</a> </li>
                <li><a href="">Docs</a></li>
            </ul>
            <ul  class="text-[3vw] text-white font-[outfit] font-[600] ml-[10vw]">
                <li>Platform Terms </li>
                <li>Privacy</li>
                <li>Terms</li>
            </ul>
            <div class="copyright mt-[18vw] text-white font-[outfit] font-[600]">
                Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2022 Parallax 
            </div>
        </div>
      
    </div>
</div>


<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

</script>
@endsection
