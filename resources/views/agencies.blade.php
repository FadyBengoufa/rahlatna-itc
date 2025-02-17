<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Header</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>

        body {
            width: 100%;
            font-family: Montserrat, sans-serif;
            background-color:rgba(234, 237, 231, 1);
            
        }
        .agency-head {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            white-space: nowrap;
          
        }
        .agency-head img {
            width: 120px;
            height: 80px;
            object-fit: contain;
            
        }
        .agency-head h2 {
            font-size: 28px;
            font-weight: bold;
            color: #000;
            margin: 0;
        }
        .summary {
            margin-top: 20px;
            max-width: 400px;
            height: 300px;
            padding: 10px;
            gap: 10px;
            border-radius: 16px;
            background: rgba(40, 54, 24, 0.44);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center; 
            line-height: 3pc; 
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);/* Adjust this value for more or less spacing */
        }
.summary .inner-div {
             width: 100%; /* Ensure it fills the parent div */
            height: auto; /* Adjust height as needed */
        }

        .feedbacks {
            margin-top: 20px;
            text-align: center;
            max-width: 700px;
            height: 350px;
            padding: 10px;
            gap: 10px;
            border-radius: 16px;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center; 
            line-height: 1.5;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            position: relative; 
            padding-bottom: 40px;
            
        }
        .feedbacks h3 {
             margin-bottom: 5px;
            text-align: left; /* Aligns the heading to the left */
            width: 100%; /* Ensures it spans the entire div */
        }

        .feedbacks p {
            margin-top: 5px;
            margin-bottom: 5px;
            text-align: center;
            width: 100%;
            gap: 60px;
            padding: 10px 25px;
            background-color:rgba(40, 54, 24, 0.44 );
            display: flex;
            justify-content: center;
            border-radius: 16px;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.25);



        }
        .summary-feedback-container {
            display: flex;
            justify-content: center;
            gap: 100px; /* Keeps space between summary and feedbacks */
            align-items: flex-start; /* Aligns them at the top */
            position: relative; /* Allows span (stars) positioning */
        }

        .summary-container {
    display: flex;
    flex-direction: column;
    align-items: center; /* Centers everything */
}


.ratings {
    display: flex;
    align-items: center;
    justify-content:  flex-end;; 
    margin-top: 40px;
    
    padding-right: 10px; 
}


.ratings h4 {
        margin: 5px 0;
        font-size: 18px;
        font-weight: bold;
        color: #000;
    }
     
    .star {
        font-size: 30px;
        color:#00274d ;
        cursor: pointer;
        transition: color 0.3s ease-in-out;
    }

    .star.active,
    .star:hover {
        color: goldenrod; /* Active star color */
    }

    .agency1 {
    margin-top: 100px;
    margin-bottom: auto; /* Increase this value to add more space */
}
 .agency4 .agency-head img {
    width: 40px;
    height: 40px;
    object-fit: contain;
    }

.agency1, .agency2, .agency3, .agency4 {
    margin-bottom: 50px; /* Adjust this value for more spacing */
}
.agency1 .agency-head img {
    width: 200px; 
    height: 40px; 
    object-fit: contain;}
 
.agency3 .agency-head img{
    width: 250px; 
    height: 60px; 
    object-fit: contain;
}
@media (min-width: 768px) {
    .main {
      width: 750px;
    }
  }
@media (max-width: 800px) {
    .summary-feedback-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 100px; /* Keeps space between summary and feedbacks */
        }
    
        .agency-head h2 {
            font-size: 25px;
            width: 40px;
        }
        .agency-head  {
            flex-wrap: wrap;
        }
    
  }
  /* Medium */
  @media (min-width: 992px) {
    .main {
      width: 970px;
    }
  }
  /* Large */
  @media (min-width: 1200px) {
    .main {
      max-width: 1220px;
    }
  } 
  @media (min-width: 1400px) {
    .main {
      max-width:  1400px;
    }
  }

  
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


       /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        
