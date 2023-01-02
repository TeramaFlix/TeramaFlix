
<div class="bg-black bg-opacity-50 h-full  fixed inset-0 hidden justify-center items-center z-30" id="Login">
        <div class="relative max-h-screen ml-50 bg-white lg:w-4/12 rounded-lg">
            <div class="m-auto py-1 px-1 sm:p-21  w-10/12">
                <div class="space-y-4 items-center pt-6 ">
                   <div class="px-40 flex flex-row  items-center ">
                    <img src="<?= base_url() ?>/img/Teramalogo.png" class="w-11 h-11 " alt="logo">
                    <button class="text-slate-600 cursor-pointer ml-36 text-lg rounded-full bg-gray-200 p-2" onclick="CloseLogging()">X</button>
                   </div>
                    <p class="font-medium text-lg text-gray-600 text-center ">Welcome to TeramaFLix ! Login first</p>
                </div>
                
                <div class="mt-12 grid gap-6 sm:grid-cols-2">
                    <button class="h-10 py-3 px-6 rounded-xl bg-cyan-500 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                           
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Facebook</span>
                        </div>
                    </button>
                    <button class="h-10 py-3 px-6 rounded-xl bg-gray-900 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Github</span>
                        </div>
                    </button>
                </div>

                <div role="hidden" class="mt-12 border-t">
                    <span class="block w-max mx-auto -mt-3 px-4 text-center text-gray-500 bg-white">Or</span>
                </div>
  
                <form id="login_form" action="<?= base_url() ?>/login" enctype="multipart/form-data" class="space-y-6 py-6" novalidate>
                    <div>
                        <input 
                                type="text" 
                                placeholder="Your Email"
                                name="mail"
                                id="Email"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                              
                        >
                     
                        <div class="invalid-feedback">email is required</div>
                    </div>
                    <span id="spn1"></span>     
                    <div class="flex flex-col items-end">
                        <input 
                                type="password"
                                placeholder="Password"
                                name="pass"
                                id="passw"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"  
                                
                                
                        >
                      
                        <div class="invalid-feedback">password is required</div>
                         </div>
                         <span id="spn2"></span>
                         <div>
                        <button type="reset" class="w-max p-3 -mr-3">
                            <span class="text-sm tracking-wide text-blue-600">Forgot password ?</span>
                        </button>
                    </div>
                   
                    <div>
                    <button id="login_btn" class="w-full px-6 py-3 rounded-xl   bg-gradient-to-r from-[#0088ff] to-[#1fc812] duration-3000">
                      <span class="font-semibold text-white text-lg ">Login</span>
                    </button>
                    <span class="text-sm tracking-wide text-blue-600" onclick="create()">Create new account</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
    <div class="bg-black bg-opacity-50  h-full  fixed inset-0 hidden justify-center items-center z-30 " id="Register" >

        <div class="relative max-h-screen ml-50 overflow-scroll bg-white lg:w-3/6 rounded-lg">
            <div class="m-auto py-1 px-1 sm:p-21  w-10/12">
                <div class="space-y-4 items-center pt-6 ">
                   <div class="px-64 flex flex-row  items-center ">
                    <img src="<?= base_url() ?>/img/Teramalogo.png" class="w-11 h-11 " alt="logo">
                    <button class="text-slate-600 cursor-pointer ml-56 text-lg rounded-full bg-gray-200 p-2" onclick="CloseRegister()">X</button>
                   </div>
                    <p class="font-medium text-lg text-gray-600 text-center ">Welcome to Registration!</p>
                </div>
                
                <div class="mt-12 grid gap-6 sm:grid-cols-2">
                    <button class="h-10 py-3 px-6 rounded-xl bg-cyan-500 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                           
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Facebook</span>
                        </div>
                    </button>
                    <button class="h-10 py-1 px-6 rounded-xl bg-gray-900 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Github</span>
                        </div>
                    </button>
                </div>

                <div role="hidden" class="mt-12 border-t">
                    <span class="block w-max mx-auto -mt-3 px-4 text-center text-gray-500 bg-white">Or</span>
                </div>

                <form id="register_form" action="" enctype="multipart/form-data" class="space-y-1 py-1" novalidate>
                    <!-- nom et prenom-->
                    <div class="flex items-center justify-center">
                        <div class="w-9/12 py-3">
                          <input type="text" name="nom" 
                           placeholder="Your FirstName" 
                          id="nom"
                           class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Your FirstName is required</div>
                          <span id="span1"></span>
                        </div>
                        <div class="w-9/12">
                          <input type="text" name="prenom" 
                          placeholder="Your LastName"
                         id="prenom"
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Your LastName is required</div>
                          <span id="span2"></span>
                        </div>
                      </div>
                      <!-- password et confirmer-->
                      <div class="flex flex-row items-center justify-center">
                        <div class="w-full py-3">
                          <input type="text" name="password" placeholder="Password "
                         id="pass"
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Password is required</div>
                          <span id="spn3"></span>
                        </div>
                        <div class="w-full py-3">
                          <input type="text" id="confpass" name="cpassword" placeholder="Confirm" 
                          
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Password is required</div>
                          <span id="spn4"></span>
                        </div>
                      </div>
                      <!-- mail et telephone-->
                      <div class="flex flex-row items-center justify-center">
                        <div class="w-full py-3">
                          <input type="mail" name="mail" placeholder="mail " id="mail"
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <span id="spn5"></span>
                        </div>
                       
                        <div class="w-full py-3">
                        <div class="flex">
                            <button id="states-button" data-dropdown-toggle="dropdown-states" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-1 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                                <svg aria-hidden="true" class="h-3 mr-2" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" width="14" height="12" rx="2" fill="white"/><mask id="mask0_12694_49953" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="12"><rect x="0.5" width="14" height="12" rx="2" fill="white"/></mask><g mask="url(#mask0_12694_49953)"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 0H0.5V0.8H14.5V0ZM14.5 1.6H0.5V2.4H14.5V1.6ZM0.5 3.2H14.5V4H0.5V3.2ZM14.5 4.8H0.5V5.6H14.5V4.8ZM0.5 6.4H14.5V7.2H0.5V6.4ZM14.5 8H0.5V8.8H14.5V8ZM0.5 9.6H14.5V10.4H0.5V9.6ZM14.5 11.2H0.5V12H14.5V11.2Z" fill="#D02F44"/><rect x="0.5" width="6" height="5.6" fill="#46467F"/><g filter="url(#filter0_d_12694_49953)"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.83317 1.20005C1.83317 1.42096 1.68393 1.60005 1.49984 1.60005C1.31574 1.60005 1.1665 1.42096 1.1665 1.20005C1.1665 0.979135 1.31574 0.800049 1.49984 0.800049C1.68393 0.800049 1.83317 0.979135 1.83317 1.20005ZM3.1665 1.20005C3.1665 1.42096 3.01727 1.60005 2.83317 1.60005C2.64908 1.60005 2.49984 1.42096 2.49984 1.20005C2.49984 0.979135 2.64908 0.800049 2.83317 0.800049C3.01727 0.800049 3.1665 0.979135 3.1665 1.20005ZM4.1665 1.60005C4.3506 1.60005 4.49984 1.42096 4.49984 1.20005C4.49984 0.979135 4.3506 0.800049 4.1665 0.800049C3.98241 0.800049 3.83317 0.979135 3.83317 1.20005C3.83317 1.42096 3.98241 1.60005 4.1665 1.60005ZM5.83317 1.20005C5.83317 1.42096 5.68393 1.60005 5.49984 1.60005C5.31574 1.60005 5.1665 1.42096 5.1665 1.20005C5.1665 0.979135 5.31574 0.800049 5.49984 0.800049C5.68393 0.800049 5.83317 0.979135 5.83317 1.20005ZM2.1665 2.40005C2.3506 2.40005 2.49984 2.22096 2.49984 2.00005C2.49984 1.77913 2.3506 1.60005 2.1665 1.60005C1.98241 1.60005 1.83317 1.77913 1.83317 2.00005C1.83317 2.22096 1.98241 2.40005 2.1665 2.40005ZM3.83317 2.00005C3.83317 2.22096 3.68393 2.40005 3.49984 2.40005C3.31574 2.40005 3.1665 2.22096 3.1665 2.00005C3.1665 1.77913 3.31574 1.60005 3.49984 1.60005C3.68393 1.60005 3.83317 1.77913 3.83317 2.00005ZM4.83317 2.40005C5.01726 2.40005 5.1665 2.22096 5.1665 2.00005C5.1665 1.77913 5.01726 1.60005 4.83317 1.60005C4.64908 1.60005 4.49984 1.77913 4.49984 2.00005C4.49984 2.22096 4.64908 2.40005 4.83317 2.40005ZM5.83317 2.80005C5.83317 3.02096 5.68393 3.20005 5.49984 3.20005C5.31574 3.20005 5.1665 3.02096 5.1665 2.80005C5.1665 2.57914 5.31574 2.40005 5.49984 2.40005C5.68393 2.40005 5.83317 2.57914 5.83317 2.80005ZM4.1665 3.20005C4.3506 3.20005 4.49984 3.02096 4.49984 2.80005C4.49984 2.57914 4.3506 2.40005 4.1665 2.40005C3.98241 2.40005 3.83317 2.57914 3.83317 2.80005C3.83317 3.02096 3.98241 3.20005 4.1665 3.20005ZM3.1665 2.80005C3.1665 3.02096 3.01727 3.20005 2.83317 3.20005C2.64908 3.20005 2.49984 3.02096 2.49984 2.80005C2.49984 2.57914 2.64908 2.40005 2.83317 2.40005C3.01727 2.40005 3.1665 2.57914 3.1665 2.80005ZM1.49984 3.20005C1.68393 3.20005 1.83317 3.02096 1.83317 2.80005C1.83317 2.57914 1.68393 2.40005 1.49984 2.40005C1.31574 2.40005 1.1665 2.57914 1.1665 2.80005C1.1665 3.02096 1.31574 3.20005 1.49984 3.20005ZM2.49984 3.60005C2.49984 3.82096 2.3506 4.00005 2.1665 4.00005C1.98241 4.00005 1.83317 3.82096 1.83317 3.60005C1.83317 3.37913 1.98241 3.20005 2.1665 3.20005C2.3506 3.20005 2.49984 3.37913 2.49984 3.60005ZM3.49984 4.00005C3.68393 4.00005 3.83317 3.82096 3.83317 3.60005C3.83317 3.37913 3.68393 3.20005 3.49984 3.20005C3.31574 3.20005 3.1665 3.37913 3.1665 3.60005C3.1665 3.82096 3.31574 4.00005 3.49984 4.00005ZM5.1665 3.60005C5.1665 3.82096 5.01726 4.00005 4.83317 4.00005C4.64908 4.00005 4.49984 3.82096 4.49984 3.60005C4.49984 3.37913 4.64908 3.20005 4.83317 3.20005C5.01726 3.20005 5.1665 3.37913 5.1665 3.60005ZM5.49984 4.80005C5.68393 4.80005 5.83317 4.62096 5.83317 4.40005C5.83317 4.17913 5.68393 4.00005 5.49984 4.00005C5.31574 4.00005 5.1665 4.17913 5.1665 4.40005C5.1665 4.62096 5.31574 4.80005 5.49984 4.80005ZM4.49984 4.40005C4.49984 4.62096 4.3506 4.80005 4.1665 4.80005C3.98241 4.80005 3.83317 4.62096 3.83317 4.40005C3.83317 4.17913 3.98241 4.00005 4.1665 4.00005C4.3506 4.00005 4.49984 4.17913 4.49984 4.40005ZM2.83317 4.80005C3.01727 4.80005 3.1665 4.62096 3.1665 4.40005C3.1665 4.17913 3.01727 4.00005 2.83317 4.00005C2.64908 4.00005 2.49984 4.17913 2.49984 4.40005C2.49984 4.62096 2.64908 4.80005 2.83317 4.80005ZM1.83317 4.40005C1.83317 4.62096 1.68393 4.80005 1.49984 4.80005C1.31574 4.80005 1.1665 4.62096 1.1665 4.40005C1.1665 4.17913 1.31574 4.00005 1.49984 4.00005C1.68393 4.00005 1.83317 4.17913 1.83317 4.40005Z" fill="url(#paint0_linear_12694_49953)"/></g></g><defs><filter id="filter0_d_12694_49953" x="1.1665" y="0.800049" width="4.6665" height="5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="1"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12694_49953"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12694_49953" result="shape"/></filter><linearGradient id="paint0_linear_12694_49953" x1="1.1665" y1="0.800049" x2="1.1665" y2="4.80005" gradientUnits="userSpaceOnUse"><stop stop-color="white"/><stop offset="1" stop-color="#F0F0F0"/></linearGradient></defs></svg>
                                BUR <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div id="dropdown-states" class="z-10  hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="states-button">
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="inline-flex items-center">
                                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>              
                                                United States
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="inline-flex items-center">
                                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512"><path fill="#ffce00" d="M0 341.3h512V512H0z"/><path d="M0 0h512v170.7H0z"/><path fill="#d00" d="M0 170.7h512v170.6H0z"/></svg>
                                                Germany
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="inline-flex items-center">
                                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512"><g fill-rule="evenodd" stroke-width="1pt"><path fill="#fff" d="M0 0h512v512H0z"/><path fill="#009246" d="M0 0h170.7v512H0z"/><path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/></g></svg>              
                                                Italy
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="inline-flex items-center">
                                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512"><defs><path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/></defs><path fill="#de2910" d="M0 0h512v512H0z"/><use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/><use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/></svg>
                                                China
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <input type="tel" id="phone" name="phone" placeholder="   telephone number " id="phone"
                                                class="h-10 w-4/6 rounded-r-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                                               
                            
                        </div>
                        <span id="spn6"></span>
                        </div>
                        
                      </div>
                      <!-- sexe et naissance-->
                      <div class="flex flex-row items-center justify-center">
                        <div class="w-full py-3">
                        <label for="countries" class="block mb-2 text-sm font-medium text-cyan-500 dark:text-white">Select Your Gender</label>
                            <select name="sexe" id="countries" class="h-10 w-11/12 rounded-xl  bg-gray-50 italic border border-cyan-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                          <div class="invalid-feedback">Sexe is required</div>
                          <span id="spn7"></span>
                        </div>
                        <div class="w-full py-3">
                        <label for="date" class="block mb-2 text-sm font-medium text-cyan-500 dark:text-white">Date de Naissance</label>
                          <input type="date" id="naissance" name="naissance" placeholder="date de naissance" id="naissance"
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">birth day is required</div>
                          <span id="spn8"></span>
                        </div>
                      </div>
                      <!-- sign up-->
                      <div class="flex flex-col items-center justify-center">
                        <button id="register_btn" class="h-10 w-2/6 rounded-xl bg-gradient-to-r from-[#0088ff] to-[#1fc812] py-3 px-6 transition hover:bg-gray-800 focus:bg-gray-700 active:bg-gray-600">
                          <div class="flex items-center justify-center text-white">
                            <span class="block w-max text-sm font-medium tracking-wide text-white">Sign Up</span>
                          </div>
                        </button>
                      </div>
                </form>
                
            </div>
        </div>
       
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       
       <script>
    
        function dropDown() {
            document.querySelector('.submenu').classList.toggle('hidden')
          document.querySelector('#arrow').classList.toggle('rotate-0')
        }
         function dropDown1() {
            document.querySelector('.submenu1').classList.toggle('hidden')
          document.querySelector('#arrow1').classList.toggle('rotate-0')
        }
        function dropDown2() {
            document.querySelector('.submenu2').classList.toggle('hidden')
          document.querySelector('#arrow2').classList.toggle('rotate-0')
        }
    
        function Openbar() {
          document.querySelector('.sideMenubar-Main').classList.toggle('hidden')
        }
        function Login(){
          
            var overlay=document.querySelector('#Login');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
            
        }
        function Register()
        {
            var overlay=document.querySelector('#Register');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
        }
        function CloseLogging(){
            var overlay=document.querySelector('#Login');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');

        }
        function CloseRegister()
        {
            var overlay=document.querySelector('#Register');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
        }
        function create() {
          CloseLogging()
          Register()
        }
      </script>
      <script type="text/javascript">
    $(document).ready(function(){
        var value;
        $(document).on('keyup','#search', function(){
            value = $(this).val()
            if (value != '') {
                $.ajax({
                    url: '<?= base_url('post/search') ?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('#searchedprop').html(data)
                    }
                })
            } else {
                $('#searchedprop').html('')
            }
      });
      $(document).on('click','.searched', function(){
        if (value != '') {
                $.ajax({
                    url: '<?= base_url('post/searched') ?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('.filmcontainer').html(data)
                        $('#searchedprop').html('')
                    }
                })
            } else {
            }
      });
      $(document).on('click','#searchbtn', function(){
        if (value != '') {
                $.ajax({
                    url: '<?= base_url('post/searched') ?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('.filmcontainer').html(data)
                        $('#searchedprop').html('')
                    }
                })
            } else {
            }
      });
      
    });
    //add new teramaflix user
    $(function(){
        $('#register_form').submit(function (e) { 
            e.preventDefault();
            const values = new FormData(this)
            if(!this.checkValidity()){
                e.preventDefault();
                $(this).addClass('was-validated');
            }
            else if(($('#nom').val().length!=0 )&&($('#prenom').val().length!=0)&&
                ($('#pass').val().length!=0)&&($('#confpass').val().length!=0)
                &&(($('#mail').val().length!=0)||($('#phone').val().length!=0))
                &&($('#naissance').val().length!=0)&&($("#countries").val()!='Choose your Gender')){
                $('#register_btn').text("Registing...")
            //$(location).prop("href", "http://localhost/TeramaFlix/");
                $.ajax({ 
                    url: '<?= base_url('/SignUp') ?>',
                    method: 'post',
                    data: values,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success:function(response){
                        if (response.error) {
                            Swal.fire(
                                    'Unloged!',
                                    response.message,
                                    'error'
                            )
                            $("#register_btn").text('Sign Up')
                            alert("yes");
                        }else{
                            var overlay=document.querySelector('#Register');
                            overlay.classList.toggle('hidden');
                            overlay.classList.toggle('flex');
                            $("#register_form")[0].reset()
                            $("#register_form").removeClass('was-validated')
                            Swal.fire(
                                    'Loged!',
                                    response.message,
                                    'success'
                            )
                           // Login()
                            //console.log(response.sms.ID);
                            //console.log(response.sms);
                            $(location).prop("href","<?= base_url('dashb')?>");
                            $("#register_btn").text('Sign Up')
                            
                            }
                        }
                });
            }


        else {
             if(($('#nom').val().length==0 )){
                    $('#nom').css("border","1px solid red");
                    $('#span1').css('color','red'); 
                    $('#span1').text("name is required") ; 
                }
                else{
                    $('#nom').css("border","1px solid black");
                }
                if(($('#prenom').val().length==0 )){
                    $('#prenom').css("border","1px solid red");
                    $('#span2').css('color','red'); 
                    $('#span2').text("Firstname is required") ; 
                }
                else{
                    $('#prenom').css("border","1px solid black");
                }
                if(($('#pass').val().length==0 )){
                    $('#pass').css("border","1px solid red");
                    $('#spn3').css('color','red'); 
                    $('#spn3').text("Password is required") ; 
                }
                else{
                    $('#pass').css("border","1px solid black");
                }
                if(($('#confpass').val().length==0 )){
                    $('#confpass').css("border","1px solid red");
                    $('#spn4').css('color','red'); 
                    $('#spn4').text("Confirm your password") ; 
                }
                else{
                    $('#confpass').css("border","1px solid black");
                }

                if((($('#mail').val().length==0)||($('#phone').val().length==0))){
                    $('#mail').css("border","1px solid red");
                    $('#spn5').css('color','red'); 
                    $('#spn5').text("complete Mail or phone") ; 
                    $('#phone').css("border","1px solid red");
                    $('#spn6').css('color','red'); 
                    $('#spn6').text("complete Mail or phone") ; 
                }
                else{
                    $('#phone').css("border","1px solid black");
                    $('#mail').css("border","1px solid black");
                }
      
                if(($('#naissance').val().length==0 )){
                    $('#naissance').css("border","1px solid red");
                    $('#spn8').css('color','red'); 
                    $('#spn8').text("name is required") ; 
                }
                else{
                    $('#naissance').css("border","1px solid black");
                } 
                 
                if(($("#countries").val()=='Choose your Gender')){
                    $('#countries').css("border","1px solid red");
                    $('#spn7').css('color','red'); 
                    $('#spn7').text("name is required") ; 
                }
                else{
                    $('#countries').css("border","1px solid black");
                } 
            }
        });
    })
    //user login handle request
    $(function(){
        $('#login_form').submit(function (e) { 
            e.preventDefault();
            const formData = new FormData(this);
            if(!this.checkValidity()){
                e.preventDefault()
                $(this).addClass('was-validated');
            }else{
  var valid= true;
  $('#Email').css("border","1px solid black");

  if(($('#Email').val().length==0 )&&($('#passw').val().length==0)){
    $('#passw').css("border","1px solid red");valid =false;
    $('#Email').css("border","1px solid red");valid =false;
    $('#spn1').css('color','red');
    $('#spn2').css('color','red');
    $('#spn1').text("mail is required") ;
    $('#spn2').text("Password is required") ;
  }

 else if(($('#Email').val().length==0 )){
$('#spn1').css('color','red');
 $('#spn1').text("mail is required") ;
 $('#Email').css("border","1px solid red");valid =false;
  }
  
 else if($('#passw').val().length==0){
 $('#spn2').css('color','red');
 $('#spn2').text("Password is required") ;
 $('#passw').css("border","1px solid red");valid =false;
  }
  else{
    $("#login_btn").text('connecting...')
    $.ajax({
                    url: '<?= base_url('/login') ?>',
                    method: 'post',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success:function(response){
                        if (response.error) {
                            Swal.fire(
                                    'Unloged!',
                                    response.message,
                                    'error'
                            )
                            $("#login_btn").text('Login')
                            $('#Email').css("border","1px solid black");
                            $('#passw').css("border","1px solid black");
                            $('#spn1').text("") ;
                          $('#spn2').text("") ;
                        }else{
                            var overlay=document.querySelector('#Login');
                            overlay.classList.toggle('hidden');
                            overlay.classList.toggle('flex');
                            $("#login_form")[0].reset()
                            $("#login_form").removeClass('was-validated')
                            Swal.fire(
                                    'Loged!',
                                    response.message,
                                    'success'
                            )
                           
                            //console.log(response.sms.ID);
                            console.log(response.sms);
                            $(location).prop("href","<?= base_url('dashb')?>");
                            $('#session').val(response.sms.ID);
                            $('.buttons').hide();
                            $("#login_btn").text('Login')
                            }
                        }

                });
  }



 }
});
});

   
    $(function(){
        $('#session').change(function (e) { 
            e.preventDefault();
            
        });
    })
    
  </script>
       