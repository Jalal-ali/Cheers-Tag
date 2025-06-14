<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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

<body class="bg-gray-50">

    <!-- 🔹 Splash Screen (4 sec) -->
    <section id="splash-screen"
        class="h-screen w-screen flex flex-col justify-center items-center bg-[#ffe8e6] text-white text-center px-4">

        <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-pulse text-[#339999]">
            🎉 Welcome to CheersTag
        </h1>

        <p class="text-lg text-[#339999]">
            Location Code:
            <strong class="font-mono bg-[#339999]/20 px-3 py-1 rounded">
                LCX-9231
            </strong>
        </p>
    </section>


    <!-- modal section  -->
    <div id="modelConfirm"
        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-screen w-full px-4"
        >
        <div class=" mx-auto shadow-xl rounded-md bg-white max-w-md w-full pt-4 my-20">
            <div class="p-6 pt-0 text-center">
                <div class="w-full max-w-md  p-6 md:p-8 transition-all duration-300">
                    <!-- Tabs -->
                    <div class="flex justify-between mb-6 border-b border-gray-200">
                        <button id="signInTab"
                            class="w-1/2 text-[#339999] text-center pb-2 font-medium border-b-2 border-transparent hover:border-[#216666] focus:outline-none transition">Log
                            In</button>
                        <button id="signUpTab"
                            class="w-1/2 text-center pb-2 font-medium border-b-2 border-transparent hover:border-[#216666] focus:outline-none transition">Sign
                            Up</button>
                    </div>

                    <!-- Sign In Form -->
                    <form id="signInForm" class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1 text-start">Email</label>
                            <input type="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="rajesh@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-1 text-start">Password</label>
                            <input type="password"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="••••••••">
                        </div>
                        <div class="flex justify-between text-sm text-gray-600">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                <span>Remember me</span>
                            </label>
                            <a href="#" class="text-[#339999] hover:underline">Forgot password?</a>
                        </div>
                        <button
                            class="w-full bg-[#339999] hover:bg-[#216666] text-white font-medium py-3 rounded-lg shadow-md hover:shadow-lg transition">Sign
                            In</button>
                    </form>

                    <!-- Sign Up Form  -->
                    <form id="signUpForm" class="space-y-4 hidden">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1 text-start">Full Name</label>
                            <input type="text"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Rajesh Maheshwari">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-1 text-start">Email</label>
                            <input type="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="rajesh@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-1 text-start">Password</label>
                            <input type="password"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="••••••••">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-1 text-start">Confirm Password</label>
                            <input type="password"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="••••••••">
                        </div>
                        <button
                            class="w-full bg-[#339999] hover:bg-[#216666] text-white font-medium py-3 rounded-lg shadow-md hover:shadow-lg transition">Sign
                            Up</button>
                    </form>


                </div>

            </div>

        </div>
    </div>


    <!-- 🔸 Main Landing Page (hidden initially) -->
    <div id="main-content" class="hidden min-h-screen flex flex-col py-10">
        <main class="flex-grow container mx-auto px-4 py-10 max-w-2xl">
            <section id="user1" class="bg-white rounded-xl shadow-md p-6 mb-8 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-3">Create a Memory</h2>
                <p class="text-gray-600 mb-5">Are you gifting someone a memory? Start by creating one.</p>
                <a href="create-memory.html" class="inline-block">
                    <button
                        class="bg-[#339999] hover:bg-indigo-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200 shadow hover:shadow-md">
                        Create a Memory
                    </button>
                </a>
            </section>

            <div class="relative flex py-4 items-center">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="flex-shrink mx-4 text-gray-500">OR</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <section id="user2" class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">View Your Gift</h2>
                <form action="view-memory.html" method="GET" class="space-y-4">
                    <div>
                        <label for="code" class="block text-sm font-medium text-gray-700 mb-1">Unique Code:</label>
                        <input type="text" id="code" name="code" placeholder="e.g. GFT123456" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
                    </div>

                    <div>
                        <label for="pin" class="block text-sm font-medium text-gray-700 mb-1">PIN:</label>
                        <input type="password" id="pin" name="pin" placeholder="e.g. 4321" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
                    </div>

                    <button type="submit"
                        class="w-full bg-[#339999] hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200 shadow hover:shadow-md mt-4">
                        View Message
                    </button>
                </form>
            </section>
        </main>

        <footer class="bg-gray-100 py-4 text-center text-gray-600 text-sm">
            <p>&copy; 2025 CheersTag</p>
        </footer>
    </div>




    <script>
        // Hide splash after 4 seconds
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.getElementById('splash-screen').style.display = 'none';
                document.getElementById('main-content').style.display = 'block';
                window.openModal('modelConfirm');
            }, 1000);
        });

        // Modal open/close functions
        window.openModal = function (modalId) {
            document.getElementById(modalId).style.display = 'block';
            document.body.classList.add('overflow-y-hidden'); // Prevent scrolling
        };

        // Close modal on ESC key
        document.onkeydown = function (event) {
            event = event || window.event;
            if (event.key === 'Escape' || event.keyCode === 27) { // Modern + legacy support
                document.body.classList.remove('overflow-y-hidden');
                let modals = document.getElementsByClassName('modal');
                Array.from(modals).forEach(modal => { // Cleaner conversion to array
                    modal.style.display = 'none';
                });
            }
        };

        // modal login and sign up functions 
        const signInTab = document.getElementById("signInTab");
        const signUpTab = document.getElementById("signUpTab");
        const signInForm = document.getElementById("signInForm");
        const signUpForm = document.getElementById("signUpForm");

        if (signUpForm.classList.contains('hidden')) {
            signInTab.classList.add("text-[#339999]", "border-[#216666]");
        }

        signInTab.addEventListener("click", () => {
            signInForm.classList.remove("hidden");
            signUpForm.classList.add("hidden");
            signInTab.classList.add("text-[#339999]", "border-[#216666]");
            signUpTab.classList.remove("text-[#339999]", "border-[#216666]");
        });

        signUpTab.addEventListener("click", () => {
            signUpForm.classList.remove("hidden");
            signInForm.classList.add("hidden");
            signUpTab.classList.add("text-[#339999]", "border-[#216666]");
            signInTab.classList.remove("text-[#339999]", "border-[#216666]");
        });
    </script>
</body>

</html>