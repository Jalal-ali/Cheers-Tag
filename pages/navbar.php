<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Navbar</title>
    <style>
 
        .font-passenger {
            font-family: "Passenger Serif", serif;
        }

        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }
        .inner-round {
                background: transparent;
                /* -webkit-mask-image: radial-gradient(ellipse 105% 127px at 100% 114%, Wider elliptical shape transparent 0, transparent 202px, Curve start black 46px Curve end); */
                
            }
        @media (min-width: 1024px){
            .inner-round {
        background: rgb(255, 255, 255);
        -webkit-mask-image: radial-gradient(ellipse 115% 112px at 112% 108%, /* Wider elliptical shape */ transparent 0, transparent 265px, /* Curve start */ black 259px /* Curve end */);
    }
        }
    </style>
</head>
<body>
      <!-- navbar section started -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- brand name  -->
                <!-- <div class="flex-shrink-0">
                    <a href="#" class="text-xl font-bold text-[#722f37]">
                        <h2 class="font-bold font-passenger text-[#722f37] text-[30px] ">
                            Cheers<span class="text-[#802311]">Tag</span>
                        </h2>
                    </a>
                </div> -->

                <!-- Logo -->
                <div class="flex-shrink-0 lg:absolute lg:-left-3 lg:top-1 md:h-22 pt-2 lg:h-38 inner-round">
                    <img class="  h-10 md:h-1/2 lg:h-16 md:my-1 w-auto sm:mx-4 lg:-rotate-18 " src="./assets/logo/Cheerstag.png"
                        alt="Cheerstag logo">
                </div>


                <!-- Desktop Menu with equal spacing -->
                <div class="hidden md:flex flex-1 justify-center items-center mx-auto">
                    <div class="flex space-x-4">
                        <a href="./index.html"
                            class="text-[#802311] hover:text-[#802311] px-3 py-2 text-sm font-semibold">Home</a>
                        <a href="./pages/boodschap.html"
                            class="text-[#0f363f] hover:text-[#802311] px-3 py-2 text-sm font-semibold">Maak je unieke
                            boodschap</a>
                        <a href="./pages/werkt.html"
                            class="text-[#0f363f] hover:text-[#802311] px-3 py-2 text-sm font-semibold">Hoe het
                            werkt</a>
                        <a href="./pages/over-ons.html"
                            class="text-[#0f363f] hover:text-[#802311] px-3 py-2 text-sm font-semibold">Over ons</a>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="">
                    <a class="mr-10 text-[#0f363f] font-montserrat font-semibold px-7 py-2 rounded-md transition duration-300 hidden md:block"
                        href="./pages/partners.html">
                        <button>
                            Partners
                        </button>
                    </a>

                    <!-- Mobile menu button (only visible on mobile) -->
                    <button type="button" id="mobile-menu-button"
                        class="md:hidden inline-flex items-center justify-star p-2 rounded-md text-gray-700 hover:text-[#722f37] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#722f37]"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Hamburger icon -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Close icon (hidden by default) -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-2 sm:px-3 text-center items-center">
                <a href="../index.html"
                    class="block px-3 py-2 rounded-md text-base font-medium text-[#722f37] hover:text-[#f5e7d6] hover:bg-[#722f37]">Home</a>
                <a href="./pages/boodschap.html"
                    class="block px-3 py-2 rounded-md text-base font-medium text-[#722f37] hover:text-[#f5e7d6] hover:bg-[#722f37]">Maak
                    je unieke boodschap</a>
                <a href="./pages/werkt.html"
                    class="block px-3 py-2 rounded-md text-base font-medium text-[#722f37] hover:text-[#f5e7d6] hover:bg-[#722f37]">Hoe
                    het werkt</a>
                <a href="./pages/over-ons.html"
                    class="block px-3 py-2 rounded-md text-base font-medium text-[#722f37] hover:text-[#f5e7d6] hover:bg-[#722f37]">Over
                    ons</a>
                <a href="./pages/partners.html"
                    class="flex justify-center items-center w-full bg-[#722f37] text-white px-4 py-2 rounded-md hover:bg-[#5a252c] transition duration-300 mt-2">
                    <button>
                        Partners
                    </button>
                </a>
            </div>
        </div>
    </nav>
    <!-- navbar section ended -->
    
</body>
</html>