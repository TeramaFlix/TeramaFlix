<div class="container max-w-full mt-[5rem] min-h-screen    ease-in-out  ">
    <?php include 'sidebar.php'; ?>
    <div id="scrollbar" class="scrollbar  lg:max-w-[80%] max-w-[100%] lg:ml-[20rem]"> 
        <div class="filmslide  ">
            <?php
            if(isset($video)){
                foreach($video as $key=>$video){
                    ?>
            <div class="flex gap-8 mb-8">
                <a href="<?=base_url() ?>/Watch?v=<?=$video->ID?>">
                    <img src="<?=base_url() ?>/Thumbnails/<?=$video->Image?>" class="rounded-md " height="120" width="240"/>
                </a>
                <div class="flex flex-col">
                    <div><h1 class="text-xl"><?= $video->Title?> </h1></div>
                    <div class="nbrVues "><?=$video->Views?> vues <?=$video->Created_at?></div> <br>
                    <div class="description flex  truncate text-sm">
                        <img src="<?=base_url() ?>/Thumbnails/<?=$video->Photo?>" class="logo w-13 h-12 my-1  rounded-full img-fluid" alt="logo">
                        <p class="para-logo mb-5" ><?= $video->Nom.' '.$video->Prenom?></p>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            
        </script>
        