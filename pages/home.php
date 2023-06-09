<?php
session_start();
if(!isset( $_SESSION['u_id'], $_SESSION['username']) && $_SESSION['type'] )


?>

 

<!DOCTYPE html >
<html>
    <head>
        <title>Dream Estate</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            
             <?php include '../components/navbar.php' ?>
        </header>
    <section class="hero-banner d-flex  align-items-center position-relative">
        <section class=" position-absolute banner-overlay"></section>
    <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" height="100%" width="100%" class="hero-image"/>
       <div class="mid-section position-absolute container flex flex-column justify-content-center align-items-center mx-auto">
        <h1 class="text-white text-capitalize">Welcome to dream estate</h1>   
 

            <input type="text" class="search-bar px-3 text-white" placeholder="Search . . ." />
   
       </div>

    </section>
    <section class="services ">
        <div class="container mx-auto ">
            <h1 class="text-capitalize py-4">What can we help you find<h1>
                <div class="grid gap-3 justify-content-center text-center">
        <div class="card" style="max-width: 18rem;">
                <img src="../asset/house.png" class="card-img-top service-card-img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
        </div>
<div class="card" style="max-width: 18rem;">
  <img src="../asset/house.png" class="card-img-top service-card-img" alt="...">
  <div class="card-body">
    <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="max-width: 18rem;">
  <img src="../asset/house.png" class="card-img-top service-card-img" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
                </div>
        </div>

    </section>
    <section class="products my-5">
        <div class="container mx-auto">
        <h3 class="py-4">Latest Properties</h3>
        <div class="carasoul d-grid justify-content-between align-items-center ">
            <div class="card flex flex-column  ">
                <div class="card-img pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info">
                <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
                </div>
                <div class="card flex flex-column justify-content-start align-items-start">
                <div class="card-img pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info ">
                <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
            </div>
            <div class="card flex flex-column justify-content-start align-items-start">
                <div class="card-img  pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info">
                <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
            </div>
            <div class="card flex flex-column ">
                <div class="card-img  pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info">
                        <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
            </div>
            
            
        </div>
        </div>
       
    </section>
    <section class="rooms ">
            <div class="container mx-auto">
                <h2>  Available Rooms</h2>
                <div class="carasoul">
                <div class="card flex flex-column justify-content-start align-items-start">
                <div class="card-img  pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info">
                <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
            </div>
            <div class="card flex flex-column justify-content-start align-items-start">
                <div class="card-img  pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info">
                <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
            </div>
            <div class="card flex flex-column justify-content-start align-items-start">
                <div class="card-img  pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info">
                <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
            </div>
            <div class="card flex flex-column justify-content-start align-items-start">
                <div class="card-img  pb-2">
                   <img src="../asset\wallpaperflare.com_wallpaper(10).jpg" alt="Image" height="100%" width="100%">
                </div>
                <div class="card-info">
                    <h5>This is house title</h5>
                        <p>This is description</p>
                        <p>this is price</p>
                </div>
            </div>
                </div>
                
                  
            </div>
    </section>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
    </html>
