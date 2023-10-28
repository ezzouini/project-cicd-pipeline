<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <section class="py-8 md:py-16">
        <div class="container max-w-screen-xl mx-auto px-4">
            <nav class="flex-wrap lg:flex items-center justify-between mb-20 lg:mb-40 px-8 md:px-16"
                x-data="{ navbarOpen: false }">
                <div class="flex items-center justify-between mb-10 lg:mb-0">
                    <img src="https://almossaid.com/logo/dark.png" alt="Logo" style="height: 80px " >

                    <button
                        class="flex items-center justify-center border border-orange-400 w-10 h-10 text-orange-400 rounded-md outline-none lg:hidden ml-auto"
                        @click="navbarOpen = !navbarOpen">
                        <img src="https://kubik-html.boxmodel.dev/img/icons/menu.svg" alt="menu icon">
                    </button>
                </div>

                <ul class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:space-x-20"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <li
                        class="font-medium text-orange-400 text-lg hover:text-orange-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#">Services</a>
                    </li>

                    <li
                        class="px-8 py-3 font-medium text-orange-400 text-lg text-center border-2 border-orange-400 rounded-md hover:bg-orange-400 hover:text-white transition ease-linear duration-300">
                        <a href="//almossaid.com/contact">Connect</a>
                    </li>
                </ul>
            </nav>

            <header class="flex-col xl:flex-row flex justify-between">
                <div class="mx-auto text-center xl:text-left xl:mx-0 mb-20 xl:mb-0 xl:ml-16">
                    <h3 class="font-bold text-gray-700 text-3xl md:text-6xl leading-tight mb-10">
                        This project serves as a straightforward example for <br> TESTING <br> the GitHub Actions CI/CD pipeline
                    </h3>
                </div>

                <div class="mx-auto xl:mx-0">
                    <img src="https://kubik-html.boxmodel.dev/img/home-img.svg" alt="Image">
                </div>
            </header>
        </div>
        <!-- container.// -->
    </section>


</body>

</html>
