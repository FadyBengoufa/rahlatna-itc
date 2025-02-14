<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rahlatna</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased overflow-x-hidden">
       <div class="container mx-auto">
        <div id="bg-container" class=" bg-cover bg-center h-147 w-full transition-all duration-500" 
        style="background-image: url('/images/7f147ec4d159e5baeb838604a36f5c6e.jpg');">
   
               <header class="text-white font-inter text-[18px] font-semibold flex justify-between bg-[#28361881] p-5">
                   <div class="logo">
                       <img src="" alt="logo">
                   </div>
                   <nav>
                       <ul class="nav_links flex space-x-14 capitalize">
                           <li><a href="">about</a></li>
                           <li><a href="">agencies</a></li>
                           <li><a href="">countries</a></li>
                           <li><a href="">payments</a></li>
                           <li><a href="">features</a></li>
                       </ul>
                   </nav>
   
                   <div class="capitalize">
                       <a href="{{ route('login') }}" class="py-1.5 px-3 rounded" style="margin-right: 20px; border: white 2px solid">login</a>
                       <a href="{{ route('register') }}" class="bg-[#003566] py-2 px-3 rounded">sign up</a>
                   </div>
               </header>
               <div class="text-white font-montserrat font-bold text-[42px] w-90 ml-30 mt-20 ">
                   <h1 class="leading-[55px]">Travel like never before unique experiances, just for you!</h1>
               </div>
               <div class="relative">
                   <button id="prevBtn" class="absolute -top-20 left-6"><img src="/images/lucide_chevrons-right (1).png" alt="" class="w-10 h-10"></button>
                   <button id="nextBtn" class="absolute -top-20 right-6"><img src="/images/lucide_chevrons-right (2).png" alt="" class="w-10 h-10"></button>
               </div>
               
           </div>
     
           <div class="relative flex justify-center ">
            <div class="absolute top-0 left-0 w-full h-[140%] bg-[#EAEDE7] -z-10 "></div>

           <div class="font-montserrat font-bold text-[42px]  ml-10 mt-20 leading-[55px] flex  h-[100%]">
                <h1 class="w-150">Where will your next adventure take you? Explore the best destinations today!</h1>
                <img src="/images/looking.png" alt="" class="w-100 mt-20 ml-20" >
           </div>
           </div>

           <div class="relative flex justify-center">
            <!-- Rotated Background Div (Placed Under) -->
            <div class="absolute top-10 -left-10 w-[150%] h-[100%] bg-[#b0b7bc] -rotate-6 z-0 "></div>
        
            <!-- Main Content (Above) -->
            <div class="flex justify-center mt-40">
                <div class="flex flex-col relative">
                    <div class="relative">
                        <img src="/images/Vector.png" alt="" class="w-70 h-40 z-50">
                        <p class="absolute inset-0 flex items-center justify-center text-center w-60 h-full -top-5 left-5">
                            Rehlatna connects travelers with Algeria’s top agencies for seamless bookings and unforgettable journeys—explore the world with ease
                        </p>
                    </div>
                    <img src="/images/Group.png" alt="" class="w-40 h-40 ml-50 z-20">
                    <img src="/images/Ellipse 28.png" alt="" class="w-70 h-40 ml-20 -mt-8 z-10">
                </div>
        
                <div class="flex flex-col relative ">
                    <div class="relative">
                        <img src="/images/Vector (1).png" alt="" class="w-40 h-40 z-50 ml-20">
                        <p class="absolute inset-0 flex items-center justify-center text-center w-40 h-full left-20  text-white font-bold">
                            So, what exactly is Rehlatna?
                        </p>
                    </div>
                    <img src="/images/Group (1).png" alt="" class="w-40 h-40 z-20">
                    <img src="/images/Ellipse 27.png" alt="" class="w-50 h-40 -mt-5 z-10">
                </div>
            </div>
        </div>

        <div class="font-montserrat font-bold text-[42px]  ml-20 leading-[55px]  h-[100%] z-60 mt-40 w-[100%]">
            <div>
                <h1 class="w-150">Ready to unlock exclusive travel opportunities? See what Rehlatna has to offer!</h1>
            </div>
            <div class="flex">
                <div class="w-[100%] overflow-hidden mt-10">
                    <img src="/images/Group 20.png" alt="" class="w-150 h-250">
                </div>
                <div class="text-[#093555] flex flex-col justify-between font-montserrat font-bold text-[40px] leading-[47px] mt-50">
                   <div class="flex -ml-100">
                        <h2 class="w-90">Register your agency and connect effortlessly with ideal clients!</h2>
                        <img src="/images/pixeltrue-business-meeting 1.png" alt="">
                   </div>
                   <div class="flex -ml-60">
                        <h2 class="w-90">Seamless, reliable client-agency communication</h2>
                        <img src="/images/loving.png" alt="">
                   </div>
                   <div class="flex -ml-30">
                        <h2 class="w-90">Book your dream trip effortlessly with Rehlatna—fast, secure, and hassle-free!</h2>
                        <img src="/images/open-doodles-sitting-man 1 (2).png" alt="">
                   </div>
                   <div class="flex ml-10">
                        <h2 >Easily find the perfect travel agency for your needs</h2>
                        <img src="/images/a_seo (1) 1.png" alt="" class="mr-10">
                   </div>
                </div>
            </div>
       </div>



       <div class="font-montserrat font-bold text-[42px]  ml-25 leading-[55px] mt-20">
        <h1 class="w-150">We're honored to earn your trust and collaborate with...</h1>

        <div>
            <div class="flex flex-wrap justify-between p-8 mt-10 mb-30 mr-20">
                <!-- Card 1 -->
                <div class="relative bg-[#28361881] rounded-2xl overflow-hidden w-80 p-6 flex items-center justify-center hover:shadow-2xl hover:scale-105 transition-transform duration-300 border border-transparent hover:border-[#00c6ff]">
                    <img src="/images/image 14.png" alt="CIB" class="w-40 h-40 object-contain">
                </div>
            
                <!-- Card 2 -->
                <div class="relative bg-[#28361881] rounded-2xl overflow-hidden w-80 p-6 flex items-center justify-center hover:shadow-2xl hover:scale-105 transition-transform duration-300 border border-transparent hover:border-[#00c6ff]">
                    <img src="/images/AlgeriePoste.svg 2.png" alt="Algerie Poste" class="w-40 h-40 object-contain">
                </div>
            
                <!-- Card 3 -->
                <div class="relative bg-[#28361881] rounded-2xl overflow-hidden w-80 p-6 flex items-center justify-center hover:shadow-2xl hover:scale-105 transition-transform duration-300 border border-transparent hover:border-[#00c6ff]">
                    <img src="/images/Frame 184.png" alt="Haye Travel" class="w-40 h-40 object-contain">
                </div>
            </div>  
        </div>
        
   </div>


   <div class="font-montserrat font-bold text-[42px]  ml-25 leading-[55px] mt-10">
    <h1 class="w-150">"See what our happy clients and partners have to say!"</h1>

   </div>

        
   <div>
    <div class="flex flex-wrap justify-between p-8 mt-10 mb-30 mr-20 ml-20">
        <!-- Card 1 -->
        <div class="flex flex-col rounded-3xl w-70 p-6 bg-gradient-to-b from-[#001e3d5b] via-[#2836184f] to-[#c0bebe] h-50 mt-20">
            <p class="py-2">Smooth, fast, and reliable! Rehlatna made planning my vacation effortless</p>
            <hr>
            <div class="flex my-2">
                <img src="/images/loving.png" alt="" class="w-8 h-8 m-2 rounded-full object-cover">
                <div>
                    <h3>Ahmed K</h3>
                    <p>Occupation</p>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col rounded-3xl w-70 p-6 bg-gradient-to-b from-[#001e3d5b] via-[#2836184f] to-[#c0bebe] h-50">
            <p class="py-2">Smooth, fast, and reliable! Rehlatna made planning my vacation effortless</p>
            <hr>
            <div class="flex my-2">
                <img src="/images/loving.png" alt="" class="w-8 h-8 m-2 rounded-full object-cover">
                <div>
                    <h3>Ahmed K</h3>
                    <p>Occupation</p>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col rounded-3xl w-70 p-6 bg-gradient-to-b from-[#001e3d5b] via-[#2836184f] to-[#c0bebe] h-50 mt-20">
            <p class="py-2">Smooth, fast, and reliable! Rehlatna made planning my vacation effortless</p>
            <hr>
            <div class="flex my-2">
                <img src="/images/loving.png" alt="" class="w-8 h-8 m-2 rounded-full object-cover">
                <div>
                    <h3>Ahmed K</h3>
                    <p>Occupation</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col rounded-3xl w-70 p-6 bg-gradient-to-b from-[#001e3d5b] via-[#2836184f] to-[#c0bebe] h-50 mt-20">
            <p class="py-2">Smooth, fast, and reliable! Rehlatna made planning my vacation effortless</p>
            <hr>
            <div class="flex my-2">
                <img src="/images/loving.png" alt="" class="w-8 h-8 m-2 rounded-full object-cover">
                <div>
                    <h3>Ahmed K</h3>
                    <p>Occupation</p>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col rounded-3xl w-70 p-6 bg-gradient-to-b from-[#001e3d5b] via-[#2836184f] to-[#c0bebe] h-50">
            <p class="py-2">Smooth, fast, and reliable! Rehlatna made planning my vacation effortless</p>
            <hr>
            <div class="flex my-2">
                <img src="/images/loving.png" alt="" class="w-8 h-8 m-2 rounded-full object-cover">
                <div>
                    <h3>Ahmed K</h3>
                    <p>Occupation</p>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col rounded-3xl w-70 p-6 bg-gradient-to-b from-[#001e3d5b] via-[#2836184f] to-[#c0bebe] h-50 mt-20">
            <p class="py-2">Smooth, fast, and reliable! Rehlatna made planning my vacation effortless</p>
            <hr>
            <div class="flex my-2">
                <img src="/images/loving.png" alt="" class="w-8 h-8 m-2 rounded-full object-cover">
                <div>
                    <h3>Ahmed K</h3>
                    <p>Occupation</p>
                </div>
            </div>
        </div>
    
    </div>
    
      
</div>



<footer class="h-100">
    <div class=" bg-[#001e3d7f] h-7/8">

    </div>
    <div class="bg-[#001e3de5] h-1/8">

    </div>
</footer>
        </div>
        
        

        <script>
            const images = [
                "/images/34483c3e7b353a9b663f9b481805e35b.jpg",
                "/images/ff5f578676e7e7df4067c3dcec91f7d2.jpg",
                "/images/7f147ec4d159e5baeb838604a36f5c6e.jpg"
            ];
            
            let currentIndex = 0;
            
            function changeBackground(direction) {
                if (direction === "next") {
                    currentIndex = (currentIndex + 1) % images.length;
                } else {
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                }
                
                document.getElementById("bg-container").style.backgroundImage = `url('${images[currentIndex]}')`;
            }
            
            document.getElementById("prevBtn").addEventListener("click", () => changeBackground("prev"));
            document.getElementById("nextBtn").addEventListener("click", () => changeBackground("next"));
            </script>
    </body>
</html>
