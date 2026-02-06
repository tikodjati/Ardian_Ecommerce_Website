<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louis Vuitton Footer - Tailwind</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'saveur': ['saveurSans', 'serif'],
                        'jost': ['jost', 'sans-serif'],
                        'jost-light': ['jost_light', 'sans-serif'],
                    },
                    screens: {
                        'md': '1025px',
                    }
                }
            }
        }
    </script>

    <style>
        @font-face { font-family: saveurSans; src: url(fonts/Saveur_sans.otf); }
        @font-face { font-family: jost; src: url(fonts/Jost.ttf); }
        @font-face { font-family: jost_light; src: url(fonts/Jost_light.ttf); }
        
        .panel { transition: max-height 0.3s ease-out; }
    </style>
</head>
<body class="m-0 p-0 overflow-x-hidden w-full">
    <!-- Desktop Version -->
    <section class="hidden md:flex flex-col px-[4.5rem] mb-10 w-full">
        <hr class="border-t border-gray-300 mb-8 w-full opacity-40">
        
        <div class="flex justify-between w-full">
            <div class="flex-1 flex flex-col gap-2">
                <div class="font-jost text-[0.8rem] font-semibold mb-2 tracking-wide">HELP</div>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">
                    You can <span class="underline underline-offset-4">call</span> or <span class="underline underline-offset-4">email us</span>.
                </a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">FAQ's</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Product Care</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Stores</a>
            </div>

            <div class="flex-1 flex flex-col gap-2">
                <div class="font-jost text-[0.8rem] font-semibold mb-2 tracking-wide">SERVICES</div>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Repairs</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Personalization</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Art of Gifting</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Download our Apps</a>
            </div>

            <div class="flex-1 flex flex-col gap-2">
                <div class="font-jost text-[0.8rem] font-semibold mb-2 tracking-wide">ABOUT LOUIS VUITTON</div>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Fashion Shows</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Art & Culture</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">La Maison</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Sustainability</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Latest News</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Careers</a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">Foundation Louis Vuitton</a>
            </div>

            <div class="flex-1 flex flex-col gap-2">
                <div class="font-jost text-[0.8rem] font-semibold mb-2 tracking-wide">CONNECT</div>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600">
                    <span class="underline underline-offset-4">Sign up</span> for first access to latest collections, campaigns and videos.
                </a>
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline hover:text-gray-600 mt-2">Follow Us</a>
            </div>
        </div>

        <hr class="border-t border-gray-300 mt-12 w-full opacity-40">
    </section>

    <!-- Desktop Footer -->
    <footer class="hidden md:flex justify-between items-center py-5">
        <a href="#" class="font-jost-light text-[0.9rem] px-[4.5rem] no-underline text-black flex items-center gap-2">
            <i class="fa-solid fa-globe text-black/80"></i>
            <span class="underline underline-offset-[6px] decoration-1">ENGLISH (INTL)</span>
        </a>
        <ul class="flex justify-end items-center list-none pr-[50px]">
            <li class="mx-[10px] mr-[30px]">
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline">Sitemap</a>
            </li>
            <li class="mx-[10px] mr-[30px]">
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline">Legal & privacy</a>
            </li>
            <li class="mx-[10px] mr-[30px]">
                <a href="#" class="font-jost-light text-[0.9rem] text-black no-underline">Cookies</a>
            </li>
        </ul>
    </footer>

    <!-- Louis Vuitton Logo -->
    <div class="mt-[45px] mb-[50px] text-center font-saveur text-black
                text-[2rem] md:text-[1.3em]">
        Louis Vuitton
    </div>

    <!-- Mobile Accordion Version -->
    <div class="block md:hidden w-full">
        
        <hr class="border-t border-gray-300 mx-[20px] block">
        <button class="accordion w-full text-left py-[18px] px-[20px] bg-white text-black font-jost-light text-[0.95rem] flex justify-between items-center cursor-pointer outline-none border-none">
            Help
            <span class="icon text-xl font-light transition-transform duration-300">+</span>
        </button>
        <div class="panel max-h-0 overflow-hidden bg-white mx-[20px]">
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">
                You can <span class="underline underline-offset-4">call</span> or <span class="underline underline-offset-4">email us</span>.
            </a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">FAQ's</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Product Care</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Stores</a>
        </div>

        <hr class="border-t border-gray-300 mx-[20px] block">
        <button class="accordion w-full text-left py-[18px] px-[20px] bg-white text-black font-jost-light text-[0.95rem] flex justify-between items-center cursor-pointer outline-none border-none">
            Services
            <span class="icon text-xl font-light transition-transform duration-300">+</span>
        </button>
        <div class="panel max-h-0 overflow-hidden bg-white mx-[20px]">
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Repairs</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Personalization</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Art of Gifting</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Download our Apps</a>
        </div>

        <hr class="border-t border-gray-300 mx-[20px] block">
        <button class="accordion w-full text-left py-[18px] px-[20px] bg-white text-black font-jost-light text-[0.95rem] flex justify-between items-center cursor-pointer outline-none border-none">
            About Louis Vuitton
            <span class="icon text-xl font-light transition-transform duration-300">+</span>
        </button>
        <div class="panel max-h-0 overflow-hidden bg-white mx-[20px]">
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Fashion Shows</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Art & Culture</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">La Maison</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Sustainability</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Latest News</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Careers</a>
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">Foundation Louis Vuitton</a>
        </div>

        <hr class="border-t border-gray-300 mx-[20px] block">
        <button class="accordion w-full text-left py-[18px] px-[20px] bg-white text-black font-jost-light text-[0.95rem] flex justify-between items-center cursor-pointer outline-none border-none">
            Connect
            <span class="icon text-xl font-light transition-transform duration-300">+</span>
        </button>
        <div class="panel max-h-0 overflow-hidden bg-white mx-[20px]">
            <a href="#" class="block my-[15px] mx-[10px] text-[0.88rem] font-jost-light text-black no-underline">
                <span class="underline underline-offset-4">Sign up</span> for first access to latest collections.
            </a>
            
            <div class="flex flex-wrap justify-center gap-6 mt-[40px] mb-[30px] text-[1.8rem] text-black">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-snapchat"></i>
                <i class="fa-brands fa-pinterest-p"></i>
                <i class="fa-brands fa-foursquare"></i>
            </div>
        </div>
        <hr class="border-t border-gray-300 mx-[20px] block">
    </div>

    <!-- Mobile Footer -->
    <footer class="flex md:hidden flex-col items-center text-center my-[40px]">
        <ul class="flex justify-center list-none p-0 mb-[10px] gap-4">
            <li><a href="#" class="text-[0.75rem] font-jost-light text-black no-underline">Sitemap</a></li>
            <li><a href="#" class="text-[0.75rem] font-jost-light text-black no-underline">Legal & privacy</a></li>
            <li><a href="#" class="text-[0.75rem] font-jost-light text-black no-underline">Cookies</a></li>
        </ul>
        <div class="mt-[25px]">
            <a href="#" class="text-[0.75rem] font-jost-light text-black no-underline flex items-center gap-2">
                <i class="fa-solid fa-globe text-[0.8rem] text-black/80"></i>
                <span class="underline underline-offset-4 decoration-1">ENGLISH (INTL)</span>
            </a>
        </div>
    </footer>

    <script>
        const acc = document.getElementsByClassName("accordion");

        for (let i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                const panel = this.nextElementSibling;
                const icon = this.querySelector('.icon');
                
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    icon.textContent = "+";
                    icon.style.transform = "rotate(0deg)";
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    icon.textContent = "−";
                    icon.style.transform = "rotate(90deg)";
                }
            });
        }
    </script>
</body>
</html>