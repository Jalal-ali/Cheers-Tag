<<<<<<< HEAD
<!DOCTYPE>
=======
<!DOCTYPE >
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <title>Maak je unieke boodschap</title>
    <style>
        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }
<<<<<<< HEAD

        .font-fancy {
            font-family: 'Dancing Script', cursive;
        }

        .font-passenger {
            font-family: "Passenger Serif", serif;
        }
=======
        .font-fancy {
            font-family: 'Dancing Script', cursive;
        }
        .font-passenger {
            font-family: "Passenger Serif", serif;
        }

>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
    </style>
</head>

<body>
<<<<<<< HEAD
    <!-- navbar section started -->
    <?php include 'navbar.php'; ?>
    <!-- navbar section ended -->

=======
     <!-- navbar section started -->
       <?php include 'navbar.php'; ?>
    <!-- navbar section ended --> 
     
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
    <section class="bg-[#ffe8e6]">
        <div class="flex items-center justify-center p-4 md:p-2 md:pb-20 ">
            <!-- Author: FormBold Team -->
            <form class="w-full max-w-auto md:w-fit mx-auto mt-8 md:mt-20 p-4 md:p-5 bg-white rounded-lg shadow-xl">
<<<<<<< HEAD
                <h2 class="text-2xl md:text-4xl font-bold font-passenger text-[#722f37] mb-4 md:mb-6">Maak je unieke
                    boodschap</h2>
=======
                <h2 class="text-2xl md:text-4xl font-bold font-passenger text-[#722f37] mb-4 md:mb-6">Maak je unieke boodschap</h2>
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7

                <div class="mb-4 md:mb-5">
                    <label class="block text-[#722f37] font-bold mb-1 md:mb-2" for="name">
                        Naam ontvanger* (verplicht)
                    </label>
                    <input type="text" name="name" id="name" placeholder="Voor wie is het cadeau?"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 md:py-3 px-4 md:px-4 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="-mx-2 md:-mx-3 flex flex-wrap">
                    <div class="w-full px-2 md:px-3 sm:w-1/2">
                        <div class="mb-4 md:mb-5">
                            <label class="block text-[#722f37] font-bold mb-1 md:mb-2" for="area">
                                Jouw voornaam
                            </label>
                            <input type="text" name="area" id="area" placeholder="Jouw voornaam"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 md:py-3 px-4 md:px-4 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-2 md:px-3 sm:w-1/2">
                        <div class="mb-4 md:mb-5">
                            <label class="block text-[#722f37] font-bold mb-1 md:mb-2" for="city">
                                Jouw achternaam
                            </label>
                            <input type="text" name="city" id="city" placeholder="Jouw achternaam"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 md:py-3 px-4 md:px-4 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

                <div class="mb-4 md:mb-5">
                    <label class="block text-[#722f37] font-bold mb-1 md:mb-2" for="email">
                        Jouw roepnaam* (verplicht)
                    </label>
                    <input type="email" name="email" id="email" placeholder="Hoe wil je aangesproken worden?"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 md:py-3 px-4 md:px-4 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-4 md:mb-5">
                    <label class="block text-[#722f37] font-bold mb-1 md:mb-2" for="date">
                        Datum * (verplicht)
                    </label>
                    <input type="date" name="date" id="date"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 md:py-3 px-4 md:px-4 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-4 md:mb-5">
                    <label class="block text-[#722f37] font-bold mb-1 md:mb-2" for="email">
                        Jouw telefoonnummer (verplicht)
                    </label>
                    <input type="email" name="email" id="email" placeholder="06 12345678"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 md:py-3 px-4 md:px-4 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-4 md:mb-5">
                    <label class="block text-[#722f37] font-bold mb-1 md:mb-2" for="feedback">
                        Jouw bericht (max 500 karakters)
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="feedback" rows="4" placeholder="Schrijf hier je persoonlijke boodschap..."></textarea>
                </div>

                <hr class="w-[100%] mx-auto text-gray-300 my-2">

                <!--price plans section -->
                <div class="w-full py-4">
                    <div class="flex-col justify-between pb-4">
<<<<<<< HEAD
                        <h2 class="text-md md:text-xl font-bold font-passenger text-[#722f37] mb-2">Maak je bericht
                            extra speciaal</h2>