</style>
</head>
<body class="w-full bg-[#EAEDE7]">
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
    <nav id="mobile-menu" class="z-40 capitalize hidden fixed top-20 max-[470px]:top-18 left-0 w-full h-[87%] bg-[#283618e0] items-center justify-center space-y-6 text-white text-xl ">
        <a href="{{route('agencies')}}">agencies</a>
        <a href="{{route('payment')}}">payments</a>
        <a href="{{route('features')}}">features</a>
        <a href="{{ route('home') }}">home</a>
    </nav>
  

    <div class="mx-10">
        <div class="agency1">
            <div class="agency-head ">
            <img src="/images/Fancyellow Algeria Travel Agency logo.png" alt="Agency 1"> 
            <h2 >Fancyellow Algeria Travel Agency</h2>
            </div>
            <div class="summary-feedback-container">
                <div class="summary-container">
                    <div class="summary">
                        <p>Certified and committed to high-quality service, Fancyellow offers private tours with professional drivers, ensuring an enjoyable and stress-free experience across Algeria's diverse landscapes.</p>
                    </div>
                    <div class="ratings">
                        <h4>Rate with us :</h4>
                        <span> ★ ★ ★ ★ ★</span> 
                    </div>
                </div>
                
                    <div class="feedbacks">
                        <h3>Some feedbacks</h3>
                        <p>Amazing experience! The guide was knowledgeable.</p>
                        <p>Loved the historical sites and cultural insights!</p>
                        <p>Perfect for adventure seekers and history lovers.</p>
                    </div>
                   
            </div>
                        
        </div>
    <div class="agency2">
            <div class="agency-head">
            <img src="/images/b4333ce42133008dcdbbaf22d5d4b4e3.png" alt="Agency 2"> 
            <h2>Adventure Algeria</h2>
        </div>
            <div class="summary-feedback-container">
                <div class="summary-container">
                    <div class="summary">
                        <p>Certified and committed to high-quality service, Fancyellow offers private tours with professional drivers, ensuring an enjoyable and stress-free experience across Algeria's diverse landscapes.</p>
                    </div>
                    <div class="ratings">
                        <h4>Rate with us :</h4>
                        <span> ★ ★ ★ ★ ★</span>
                        
                    </div>
                </div>
                
                    <div class="feedbacks">
                        <h3>Some feedbacks</h3>
                        <p>Amazing experience! The guide was knowledgeable and friendly.</p>
                        <p>Loved the historical sites and cultural insights!</p>
                        <p>Perfect for adventure seekers and history lovers.</p>
                    </div>
                    
            </div>
                        
        </div>
        <div class="agency3">
            <div class="agency-head">
            <img src="/images/IMG_20250217_072813_697.jpg" alt="Agency 3"> 
            <h2>LCC Bicha Travel Company </h2>
        </div>
            <div class="summary-feedback-container">
                <div class="summary-container">
                    <div class="summary">
                        <p>Certified and committed to high-quality service, Fancyellow offers private tours with professional drivers, ensuring an enjoyable and stress-free experience across Algeria's diverse landscapes.</p>
                    </div>
                    <div class="ratings">
                        <h4>Rate with us :</h4>
                        <span> ★ ★ ★ ★ ★</span> 
                    </div>
                </div>
                
                    <div class="feedbacks">
                        <h3>Some feedbacks</h3>
                        <p>The Sahara tour was breathtaking, highly recommended!</p>
                        <p>Very professional service with well-planned itineraries.</p>
                        <p>A fantastic way to explore Algeria’s desert beauty.</p>
                    </div>
                   
            </div>        
                        
        </div>
            
        <div class="agency4">
            <div class="agency-head">
            <img src="/images/IMG_20250217_072819_421.jpg" alt="Agency 4"> 
            <h2 > Mosaic North Africa </h2>
            </div>
            <div class="summary-feedback-container">
                <div class="summary-container">
                    <div class="summary">
                        <p>Certified and committed to high-quality service, Fancyellow offers private tours with professional drivers, ensuring an enjoyable and stress-free experience across Algeria's diverse landscapes.</p>
                    </div>
                    <div class="ratings">
                        <h4>Rate with us :</h4>
                        <span> ★ ★ ★ ★ ★</span> 
                    </div>
                </div>
                
                    <div class="feedbacks">
                        <h3>Some feedbacks</h3>
                        <p>Well-organized tours with deep cultural experiences.</p>
                        <p>A great mix of history, religion, and adventure!</p>
                        <p>Custom itineraries made my trip truly special.</p>
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
            rating.innerHTML = '<h4>Rate with us :</h4>' + 
                Array(5).fill(0).map((_, index) => 
                `<span class="star" data-index="${index + 1}">★</span>`).join(""); 
                

            const starsElements = rating.querySelectorAll(".star");starsElements.forEach(star => {
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
 
</script>

      
</body>
</html>
