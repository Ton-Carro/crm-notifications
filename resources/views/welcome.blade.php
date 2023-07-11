<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Genie Insurance and Finance</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            <!-- @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif -->
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <svg width="200px" viewBox="0 0 94 36">
                <defs>
                    <polygon id="path-1" points="0.122776591 0.281012608 11.6750106 0.281012608 11.6750106 13.3700449 0.122776591 13.3700449 0.122776591 0.281012608"/>
                </defs>
                <g id="Loan/Financing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Financing_Version1" transform="translate(-60.000000, -14.000000)">
                        <g id="menu/nav-light">
                            <g id="logo/main" transform="translate(60.000000, 14.000000)">
                                <g id="Logo_headergenie">
                                    <g id="Group-3" transform="translate(62.000000, 0.000000)">
                                        <path d="M7.22913031,10.0574312 L16.8678025,15.4497354 C17.2813751,14.4068227 17.5372161,13.3372011 17.5564593,12.2720311 L9.42854192,7.72486772 L7.22913031,10.0574312 Z" id="Fill-1" fill="#25439B"/>
                                        <g id="Group-5">
                                            <mask id="mask-2" fill="white">
                                                <use xlink:href="#path-1"/>
                                            </mask>
                                            <g id="Clip-4"/>
                                            <path d="M8.54220135,0.280955083 C6.74757673,1.53731442 0.122776591,6.50896533 0.122776591,11.4190638 C0.122776591,12.0699661 0.234800199,12.7231694 0.433168651,13.3700449 L11.6750106,2.769513 C10.3682825,1.59829157 9.1645904,0.716423956 8.54220135,0.280955083" id="Fill-3" fill="#25439B" mask="url(#mask-2)"/>
                                        </g>
                                        <path d="M9.81096257,6.15501025 L16.5237264,9.65608466 C16.0126207,7.36468947 14.3283019,5.14097262 12.6176562,3.37962963 L9.81096257,6.15501025 Z" id="Fill-6" fill="#25439B"/>
                                    </g>
                                    <path d="M14.2090917,8 C17.4024879,8 20.1649686,8.90089617 22.174737,10.0643497 L22.174737,16.0698142 C19.98564,14.4932459 17.1511937,13.3674317 14.3164549,13.3674317 C9.07789267,13.3674317 5.70516783,17.2332678 5.70516783,22.0752787 C5.70516783,26.8040656 8.93454675,30.7828197 14.2804721,30.7828197 C15.4643925,30.7828197 16.6132077,30.5575956 17.4741608,30.1824262 L17.4741608,26.0910601 L12.9529133,26.0910601 L12.9529133,21.1367432 L23,21.1367432 L23,33.7480656 C20.667557,35.0991038 17.4024879,36 14.173109,36 C5.84851376,36 0,30.1071475 0,22.112612 C0,14.0804372 5.92047926,8 14.2090917,8" id="Fill-8" fill="#25439B"/>
                                    <path d="M32.0122048,27.9785547 C32.6676589,30.4920373 34.8256929,31.6381733 37.5235496,31.6381733 C39.6432493,31.6381733 41.9558775,30.935664 43.9593173,29.6421547 L43.9593173,34.3367014 C42.1098432,35.4454667 39.2580208,36 36.7527783,36 C30.5093107,36 26,32.266544 26,26.5738373 C26,20.7705253 30.701925,17 35.9433585,17 C40.6069491,17 45,19.9571093 45,26.0563733 C45,26.684744 44.9616657,27.4978586 44.8846828,27.9785547 L32.0122048,27.9785547 Z M31.9735563,24.4298426 L39.6046008,24.4298426 C39.2580208,22.4708933 37.7544982,21.2879893 35.8663756,21.2879893 C34.0546074,21.2879893 32.4750447,22.3599867 31.9735563,24.4298426 Z" id="Fill-10" fill="#25439B"/>
                                    <path d="M81.0121054,27.9785547 C81.6672345,30.4920373 83.825547,31.6381733 86.5233591,31.6381733 C88.6430237,31.6381733 90.9556136,30.935664 92.9593345,29.6421547 L92.9593345,34.3367014 C91.1092626,35.4454667 88.2578015,36 85.7526005,36 C79.5092361,36 75,32.266544 75,26.5738373 C75,20.7705253 79.7018472,17 84.9435082,17 C89.6070218,17 94,19.9571093 94,26.0563733 C94,26.684744 93.9613521,27.4978586 93.8843705,27.9785547 L81.0121054,27.9785547 Z M80.9737717,24.4298426 L88.6043758,24.4298426 C88.2578015,22.4708933 86.7546181,21.2879893 84.8665267,21.2879893 C83.0547884,21.2879893 81.4749376,22.3599867 80.9737717,24.4298426 Z" id="Fill-12" fill="#25439B"/>
                                    <path d="M70.8017593,21.9599152 C69.7786956,21.9599152 68.8216048,21.6975969 68,21.2420234 L68,36 L74,36 L74,21 C73.0966531,21.6036955 71.9934563,21.9599152 70.8017593,21.9599152" id="Fill-14" fill="#25439B"/>
                                    <path d="M63.1104412,19.7006966 C62.6557961,18.8893968 62.0139764,18.2724516 61.3228282,17.8396967 C60.8807893,17.5683394 60.396547,17.3585842 59.879419,17.2165914 L59.879419,17.2088911 C59.7399287,17.1719298 59.6020828,17.1414368 59.4675253,17.118644 C58.3400932,16.9279854 57.3927103,16.9350697 56.0422033,17.3792209 C54.9632776,17.8415448 53.9909564,18.5567453 53.2839134,19.1613701 C53.1594958,19.2685578 52.8816114,19.5565477 52.695533,19.7521344 C52.3820225,20.1300633 51.7234859,20.8310954 50.9980817,21.0439307 C49.2880241,21.6534836 48,20.8652846 48,20.8652846 L48,21.2752466 L48,36 L53.109071,36 L53.109071,23.4950788 C54.0167169,22.7019516 55.2603453,21.9464017 56.5713894,21.9464017 C57.2770622,21.9464017 57.8821595,22.1730975 58.3192656,22.7395289 C58.7226637,23.2686911 58.890655,23.9484704 58.890655,25.3462224 L58.890655,36 L64,36 L64,24.401862 C64,22.277513 63.7254042,20.8172349 63.1104412,19.7006966 M50.0649493,20.8521549 C49.9619074,20.853079 49.8654426,20.8509229 49.7736366,20.8459947 L50.2263634,20.8459947 C50.17265,20.8490748 50.1186626,20.8515389 50.0649493,20.8521549" id="Fill-16" fill="#25439B"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">Fast Approval</span></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Near instant approval for both financing and insurance needs.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">Better Service</span></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Get instant response and a much better service here than anywhere.
                        </div>
                    </div>
                </div>

                <div class="p-6  border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500" >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><span class="text-gray-900 dark:text-white">Online Ready</span></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            We are digital first, get everything you need at your fingertips.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