=======
                        <h2 class="text-md md:text-xl font-bold font-passenger text-[#722f37] mb-2">Maak je bericht extra speciaal</h2>
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
                    </div>

                    <!-- pricing section stack started -->
                    <div class="grid gap-2 md:gap-3 grid-cols-1" id="accordion-collapse-body-1">
<<<<<<< HEAD
                        <label
                            class="has-[:checked]:bg-white/30 has-[:checked]:text-indigo-900 has-[:checked]:ring-indigo-200 has-[:checked]:ring-2 cursor-pointer bg-white/40 hover:bg-white/20 w-auto px-2 md:px-3 py-1 rounded-md flex justify-between items-center shadow">
                            <!-- icon and description -->
                            <div class="flex items-center gap-x-2">
                                <div class="items-center p-1 md:p-2 rounded-full bg-[#f5e7d6]">
                                    <img src="./assets/icons/camera.png" alt="camera" class="h-7 w-7 md:h-9 md:w-9">
                                </div>
                                <div class="p-1 md:p-2">
                                    <p class="font-semibold font-fancy text-base md:text-lg text-start leading-tight">
                                        trenger</p>
                                    <p class="text-gray-600 text-sm text-start leading-tight font-montserrat">Voeg een
                                        speciale foto toe aan je bericht</p>
                                </div>
                            </div>
                            <!-- price and input section -->
=======
                       <label class="has-[:checked]:bg-white/30 has-[:checked]:text-indigo-900 has-[:checked]:ring-indigo-200 has-[:checked]:ring-2 cursor-pointer bg-white/40 hover:bg-white/20 w-auto px-2 md:px-3 py-1 rounded-md flex justify-between items-center shadow">
    <!-- icon and description -->
    <div class="flex items-center gap-x-2">
        <div class="items-center p-1 md:p-2 rounded-full bg-[#f5e7d6]">
            <img src="./assets/icons/camera.png" alt="camera" class="h-7 w-7 md:h-9 md:w-9">
        </div>
        <div class="p-1 md:p-2">
            <p class="font-semibold font-fancy text-base md:text-lg text-start leading-tight">trenger</p>
            <p class="text-gray-600 text-sm text-start leading-tight font-montserrat">Voeg een speciale foto toe aan je bericht</p>
        </div>
    </div>
     <!-- price and input section -->
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
                            <div class="flex items-center gap-x-2">
                                <p class="text-[#722f37] text-sm md:text-base font-montserrat">€ 3.95</p>
                                <input type="radio" name="payment"
                                    class="appearance-none h-4 w-4 md:h-5 md:w-5 md:checked:w-4 md:checked:h-4 rounded-full border-2 border-gray-300 checked:border-[#722f37] checked:bg-[#722f37] checked:ring checked:ring-[#722f37] checked:ring-offset-2 transition-all" />
                            </div>
<<<<<<< HEAD
                        </label>
=======
</label>
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7

                        <label
                            class="has-[:checked]:bg-white/30 has-[:checked]:text-indigo-900 has-[:checked]:ring-indigo-200 has-[:checked]:ring-2 cursor-pointer bg-white/40 hover:bg-white/20 w-auto px-2 md:px-3 py-1 rounded-md flex justify-between items-center shadow">
                            <!-- icon and description -->
                            <div class="flex items-center gap-x-2">
                                <div class="items-center p-1 md:p-2 rounded-full bg-[#f5e7d6]">
                                    <img src="./assets/icons/microphone.png" alt="microphone"
                                        class="h-7 w-7 md:h-9 md:w-9">
                                </div>
                                <div class="p-1 md:p-2">
                                    <p class="font-semibold font-fancy text-base md:text-lg">Sprealbericht</p>
<<<<<<< HEAD
                                    <p class="text-gray-600 text-sm text-start leading-tight font-montserrat">Neem een
                                        persoonlijk audiobericht op</p>
                                </div>
                            </div>
                            <!-- price and input section -->
=======
                                    <p class="text-gray-600 text-sm text-start leading-tight font-montserrat">Neem een persoonlijk audiobericht op</p>
                                </div>
                            </div>
                             <!-- price and input section -->
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
                            <div class="flex items-center gap-x-2">
                                <p class="text-[#722f37] text-sm md:text-base font-montserrat">€ 3.95</p>
                                <input type="radio" name="payment"
                                    class="appearance-none h-4 w-4 md:h-5 md:w-5 md:checked:w-4 md:checked:h-4 rounded-full border-2 border-gray-300 checked:border-[#722f37] checked:bg-[#722f37] checked:ring checked:ring-[#722f37] checked:ring-offset-2 transition-all" />
                            </div>
                        </label>

                        <label
