<header>
            <div class="headercontainer fixed hidden  lg:block shadow-lg  pl-6 min-h-min w-[100%] bg-white overflow-hidden right-0 lef-0 top-0 z-20">
            
            <nav class="flex sm:flex-row sm:sticky sm:top-0 flex-col sm:items-center sm:justify-center items-center justify-center space-y-2 pb-2 relative  ">
                <div class="logo flex-initial flex sm:items-center sm:justify-start sm:w-64 sm:h-full w-full items-center justify-center sm:static">
                    <img src="<?= base_url() ?>/logo/TeramaFlixpic.png" class="w-12 h-11 my-1  rounded-full " alt="logo">
                    <img src="<?= base_url('/logo/TeramaFlixnam.png') ?>" class="w-[9rem] h-[1rem] my-1  " alt="logo">
                </div>
                    <div class="searchDiv sm:flex flex-1  sm:justify-center sm:items-center sm:w-64 sm:h-full hidden w-full items-center justify-center  ">
                        <input id="search" type="text" class=" min-w-min h-9 border-none ring-2 ring-blue-700 rounded-l-full pl-5 pr-5 " placeholder="recherche" name="search" >
                        <button class="bg-blue-500 h-10 hover:bg-blue-900 duration-1000  px-4 py-2   sm:mr-5 font-semibold rounded-r-full text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
            <div class="modal fade" id="ajout_photo_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modifier une photo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data" id="ajout_photo_form" novalidate>
                    <input type="hidden" name="id" id="pid">
                    <input type="hidden" name="old_image" id="old_image">
                    <div class="modal-body p-5">
                        <div class="mb-3">
                            <label>Post Image</label>
                            <input type="file" name="file" class="form-control" >
                            <div class="invalid-feedback">Post image is required!</div>
                            <div id="post_image"></div>
                        </div>
                    </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="ajout_photo_btn">Ajouter la photo</button>
                    </div>
                </div>
            </div>
            </div>
                    <div class="buttons flex-initial sm:flex space-x-3 sm:items-center sm:justify-center items-center justify-center w-full sm:w-64 h-full  hidden">
                    <button id="image"><img class="lg:w-6 w-8 lg:h-6 h-8 my-1 rounded-full " src="<?= base_url() ?>/Thumbnails/<?= $user['Photo'] ?>"
                     src="<?php if(!empty($user['Photo'])){ echo $user['Photo'];}
                                elseif($user['Genre']=='M'){ echo base_url('/img/userM.png'); }
                                elseif($user['Genre']=='F'){echo base_url('/img/userF.png');}
                                ?>"
                    alt="<?= substr($user['Nom'],0,1) ?><?= " "?><?= substr($user['Prenom'],0,1) ?>">
                   </button>
                         <a href="<?= base_url('logout') ?>"class=" font-semibold rounded px-4 py-1.5  
                        bg-gradient-to-r from-[#0088ff] to-[#1fc812] duration-3000 
                         p-1 text-white hover:from-[#e5e4e7] hover:to-[#1fc812] transition-ease-in-out  "> Logout</a>
                        <!-- </button>     -->
                    </div>
                   
                </nav>
                
            </div>
            
        </header>
         <div id="searchedprop" class="absolute z-20 left-[40%] mt-14 w-[20%] sm:top-0 fixed  h-auto  overflow-hide bg-blue-100 rounded-md"></div>
         <div id="setting" style="display:flex;margin-right:70px;background:black;">
         
         </div>  
         <script>
            var divenblock=document.querySelector('#image');
            var divenblock=document.querySelector('#setting');
            divenblock.onclick=()=>{
                divenblock.style.display('flex');
            }
             function settings(){
                
                divenblock.classList.toggle('flex');
             }
          $(Document).ready(function(){
               $(document).on('click','.logoutbtn',function(){
                   $(".logoutbtn").text("disconnect...")
                $.ajax({
                    url:'<?=base_url('logout') ?>',
                    method:'get',
                    success:function(response){
                        Swal.fire(
                                    'Logout successfully',
                                    response.message,
                                    'success'
                            )
                            $(".logoutbtn").text("Logout")
                            $(location).prop("href","<?= base_url('/login')?>"); 

                    }
                });
               });

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
          })
     
         </script>