<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <link rel="stylesheet" href="<?= base_url() ?>/player.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      #aime{
        background-color: rgb(7, 89, 241);
      }
      
      #searchedprop{
          position: fixed;
          margin-top: 50px;
      }
    </style>
    <?php 
    if(isset($myVideo)){
      foreach($myVideo as $key =>$myVideo){
          ?>
    <title><?= $myVideo->Title ?></title>
</head>
<body >
  <input type="hidden" id="userID" value="<?= $user['ID']?>">
    <div class="wrapper">
        <div class="containervideo mt-[70px]  lg:pt-[3%] lg:px-[3%] flex lg:flex-row flex-col lg:space-y-0 space-y-5">
          <?php include "header2.php"; ?>
        <div id="played" class="video    lg:w-[65%] w-full    "> 
                <div class="video-container paused w-full lg:w-[90%] rounded" data-volume-level="high">
                  <img class="thumbnail-img">
                  <div class="video-controls-container">
                    <div class="timeline-container">
                      <div class="timeline">
                        <img class="preview-img">
                        <div class="thumb-indicator"></div>
                      </div>
                    </div>
                    <div class="controls">
                      <button class="play-pause-btn">
                        <svg class="play-icon" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                        </svg>
                        <svg class="pause-icon" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M14,19H18V5H14M6,19H10V5H6V19Z" />
                        </svg>
                      </button>
                      <div class="volume-container">
                        <button class="mute-btn">
                          <svg class="volume-high-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M14,3.23V5.29C16.89,6.15 19,8.83 19,12C19,15.17 16.89,17.84 14,18.7V20.77C18,19.86 21,16.28 21,12C21,7.72 18,4.14 14,3.23M16.5,12C16.5,10.23 15.5,8.71 14,7.97V16C15.5,15.29 16.5,13.76 16.5,12M3,9V15H7L12,20V4L7,9H3Z" />
                          </svg>
                          <svg class="volume-low-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5,9V15H9L14,20V4L9,9M18.5,12C18.5,10.23 17.5,8.71 16,7.97V16C17.5,15.29 18.5,13.76 18.5,12Z" />
                          </svg>
                          <svg class="volume-muted-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,4L9.91,6.09L12,8.18M4.27,3L3,4.27L7.73,9H3V15H7L12,20V13.27L16.25,17.53C15.58,18.04 14.83,18.46 14,18.7V20.77C15.38,20.45 16.63,19.82 17.68,18.96L19.73,21L21,19.73L12,10.73M19,12C19,12.94 18.8,13.82 18.46,14.64L19.97,16.15C20.62,14.91 21,13.5 21,12C21,7.72 18,4.14 14,3.23V5.29C16.89,6.15 19,8.83 19,12M16.5,12C16.5,10.23 15.5,8.71 14,7.97V10.18L16.45,12.63C16.5,12.43 16.5,12.21 16.5,12Z" />
                          </svg>
                        </button>
                        <input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
                      </div>
                      <div class="duration-container">
                        <div class="current-time">0:00</div>
                        /
                        <div class="total-time"></div>
                      </div>
                      <button class="captions-btn">
                        <svg viewBox="0 0 24 24">
                          <path fill="currentColor" d="M18,11H16.5V10.5H14.5V13.5H16.5V13H18V14A1,1 0 0,1 17,15H14A1,1 0 0,1 13,14V10A1,1 0 0,1 14,9H17A1,1 0 0,1 18,10M11,11H9.5V10.5H7.5V13.5H9.5V13H11V14A1,1 0 0,1 10,15H7A1,1 0 0,1 6,14V10A1,1 0 0,1 7,9H10A1,1 0 0,1 11,10M19,4H5C3.89,4 3,4.89 3,6V18A2,2 0 0,0 5,20H19A2,2 0 0,0 21,18V6C21,4.89 20.1,4 19,4Z" />
                        </svg>
                      </button>
                      <button class="speed-btn wide-btn">
                        1x
                      </button>
                      <button class="mini-player-btn">
                        <svg viewBox="0 0 24 24">
                          <path fill="currentColor" d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-10-7h9v6h-9z"/>
                        </svg>
                      </button>
                      <button class="theater-btn">
                        <svg class="tall" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M19 6H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H5V8h14v8z"/>
                        </svg>
                        <svg class="wide" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M19 7H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm0 8H5V9h14v6z"/>
                        </svg>
                      </button>
                      <button class="full-screen-btn">
                        <svg class="open" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/>
                        </svg>
                        <svg class="close" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div id="play">
                    <video id="<?= $myVideo->ID ?>" class="playing rounded" src="<?= base_url() ?>/Videos/<?= $myVideo->Video ?>" autoplay></video> 
                    <input type="hidden" name="session_id">
                  </div>
                </div>
                <div id="description">
                <div class="description  pb-4 px-[3%] lg:px-0 w-full border-b-[2px] ">
                    <div class="p-[2%] pl-0 lg:text-[22px] text-[18px] font-semibold"><?=$myVideo->Title?></div>
                    <div class="reaction flex flex-col justify-between  space-y-2  text-white">
                       <div class="vuesAndDate flex flex-row space-x-2">
                        <div class="vues  text-black space-x-1 lg:text-base text-[13px] flex flex-row justify-center">
                        </div>
                       </div>
                       <div class="vuesAndDate flex flex-row space-x-2">
                        <div class="vues  text-black space-x-1 lg:text-base text-[13px] flex flex-row justify-center">
                            <div class="nbrVues "><?= $myVideo->Views ?></div>
                            <div class="">vues</div>
                        </div>
                        <div class="dateSortie  text-black lg:text-base text-[13px]">
                            sortie le <span class="date lg:text-base text-[13px]"><?= $myVideo->Created_at ?></span>
                        </div>
                       </div>
                       <div class="reaction flex flex-row justify-between">
                        <div class="jaime cursor-pointer  bg-gray-200 p-2 rounded-3xl h-[45px] text-black flex lg:flex-row flex-col justify-center items-center lg:space-x-2 lg:text-[18px] font-semibold lg:text-base text-[13px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                              </svg>
                              <span id="<?= $myVideo->ID ?>" class="liked">j'aime</span>
                            </div>
                           <div class="jaimepas cursor-pointer bg-gray-200 p-2 rounded-3xl h-[45px] text-black flex lg:flex-row justify-center items-center  lg:space-x-2 lg:text-[18px] lg:text-base text-[13px] font-semibold flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                              </svg>
                              <span class="">j'aime pas</span>
                        </div>
                        <div class="partager bg-gray-200 p-2 rounded-3xl h-[45px] text-black flex lg:flex-row justify-center items-center lg:space-x-2 text-[18px] font-semibold flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                              </svg>
                              <span class="lg:text-base text-[13px]">tranferer</span>
                              
                        </div>
                        <div class="telecharger p-[10px] h-[45px] text-white bg-blue-500 rounded-[50%] lg:text-base text-[13px] " >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                              </svg>
                            </div>
                       </div>
                         
                    </div>
                </div>
                <div class="profil  flex flex-row justify-between lg:px-0 px-[3%] items-center ">
                    <div class="profilChannel  flex justify-start items-center space-x-2  cursor-pointer ">

                      <?php  if ($myVideo->Photo) {
                        echo '<img src="'.base_url().'/Thumbnails/'.$myVideo->Photo.'" class="w-13 h-12 my-1  rounded-full " alt="logo">';
                      } else {
                        echo '<img src="'.base_url().'/img/logo.png" class="w-13 h-12 my-1  rounded-full " alt="logo">';
                      }
                       ?>
                        <h1 class= "font-bold text-[20px] cursor-pointer"><?= $myVideo->Nom ?> <?= $myVideo->Prenom ?></h1>
                    </div>
                    <div class="sabonner bg-blue-500 h-[45px] px-[10px] flex justify-center items-center rounded cursor-pointer text-white">
                        <span>s'abonner</span>
                    </div>
                </div>
                </div>
            </div>
            <?php include "modal.php"; ?>
            <aside class="comment  lg:w-[35%] sm:mx-4  lg:ml-4   flex-col space-y-10 relative ">
                <div class="commentBox hidden  lg:flex flex-col justify-end space-y-4  sm:h-[550px] max-h-[550px] overflow-auto px-3 pt-4  bg-gray-50  lg:rounded-md  shadow-[inset_0px_2px_20px_8px_rgb(0,0,0,0.2)] ">
                    <div class="allUserComment lg:flex flex-col  ">
                      <?php
                      if(isset($comments)){
                        foreach($comments as $key =>$comments){
                            ?>
                        <div class="userComment flex flex-row space-x-1  mb-5">
                            <div class="userProfil  cursor-pointer w-[10%] ">
                              <?php if ($comments->Photo) {
                                echo '<img src="'.base_url().'/Thumbnails/'.$comments->Photo.'" class="w-10 h-9  rounded-full " alt="logo">';
                              } else {
                                echo '<img src="'.base_url().'/img/logo.png" class="w-10 h-9  rounded-full " alt="logo">';
                              }
                              
                              ?>
                            </div>
                            <div class="userTextComment bg-blue-500 max-w-[90%] rounded-lg px-[20px] py-[6px]">
                                <h5 class="userName font-semibold"><?= $comments->Nom ?></h5>
                                <p class="leading-[1rem]"><?= $comments->Body?></p>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                <div class="inputBox flex justify-center">
                    <div class="inputComment flex flex-row w-[80%]  h-10 border mb-3 rounded-full bg-gray-300">
                        <input type="text"  id="comment" placeholder="Entrer votre commentaire" class="Commentinput w-[83%] pl-2 rounded-l-full bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-[1%] text-slate-800 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" sendButton w-6 h-6 m-[1%] text-slate-800 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                          </svg>
                          
                          
                    </div>
                </div>
                </div>
                <div class="OpenComment absolute top-2 left-2 hidden  lg:flex flex-row space-x-1 items-center bg-[rgba(30,41,59,0.6)] p-2 rounded-full cursor-pointer ">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 commentButton text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                  </svg>
                      <span class="text-[15px] text-white">commentaires</span>
                </div>
                <div class="hideComment absolute -top-4 left-2   lg:hidden flex flex-row  space-x-1 items-center bg-[rgba(30,41,59,0.6)] p-2 rounded-full cursor-pointer ">
                    
                        

                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 commentButton text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                          <span class="text-[15px] text-white">commentaires</span>
                </div>
                <div class="moreVideo flex flex-col space-y-2 rounded pt-16 lg:pt-0  overflow-y-hidden   ">
                
    <?php }} ?>
                           
                <?php
                    if(isset($video)){
                        foreach($video as $key =>$video){
                ?>
                <a href="<?= base_url() ?>/Watch?v=<?=$video->ID?>" style="text-decolation: none">
                    <div class="lg:h-[115px] sm:h-[450px] w-full  overflow-hidden flex lg:flex-row flex-col lg:justify-center lg:items-start lg:space-x-2">
                      <div class="imagevideo h-[80%] w-full lg:h-[100%] lg:w-[45%]  lg:rounded overflow-hidden">
                          <!-- <img src="img/1.jpg" alt="" class=" lg:rounded h-full w-full"> -->
                          <img  src="<?= base_url() ?>/Thumbnails/<?= $video->Image ?>" >
                      </div>
                      <div class="descriptionV flex flex-col  space-y-1 pl-2 lg:p-3 lg:h-[100%] h-[20%] w-full bg-gray-100 lg:w-[60%] lg:rounded">
                          <div class="videoName font-semibold lg:text-[20px] text-[18px]"><?= substr($video->Title,0,16) ?></div>
                          <div class="profilChannel  flex justify-start items-center space-x-2  cursor-pointer ">
                              <img src="<?= base_url() ?>/Thumbnails/<?= $video->Photo ?>" class="lg:w-6 w-8 lg:h-6 h-8 my-1   rounded-full " alt="logo">
                              <h1 class= "font-semibold text-[15px] cursor-pointer"><?= $video->Nom ?> <?= $video->Prenom ?></h1>
                          </div>
                      </div>
                  </div> 
                  </a>
                  <?php }} 
                  ?>
          </div>
            </aside>
        </div>
        </div>
      <script id="script" src="<?= base_url() ?>/player.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          //handle get user's comment on video 
          $(document).on('click','.sendButton',(e)=>{
            e.preventDefault();
            var cmnt = $(document).find('#comment').val();
            var video = $(document).find('.playing').attr('id')
            $.ajax({
              method: "post",
              url: '<?= base_url('post/comment') ?>',
              data: {video: video,comment: cmnt},
              success: function (response) {
                $(document).find('.allUserComment').html(response.message)
                $(document).find('#comment').val(''); 
              }
            });
          })
          //envoyer les like d'un clent sur un video
          $('.jaime').click(function (e) { 
            e.preventDefault();
            handleLike(1)
          });
          //envoyer les dislike d'un clent sur un video
          $('.jaimepas').click(function (e) { 
            e.preventDefault();
            handleLike(0)
          });
          //handle like or unlike by event 
          function handleLike(status){
            var video = $(document).find('.playing').attr('id')
            $.ajax({
              method: "post",
              url: '<?= base_url('post/liked') ?>',
              data: {video: video, status: status},
              success: function (response) {
                if (response.message == 1) {
                  $(document).find('.jaime').attr('id','aime')
                  $(document).find('.jaimepas').removeAttr('id')
                }else if (response.message == 0) {
                  $(document).find('.jaimepas').attr('id','aime')
                  $(document).find('.jaime').removeAttr('id')
                }
                if(response.message == 2){
                  $(document).find('.jaimepas').removeAttr('id')
                  $(document).find('.jaime').removeAttr('id')
                }
              }
            });
          }
          //handle valide view
          valideViews()
          function valideViews(){
           var video = $(document).find('.playing').attr('id')
           $.ajax({
            method: "post",
            url: '<?= base_url('post/addview') ?>',
            data: {video: video},
            success: function (response) {
              console.log(response)
            }
           });
          }
          //handle verify if is liked or unliked
          Verifyliked()
          function Verifyliked () { 
            var video = $(document).find('.playing').attr('id')
            $.ajax({
              method: "post",
              url: '<?= base_url('post/verifyliked') ?>',
              success: function (response) {
                if (response.message == 1) {
                  $(document).find('.jaime').attr('id','aime')
                  $(document).find('.jaimepas').removeAttr('id')
                }else if (response.message == 0) {
                  $(document).find('.jaimepas').attr('id','aime')
                  $(document).find('.jaime').removeAttr('id')
                }
                if(response.message == 2){
                  $(document).find('.jaimepas').removeAttr('id')
                }
              }
            })
          }
          });
    </script>
   </body>
</html>
