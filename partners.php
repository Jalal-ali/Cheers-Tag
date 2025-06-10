<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Partners</title>
    <style>
        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }

        .font-fancy {
            font-family: 'Dancing Script', cursive;
        }

        .font-passenger {
            font-family: "Passenger Serif", serif;
        }
    </style>
</head>

<body>
        <?php include 'navbar.php'; ?>

   
    <section class=" py-1 bg-[#ffe8e6]">
        <div class="container mx-auto px-4 py-12 md:py-20 ">
            <div class="flex flex-col md:flex-row md:justify-between items-center gap-8 lg:gap-12">
                <!-- Left Section (Text + Button) -->
                <div class="container flex-col self-center mx-auto px-4 py-5 md:py-12 lg:py-10 lg:w-[90%]">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-[#722f37] mb-1 md:mb-1 text-start font-passenger">
                Vind je VinNote
            </h1>

            <p class="text-base sm:text-lg md:text-xl text-[#722f37] leading-relaxed md:leading-loose font-montserrat">
                Onze partners delen onze passie voor betekenisvolle herinneringen. Ontdek waar je VinNote kaartjes kunt vinden om jouw geschenken een blijvende emotionele waarde te geven.
            </p>
        </div>

                <!-- Right Section (Image) -->
                <div class="flex justify-center w-full">

            <ol class="lg:w-auto w-full space-y-4 p-2">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-4 w-full bg-white shadow-sm rounded-lg p-3">                   

                    <!-- Selector -->
                    <select
                        class="block w-full font-montserrat sm:w-auto min-w-[180px] px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#722f37] focus:border-[#722f37] transition-all">
                        <option>Alle locaties</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                    <label class="text-sm font-medium text-gray-600 whitespace-nowrap leading-tight font-montserrat">
                        5 partners gevonden
                    </label>
                </div>
                <li class="flex justify-start shadow align-center rounded-md bg-white p-2">
                    <div class="flex items-center text-center gap-x-2">
                        <div class=" items-center p-2 rounded-full bg-[#f5e7d6] self-start">
                            <img src="./assets/icons/location.png" alt="location" class="h-6 w-6  align-start ">
                        </div>
                        <div class="p-2">
                            <p class="font-semibold text-lg text-start leading-tight font-fancy text-[#722f37]">
                                Wijhandel De Grade To</p>
                            <p class="text-gray-900 text-start leading-tight">Amsterdamseweg 126</p>
                            <p class="text-gray-700 text-start leading-tight font-montserrat">1182 HJ Amstelveen
                            </p>
                        </div>
                    </div>
                </li>
                <li class="flex justify-start shadow align-center rounded-md bg-white p-2">
                    <div class="flex items-center text-center gap-x-2">
                        <div class=" items-center p-2 rounded-full bg-[#f5e7d6] self-start">
                            <img src="./assets/icons/location.png" alt="location" class="h-6 w-6  align-start ">
                        </div>
                        <div class="p-2">
                            <p class="font-semibold text-lg text-start leading-tight font-fancy text-[#722f37]">
                                Wijnoponisbat Hot Paket</p>
                            <p class="text-gray-900 text-start leading-tight">Stadsplein 75</p>
                            <p class="text-gray-700 text-start leading-tight font-montserrat">1181 ZA Amstelveen</p>
                        </div>
                    </div>
                </li>
                <li class="flex justify-start shadow align-center rounded-md bg-white p-2">
                    <div class="flex items-center text-center gap-x-2">
                        <div class=" items-center p-2 rounded-full bg-[#f5e7d6] self-start">
                            <img src="./assets/icons/location.png" alt="location" class="h-6 w-6  align-start ">
                        </div>
                        <div class="p-2">
                            <p class="font-semibold text-lg text-start leading-tight font-fancy text-[#722f37]">De
                                Wijchur</p>
                            <p class="text-gray-900 text-start leading-tight">Damrak 25</p>
                            <p class="text-gray-700 text-start leading-tight font-montserrat">1012 LG Amsterdam</p>
                        </div>
                    </div>
                </li>
                <li class="flex justify-start shadow align-center rounded-md bg-white p-2">
                    <div class="flex items-center text-center gap-x-2">
                        <div class=" items-center p-2 rounded-full bg-[#f5e7d6] self-start">
                            <img src="./assets/icons/location.png" alt="location" class="h-6 w-6  align-start ">
                        </div>
                        <div class="p-2">
                            <p class="font-semibold text-lg text-start leading-tight font-fancy text-[#722f37]">
                                Wijkparij De Hermitage</p>
                            <p class="text-gray-900 text-start leading-tight">Herengracht 123</p>
                            <p class="text-gray-700 text-start leading-tight font-montserrat">1015 BR Amsterdam</p>
                        </div>
                    </div>
                </li>
                <li class="flex justify-start shadow align-center rounded-md bg-white p-2">
                    <div class="flex items-center text-center gap-x-2">
                        <div class=" items-center p-2 rounded-full bg-[#f5e7d6] self-start">
                            <img src="./assets/icons/location.png" alt="location" class="h-6 w-6  align-start ">
                        </div>
                        <div class="p-2">
                            <p class="font-semibold text-lg text-start leading-tight font-fancy text-[#722f37]">Le Grand
                                Cru</p>
                            <p class="text-gray-900 text-start leading-tight">Kalverstraat 45</p>
                            <p class="text-gray-700 text-start leading-tight font-montserrat">1012 NX Amsterdam</p>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
            </div>
        </div>

    <!-- main div  -->
     <!-- <div class="flex flex-wrap"> -->

        <!-- <div class="container flex-col self-center mx-auto px-4 py-5 md:py-12 lg:py-10 lg:w-[50%]">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-[#722f37] mb-1 md:mb-1 text-start font-passenger">
                Vind je VinNote
            </h1>

            <p class="text-base sm:text-lg md:text-xl text-[#722f37] leading-relaxed md:leading-loose font-montserrat">
                Onze partners delen onze passie voor betekenisvolle herinneringen. Ontdek waar je VinNote kaartjes kunt vinden om jouw geschenken een blijvende emotionele waarde te geven.
            </p>
        </div> -->
        
        <!-- </div> -->
    </section>

      <!-- footer  -->
        <?php include 'footer.php'; ?>

</body>

</html>