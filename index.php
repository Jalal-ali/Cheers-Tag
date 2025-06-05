<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>CheersTag</title>
    <style>
 
        .font-passenger {
            font-family: "Passenger Serif", serif;
        }

        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- main section  -->
    <section class="bg-[#ffe8e6]">
        <div class="container mx-auto px-4 py-12 md:py-20 ">
            <div class="flex flex-col md:flex-row md:justify-between items-center gap-8 lg:gap-12">
                <!-- Left Section (Text + Button) -->
                <div class="mx-auto md:ms-12 w-full md:w-auto space-y-8 text-center md:text-left self-start">
                    <!-- Heading -->
                    <h1
                        class="font-passenger text-4xl sm:text-4xl lg:text-6xl font-bold text-[#802311] md:text-start leading-tight">
                        Maak je cadeau extra <br class="hidden md:block"> bijzonder met een <br class="hidden md:block">
                        persoonlijke boodschap
                    </h1>

                    <!-- Button -->
                    <button
                        class="mt-16 mx-auto md:ms-8 font-passenger px-8 py-4 text-2xl bg-[#044446] hover:bg-[#033336] text-white rounded-lg transition duration-300 text-center md:text-start">
                        Creëer <span class="underline underline-offset-4 decoration-2">hier</span> jouw unieke
                        boodschap!<br>
                        <span class="block">Voeg je tekst, audio, of video toe.</span>
                    </button>
                </div>

                <!-- Right Section (Image) -->
                <div class="md:w-[37%]">
                    <img src="./assets/images/CheersTag-bg.png" alt="Sample Image" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
        <?php include 'footer.php'; ?>










    <!-- old section below -->
    <!-- <section>
        <div class="container mx-auto px-4 py-5 md:py-12 lg:py-10 text-center w-[60%] mt-20">
            <h1
                class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-[#722f37] mb-1 md:mb-1 font-passenger">
                Verbind geschenken met <br> persoonlijke <br> boodschappen
            </h1>

            <p class="text-base sm:text-lg md:text-xl text-[#722f37] leading-tight font-montserrat mt-4">
                Maak van elk cadeau een blijvende herinnering met een <br> digitale boodschap.
            </p>
        </div>
        // buttons section  //
        <div class="flex flex-col sm:flex-row gap-4 w-full max-w-[70%] mx-auto p-4">
            // first Button //
            <a href="./pages/boodschap.php"
                class="flex-1 bg-[#722f37] hover:bg-[#5a252c] text-white font-medium py-4 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 text-center transform hover:scale-[1.02]">
                <button>
                    <h3 class="text-start font-bold cursor-pointer">Maak je unieke boodschap</h3>
                    <p class="text-start font-normal cursor-pointer font-montserrat">Creëer direct een persoonlijke
                        video, foto of
                        tekst die je cadeau onvergetelijk maakt!</p>
                </button>
            </a>

            // Second Button //
            <a href="./pages/werkt.php"
                class="flex-1 border-2 border-[#722f37] text-[#722f37] hover:bg-gray-50 font-medium py-4 px-6 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 text-center transform hover:scale-[1.02]">
                <button>
                    <h3 class="text-start font-bold cursor-pointer">Hoe het werkt</h3>
                    <p class="text-start font-normal font-montserrat cursor-pointer">Ontdek snel en eenvoudig hoe je in
                        enkele
                        stappen je eigen digitale geschenk verbindt.</p>
                </button>
            </a>

        </div>
    </section> -->

</body>
</html>