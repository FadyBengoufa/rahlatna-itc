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

nav a {
  position: relative;
  text-decoration: none;
  padding-bottom: 7px; /* To give space for the border */
}

nav a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: white; /* Adjust the color if needed */
  transition: width 0.3s ease-in-out;
}

nav a:hover::after {
  width: 100%;
}

#nav-menu {
    transition: transform 0.3s ease, opacity 0.3s ease;
    opacity: 0;
    pointer-events: none;
}

#nav-menu.show {
    opacity: 1;
    pointer-events: auto;
}

    .star {
        font-size: 20px;
        color:#00274d ;
        cursor: pointer;
        transition: color 0.3s ease-in-out;
    }

    .star.active,
    .star:hover {
        color: goldenrod; /* Active star color */
    }

        </style>
    </head>
    <body class="w-full bg-[#EAEDE7] ">
   
        <header class="text-white font-inter  text-[18px] font-semibold flex justify-between bg-[#2836186E] p-5 relative">
            <div class="logo">
                <img src="/images/logo.svg" alt="logo" class="w-20 h-20">
            </div>
            <nav class="max-[1029px]:hidden capitalize">
                <ul class="nav_links flex space-x-14">
                    <li><a href="{{route('agencies')}}">agencies</a></li>
                    <li><a href="{{route('payment')}}">payments</a></li>
                    <a href="{{route('features')}}">features</a>
                    <li><a href="{{ route('home') }}">home</a></li>
                </ul>
            </nav>
        
            <div class="capitalize">
                <a href="{{ route('login') }}" class="py-1.5 px-3 rounded mr-5 max-[470px]:mr-2 max-[470px]:px-2 max-[470px]:py-1 max-[470px]:text-[13px]" style="border: white 2px solid ">login</a>
                <a href="{{ route('register') }}" class="bg-[#003566] py-2 px-3 max-[470px]:mr-2 rounded mr-5 max-[470px]:px-2 max-[470px]:py-1 max-[470px]:text-[13px]">sign up</a>
                <button id="menu-btn" class="min-[1029px]:hidden relative top-3 max-[470px]:top-1">
                    <img src="/images/menu.png" alt="" class="w-8 h-8 max-[470px]:h-5 max-[470px]:w-5">
                </button>
            </div>
        </header>
        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="capitalize hidden fixed top-20 max-[470px]:top-18 left-0 w-full h-[87%] bg-[#283618e0] items-center justify-center space-y-6 text-white text-xl ">
            <a href="{{route('agencies')}}">agencies</a>
            <a href="{{route('payment')}}">payments</a>
            <a href="{{route('features')}}">features</a>
            <a href="{{ route('home') }}">home</a>
        </nav>

        <div class="container mx-auto overflow-x-hidden mb-10">
            <div class="absolute top-[60%] left-0 flex justify-between w-full ">
                <button><img src="/images/lucide_chevrons-right.png" alt="" id="scrollLeft"></button>
                <button><img src="/images/lucide.png" alt="" id="scrollRight"></button>
            </div>
            <div class="font-montserrat font-bold text-[28px] leading-[48.76px] ml-10 mt-5 mb-10">
                <h1>Algeria</h1>
            </div>
            
            <div class="flex gap-x-25 mx-10 w-[94%] max-[870px]:w-[91%] max-[690px]:w-[85%] max-[520px]:w-[78%] overflow-x-hidden overflow-y-hidden " id="cardsContainer">
                {{-- cart --}}
                    <div class="flex flex-col gap-y-5 "  >
                        <a href=""><img src="/images/1d38e6675d566beab218126819c588d4.jpg" 
                            alt="" class="rounded w-55 aspect-[4/4]"></a>
                        <div class="px-3 py-2 bg-[#283618CF] rounded w-25 text-white font-bold"><p>Tipaza</p></div>
                        <p class="px-6 py-3 w-55 min-h-50 bg-[#28361870] rounded-xl">A coastal town, boasts impressive Roman ruins—temples, a theater, and basilicas—set against stunning seaside views, perfect for history and nature lovers.</p>
                        <div class="flex justify-between ">
                            <div class="ratings ">
                                <span> ★ ★ ★ ★ ★</span> 
                            </div>
                            <div>
                                <img src="/images/fluent_person-feedback-24-filled.png" alt="" class="w-8 h-8">
                            </div>
                        </div>
                        <div class="flex justify-between ">
                            <div class="bg-[#28361870] rounded-xl h-20 w-25">
                                   
                            </div >
                            <div class="flex gap-x-2 h-5 mt-15">
                                <button><img src="/images/fontisto_yacht.png" alt=""></button>
                                <button><img src="/images/arcticons_viabus.png" alt=""></button>
                                <button><img src="/images/material-symbols_flight-rounded.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                
        
                    <div class="flex flex-col gap-y-5 "  >
                        <a href=""><img src="/images/11d37031c8e3e9a10d8511a357515421.jpg" 
                            alt="" class="rounded w-55 aspect-[4/4]"></a>
                        <div class="px-3 py-2 bg-[#283618CF] rounded w-28 text-white font-bold"><p>algeirs</p></div>
                        <p class="px-6 py-3 w-55 min-h-50 bg-[#28361870] rounded-xl">the "White City," shines with stunning sea views, charming old streets, and a rich mix of history and culture.</p>
                        <div class="flex justify-between ">
                            <div class="ratings ">
                                <span> ★ ★ ★ ★ ★</span> 
                            </div>
                            <div>
                                <img src="/images/fluent_person-feedback-24-filled.png" alt="" class="w-8 h-8">
                            </div>
                        </div>
                        <div class="flex justify-between ">
                            <div class="bg-[#28361870] rounded-xl h-20 w-25">
                                   
                            </div >
                            <div class="flex gap-x-2 h-5 mt-15">
                                <button><img src="/images/fontisto_yacht.png" alt=""></button>
                                <button><img src="/images/arcticons_viabus.png" alt=""></button>
                                <button><img src="/images/material-symbols_flight-rounded.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                
        
                    <div class="flex flex-col gap-y-5 "  >
                        <a href=""><img src="/images/1d38e6675d566beab218126819c588d4.jpg" 
                            alt="" class="rounded w-55 aspect-[4/4]"></a>
                        <div class="px-3 py-2 bg-[#283618CF] rounded w-28 text-white font-bold"><p>constanine</p></div>
                        <p class="px-6 py-3 w-55 min-h-50 bg-[#28361870] rounded-xl">Known as the “City of Bridges,” Constantine is perched over deep ravines, connected by several striking bridges.</p>
                        <div class="flex justify-between ">
                            <div class="ratings ">
                                <span> ★ ★ ★ ★ ★</span> 
                            </div>
                            <div>
                                <img src="/images/fluent_person-feedback-24-filled.png" alt="" class="w-8 h-8">
                            </div>
                        </div>
                        <div class="flex justify-between ">
                            <div class="bg-[#28361870] rounded-xl h-20 w-25">
                                   
                            </div >
                            <div class="flex gap-x-2 h-5 mt-15">
                                <button><img src="/images/fontisto_yacht.png" alt=""></button>
                                <button><img src="/images/arcticons_viabus.png" alt=""></button>
                                <button><img src="/images/material-symbols_flight-rounded.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                
        
                    <div class="flex flex-col gap-y-5 "  >
                        <a href=""><img src="/images/021cfa50bae1308922ec0687a487eaa0.jpg" 
                            alt="" class="rounded w-55 aspect-[4/4]"></a>
                        <div class="px-3 py-2 bg-[#283618CF] rounded w-28 text-white font-bold"><p>Timgad</p></div>
                        <p class="px-6 py-3 w-55 min-h-50 bg-[#28361870] rounded-xl">North Africa’s Pompeii, a 50-hectare gem, showcases grand Roman ruins—temples, theaters, and arches—whispering the empire’s glory</p>
                        <div class="flex justify-between ">
                            <div class="ratings ">
                                <span> ★ ★ ★ ★ ★</span> 
                            </div>
                            <div>
                                <img src="/images/fluent_person-feedback-24-filled.png" alt="" class="w-8 h-8">
                            </div>
                        </div>
                        <div class="flex justify-between ">
                            <div class="bg-[#28361870] rounded-xl h-20 w-25">
                                   
                            </div >
                            <div class="flex gap-x-2 h-5 mt-15">
                                <button><img src="/images/fontisto_yacht.png" alt=""></button>
                                <button><img src="/images/arcticons_viabus.png" alt=""></button>
                                <button><img src="/images/material-symbols_flight-rounded.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                
        
        
            </div>
        </div>

 <script>
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
    if (mobileMenu.classList.contains("flex") && mobileMenu.classList.contains("flex-col")) {
        // Remove the classes and hide the menu
        mobileMenu.classList.remove("flex", "flex-col");
        mobileMenu.classList.add("hidden");
    } else {
        // Add the classes and show the menu
        mobileMenu.classList.add("flex", "flex-col");
        mobileMenu.classList.remove("hidden");
    }
});

        
    document.addEventListener("click", (event) => {
    if (!menuBtn.contains(event.target) && !mobileMenu.contains(event.target)) {
        mobileMenu.classList.add("hidden");
    }
});



