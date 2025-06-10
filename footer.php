<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
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
    <!-- footer started  -->
    <footer class="bg-[#0a6d71] text-white text-2xl py-5 px-4 sm:px-6">
        <div class="mx-auto max-w-7xl">
            <!-- Main Footer Content - Custom layout for mobile -->
            <div class="flex flex-col md:grid md:grid-cols-3 md:mx-10 md:gap-10 ">
                <!-- Brand Column  -->
                <div class="space-y-4 mb-8 md:mb-0">
                    <!-- Heading centered on mobile, left on desktop -->
                    <h4 class="text-sm font-montserrat text-center md:text-start"><a href="./index.php">CheersTag.com</a></h4>

                    <!-- Paragraph centered on mobile, left on desktop -->
                    <p class="text-sm leading-relaxed font-montserrat text-center md:text-start">
                        Verbind uw geschenken met persoonlijke boodschappen. Maak van elk cadeau een blijvende
                        herinnering.
                    </p>

                    <!-- Social links -->
                    <div class="flex flex-wrap gap-3 pt-2 justify-center md:justify-start">
                        <a href="#" class="text-sm hover:underline font-montserrat">Facebook</a>
                        <a href="#" class="text-sm hover:underline font-montserrat">Instagram</a>
                        <a href="#" class="text-sm hover:underline font-montserrat">Twitter</a>
                        <a href="#" class="text-sm hover:underline font-montserrat">E-mail</a>
                    </div>
                    <div class="flex flex-wrap gap-3 pt-3 lg:pt-7 justify-center md:justify-start">
                        <a href="#" class="text-sm hover:underline font-montserrat"> <span>© 2024 Cheers'Tag.com</span>
                        </a>

                    </div>
                </div>

                <!-- Combined Columns Container  -->
                <div class="grid grid-cols-2 md:gap-30  mx-auto md:col-span-2 justify-between ">
                    <!-- Links Column -->
                    <div class="space-y-4 text-center">
                        <h4 class="text-sm font-montserrat text-center md:text-start">Links</h4>
                        <ul class="space-y-2">
                            <li><a href="./index.php"
                                    class="text-sm hover:underline font-montserrat block text-center md:text-left">Home</a>
                            </li>
                            <li><a href="./boodschap.php"
                                            class="text-sm hover:underline font-montserrat block text-center md:text-left">Maak je unieke boodschap</a>
                                    </li>
                            <li><a href="./werkt.php"
                                    class="text-sm hover:underline font-montserrat block text-center md:text-left">Hoe
                                    het
                                    werkt</a></li>
                                    
                            <li><a href="./over-ons.php"
                                    class="text-sm hover:underline font-montserrat block text-center md:text-left">Over
                                    ons</a>
                            </li>
                            <li><a href="./partners.php"
                                    class="text-sm hover:underline font-montserrat block text-center md:text-left">Partners</a>
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-3 pt-2 justify-center md:justify-start">
                            <a href="#" class="text-sm hover:underline font-montserrat"> <span>Alle rechten
                                    voorbehouden.</span>
                            </a>

                        </div>
                    </div>

                    <!-- Contact Column -->
                    <div class="space-y-4">
                        <h4 class="text-sm font-montserrat text-center md:text-start">Contact</h4>
                        <ul class="space-y-2">
                            <li class="text-sm text-center md:text-left font-montserrat font-montserrat">Cheers'Tag.com
                            </li>
                            <li class="text-sm text-center md:text-left font-montserrat font-montserrat">Amstelveen</li>
                            <li class="text-sm text-center md:text-left font-montserrat font-montserrat">
                                info@cheerstag.com</li>
                            <li class="text-sm text-center md:text-left font-montserrat font-montserrat">+31 (0)6
                                42752700</li>
                        </ul>
                        <div class="flex flex-wrap gap-1 md:gap-3 md:pt-9 pt-14 justify-center md:justify-start">
                            </a>
                            <a href="#" class="text-sm hover:underline font-montserrat"> <span>Privacybeleid</span>
                                <a href="#" class="text-sm hover:underline font-montserrat">
                                    <span>Gebruiksvoorwaarden</span>
                                </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer ended  -->
</body>
</html>