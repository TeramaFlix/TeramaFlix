<header>
            <div class="headercontainer fixed hidden  lg:block shadow-lg  pl-6 min-h-min w-[100%] bg-white overflow-hidden right-0 lef-0 top-0 z-20">
            
            <nav class="flex sm:flex-row sm:sticky sm:top-0 flex-col sm:items-center sm:justify-center items-center justify-center space-y-2 pb-2 relative  ">
                <div class="logo flex-initial flex sm:items-center sm:justify-start sm:w-64 sm:h-full w-full items-center justify-center sm:static">
                    <img src="<?= base_url() ?>/logo/TeramaFlixpic.png" class="w-12 h-11 my-1  rounded-full " alt="logo">
                    <img src="<?= base_url() ?>/logo/TeramaFlixnam.png" class="w-[9rem] h-[1rem] my-1  " alt="logo">
                </div>
                    <div class="searchDiv sm:flex flex-1  sm:justify-center sm:items-center sm:w-64 sm:h-full hidden w-full items-center justify-center  ">
                        <input id="search" type="text" class=" min-w-min h-9 border-none ring-2 ring-blue-700 rounded-l-full pl-5 pr-5 " placeholder="recherche" name="search" >
                        <button class="bg-blue-500 h-10 hover:bg-blue-900 duration-1000  px-4 py-2   sm:mr-5 font-semibold rounded-r-full text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="buttons flex-initial sm:flex space-x-3 sm:items-center sm:justify-center items-center justify-center w-full sm:w-64 h-full  hidden">
                    <button 
                        class=" font-semibold rounded px-4 py-1.5  
                        bg-gradient-to-r from-[#0088ff] to-[#1fc812] duration-3000 
                         p-1 text-white hover:from-[#e5e4e7] hover:to-[#1fc812] transition-ease-in-out  "
                         onclick="Login()">Login</button>
                        <button 
                        class=" font-semibold rounded px-4 py-1.5  
                        bg-gradient-to-r from-[#0088ff] to-[#1fc812] duration-3000
                          p-1 text-white hover:from-[#eae9ec] hover:to-[#1fc812] transition-ease-in-out 
                           " onclick="Register()" >Register</button>
                        <button class="">
                            
                    </div>
                    <button class="navOpen block sm:hidden absolute left-3 bottom-6 mt-20 " onclick="Openbar()">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                          </svg>
                    </button> 
                </nav>
            </div>
        </header>
         <div id="searchedprop" class="absolute z-20 left-[40%] mt-14 w-[20%] sm:top-0 fixed  h-auto  overflow-hide bg-blue-100 rounded-md"></div>