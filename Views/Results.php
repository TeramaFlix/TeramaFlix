<?= $this->extend('layouts/base')  ;  ?>
<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <title>TeramaFLix-<?= $search ?></title>
    <script>
        tailwind.config = {
           
        theme: {
            extend: {},
            screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
            }
  },
  plugins: [],
}
</script>
<style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
        
*{
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;
}
.sidebar ul li a ,.sidebar h1{
    color : #334155;
}
.sidebar ul li a:hover {
    color: #3a82f5;
    margin-left: 10px; 
    transition:  ease-in-out .4s ;
}
.populaires {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    height: 350px;
    overflow: hidden;
    padding: 0px 30px 0px 0px;
}
.populaires div video {
    height: 140px;
    margin-bottom: 10px;
    overflow: hidden;
    position: relative;

} 
.scrollbar {
    padding-left: auto;
    padding-right: auto;
}
.filmcontainer {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(180px, auto));
    margin-left: auto;
    margin-right: auto;
    border-top: 3px solid #3a82f5;
    padding-top: 30px;
    
}
.filmcontainer .videocontainer {
    width: 100%;

}
.imag img:hover {
    transform: translateY(-10px);
    transition: 0.2s all linear;
}
.logo{
    width: 50px;
}
.para-logo{
    margin-top: 15px;
    margin-left: 10px;
}
#searchedprop{
    position: fixed;
}
</style>
</head>
<body>
    <div class="wrapper ">

   
         <!--                                            header navBar                                               -->
         <?php include 'header2.php' ?>
    
       <!--                                               fin header navBar                                               -->

        <?php include 'section.php' ?>
       </div> 
       <script src="<?= base_url() ?>/swiper-bundle.min.js"></script>
       <script src="<?= base_url() ?>/index.js"></script>
</body>
</html>