<<<<<<< HEAD
                            class="has-[:checked]:bg-white/30 has-[:checked]:text-indigo-900 has-[:checked]:ring-indigo-200 has-[:checked]:ring-2 cursor-pointer bg-white/40 hover:bg-white/20 w-auto px-2 md:px-3 py-1 rounded-md flex justify-between items-center shadow">
=======
                            class="has-[:checked]:bg-white/30 has-[:checked]:text-indigo-900 has-[:checked]:ring-indigo-200 has-[:checked]:ring-2 cursor-pointer bg-white/40 hover:bg-white/20 w-auto px-2 md:px-3 py-1 rounded-md flex justify-between items-center shadow"
                            >
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
                            <!-- icon and description -->
                            <div class="flex items-center gap-x-2">
                                <div class="items-center p-1 md:p-2 rounded-full bg-[#f5e7d6]">
                                    <img src="./assets/icons/video-camera.png" alt="video-camera"
                                        class="h-7 w-7 md:h-9 md:w-9">
                                </div>
                                <div class="p-1 md:p-2">
                                    <p class="font-semibold font-fancy text-base md:text-lg">Videoboodschap</p>
<<<<<<< HEAD
                                    <p class="text-gray-600 text-sm text-start leading-tight font-montserrat">Deel een
                                        videoboodschap bij je cadeau</p>
=======
                                    <p class="text-gray-600 text-sm text-start leading-tight font-montserrat">Deel een videoboodschap bij je cadeau</p>
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
                                </div>
                            </div>
                            <!-- price and input section -->
                            <div class="flex items-center gap-x-2">
                                <p class="text-[#722f37] text-sm md:text-base font-montserrat">€ 3.95</p>
                                <input type="radio" name="payment"
                                    class="appearance-none h-4 w-4 md:h-5 md:w-5 md:checked:w-4 md:checked:h-4 rounded-full border-2 border-gray-300 checked:border-[#722f37] checked:bg-[#722f37] checked:ring checked:ring-[#722f37] checked:ring-offset-2 transition-all" />
                            </div>
                        </label>
                    </div>
                    <!-- pricing section stack ended -->
                </div>

                <!-- check box -->
                <div class="flex items-start mb-4 mt-2">
                    <input type="checkbox" id="rememberMe"
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 mt-1 focus:ring-3 focus:ring-[#f4e6d3] accent-[#722f37]" />
                    <label for="rememberMe" class="ml-2 text-xs md:text-sm leading-tight text-gray-600">
                        <span class="text-[#722f37]">Ik</span> ga akkoord met de <span class="text-[#722f37]">algemene
                            voorwaarden</span> en het <span class="text-[#722f37]">privacybeleid</span><br />van VinNote
                    </label>
                </div>

<<<<<<< HEAD
                <div class="text-center">
    <a class="hover:shadow-form w-full inline-block items-center self-center align-center rounded-md bg-[#339999] hover:bg-[#216666] py-2 md:py-3 px-4 md:px-8 text-sm md:text-base font-semibold text-white outline-none" href="#">
        <button class="cursor-pointer ">
            Bericht versturen
        </button>
    </a>
</div>
=======
                <div>
                    <button 
                        class="hover:shadow-form w-full rounded-md bg-[#339999] py-2 md:py-3 px-4 md:px-8 text-sm md:text-base font-semibold text-white outline-none">
                        Bericht versturen
                    </button>
                </div>
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
            </form>
        </div>
    </section>
    <!-- form section ended -->


<<<<<<< HEAD
    <!-- footer  -->
    <?php include 'footer.php'; ?>

=======
      <!-- footer  -->
        <?php include 'footer.php'; ?>




































    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const isHidden = menu.classList.contains('hidden');

            // Toggle menu visibility
            menu.classList.toggle('hidden');

            // Toggle hamburger/close icons
            const hamburger = this.querySelector('svg:not(.hidden)');
            const close = this.querySelector('svg.hidden');
            hamburger.classList.toggle('hidden');
            close.classList.toggle('hidden');

            // Update aria-expanded attribute
            this.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
        });
    </script>
>>>>>>> 4e2f3cc8b58fb262591847270347aaff7276d4a7
</body>

</html>