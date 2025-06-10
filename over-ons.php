<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Over ons</title>
    <style>
        .font-passenger {
            font-family: "Passenger Serif", serif;
        }

        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }

        /* section.pb-28.pt-16.bg-\[\#ffe8e6\]{
            display: flex;
        }
        .container.mx-auto.px-4.py-5.md\:py-12.lg\:py-10.text-center{
            width: ;
        } */
    </style>
</head>

<body>
    <!-- navbar section started -->
    <?php include 'navbar.php'; ?>

    <!-- navbar section ended -->

    <section class="pb-28 pt-16 bg-[#ffe8e6]">
        <div class="container mx-auto px-4 py-5 md:py-12 lg:py-10 text-center">
            <h1
                class="font-passenger text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-[#722f37] mb-1 md:mb-1">
                Over CheersTag
            </h1>
        </div>
        <!-- card  -->
        <div
            class="lg:w-[70%] text-center flex-col justify-center self-start align-start w-auto mx-3 lg:mx-auto my-3 rounded-lg">
            
            
            <!--1st content -->
            <div class="p-5 pt-8 text-center bg-white rounded-lg">
                <!-- icon  -->
                <div class="flex flex-col items-center">
                    <div class="flex-shrink-0 relative top-0 -mt-16">
                        <div
                            class="flex items-center justify-center h-20 w-20 rounded-full bg-[#ffe8e6] bg-opacity-10 text-white border-4 border-white text-xl font-semibold">
                            <img class="w-8 h-8" src="./assets/icons/heart.png" alt="heart">

                        </div>
                    </div>
                </div>
                <!-- text  -->
                <div class="py-3">
                    <p class="font-montserrat text-center text-[#5e262c] leading-relaxed">Herken je dat moment? Je opent
                        een fles wijn en denkt: "Van wie heb ik
                        deze eigenlijk gekregen?" Een klein, menselijk probleem dat we allemaal kennen. Want een cadeau
                        zonder context verliest zijn waarde en je weet niet eens meer wie je zou moeten bedanken.</p>
                    <br>
                    <p class="font-montserrat text-center text-[#5e262c] leading-relaxed">Wij bij CheersTag geloven dat
                        elk geschenk een verhaal vertelt. Daarom
                        hebben we CheersTag gecreëerd - een eenvoudige maar krachtige oplossing die elk cadeau verbindt
                        met
                        een blijvende herinnering.</p>
                </div>
            </div>
            <!-- 3 icons section -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6 px-3 py-4 mx-auto rounded-lg my-4 bg-white border-t-3 border-b-3 border-[#339999]">
                <!-- Icon 1 -->
                <div class="flex flex-col items-center gap-2 w-full sm:w-auto px-2">
                    <!-- Icon Container -->
                    <div class="p-3 rounded-full bg-[#ffe8e6] shadow-sm text-[#722f37] shrink-0">
                        <img class="w-7 h-7" src="./assets/icons/qr-code.png" alt="QR Code">
                    </div>
                    <!-- Text -->
                    <p class="text-gray-700 text-sm text-center max-w-[180px]">Gebruik de QR-code op het CheersTag
                        kaartje</p>
                </div>

                <!-- Icon 2 -->
                <div class="flex flex-col items-center gap-2 w-full sm:w-auto px-2">
                    <!-- Icon Container -->
                    <div class="p-3 rounded-full bg-[#ffe8e6] shadow-sm text-[#722f37] shrink-0">
                        <img class="w-7 h-7" src="./assets/icons/message.png" alt="message">
                    </div>
                    <!-- Text -->
                    <p class="text-gray-700 text-sm text-center max-w-[180px]">Video, audio of tekst die jarenlang
                        bewaard blijft</p>
                </div>

                <!-- Icon 3 -->
                <div class="flex flex-col items-center gap-2 w-full sm:w-auto px-2">
                    <!-- Icon Container -->
                    <div class="p-3 rounded-full bg-[#ffe8e6] shadow-sm text-[#722f37] shrink-0">
                        <img class="w-7 h-7" src="./assets/icons/heart.png" alt="heart">
                    </div>
                    <!-- Text -->
                    <p class="text-gray-700 text-sm text-center max-w-[180px]">Direct bedanken met één tik</p>
                </div>
            </div>
            <!-- Card content -->
            <div class="p-5 py-4 text-center bg-white rounded-lg">
                <p class="font-montserrat text-center text-[#5e262c] leading-tight">Hoe? Met onze unieke CheersTag
                    kaartjes, voorzien van een persoonlijke
                    QR- code. Schrijf een kort berichtje op het kaartje én voeg een digitale dimensie toe: een video
                    waarin je lacht, een audiobericht met je stem, of een
                    persoonlijke tekst die jarenlang bewaard blijft.</p>
                <br>
                <p class="font-montserrat text-center text-[#5e262c] leading-tight">Geen apps nodig, gewoon scannen. Als
                    de ontvanger maanden later de QR-
                    code opnieuw scant, komt jouw persoonlijke boodschap meteen tevoorschijn - een emotioneel moment dat
                    het geschenk opnieuw tot leven brengt. En met één tik kan de ontvanger je direct bedanken.</p>
                <br>
                <p class="font-montserrat text-center text-[#5e262c] leading-tight">CheersTag verbindt mensen, niet
                    alleen door wat we geven, maar ook door
                    hoe we het geven. Een kleine, betaalbare toevoeging met een onbetaalbare emotionele waarde.</p>
            </div>
            <p
                class="text-base sm:text-lg md:text-md my-5 text-[#722f37] leading-relaxed md:leading-loose font-normal font-passenger">
                Want een goed geschenk verdient een blijvende herinnering.
            </p>
        </div>
    </section>


    <!-- footer  -->
    <?php include 'footer.php'; ?>
</body>

</html>