document.addEventListener("DOMContentLoaded", function () {
        const ratings = document.querySelectorAll(".ratings");

        ratings.forEach(rating => {
            rating.innerHTML = 
            Array(5).fill(0).map((_, index) => 
            `<span class="star" data-index="${index + 1}">★</span>`).join(""); 

            const starsElements = rating.querySelectorAll(".star");

            starsElements.forEach(star => {
                star.addEventListener("click", function () {
                    const index = parseInt(this.getAttribute("data-index"));
                    starsElements.forEach((s, i) => {
                        s.classList.toggle("active", i < index);
                    });
                });

                star.addEventListener("mouseover", function () {
                    const index = parseInt(this.getAttribute("data-index"));
                    starsElements.forEach((s, i) => {
                        s.classList.toggle("active", i < index);
                    });
                });

                star.addEventListener("mouseleave", function () {
                    const activeStars = rating.querySelectorAll(".star.active").length;
                    starsElements.forEach((s, i) => {
                        s.classList.toggle("active", i < activeStars);
                    });
                });
            });
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
        const scrollContainer = document.getElementById("cardsContainer");
        const scrollLeftBtn = document.getElementById("scrollLeft");
        const scrollRightBtn = document.getElementById("scrollRight");

        const scrollAmount = 240; 
        scrollLeftBtn.addEventListener("click", function () {
            scrollContainer.scrollLeft -= scrollAmount;
        });

        scrollRightBtn.addEventListener("click", function () {
            scrollContainer.scrollLeft += scrollAmount;
        });
    });
 </script>

</body>
</html>