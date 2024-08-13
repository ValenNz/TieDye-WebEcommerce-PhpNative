    <?php 
        include "navbar.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/navbarUser.css">

    <!-- Kit Font Awesome -->
    <script src="https://kit.fontawesome.com/1a01d4b743.js" crossorigin="anonymous"></script>


</head>

<body>
    <section class="banner">
     
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./assets/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./assets/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./assets/slide3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    
    <!-- About -->
    <section class="about" id="about"> 
        <div class="main">
            <img src="./assets/abbout.png" >
            <div class="about-text">
                <h2>Tie Dye</h2>
                <p>Tie-dye is a term used to describe a number of resist dyeing techniques and the resulting dyed products of these processes. The process of tie-dye typically consists of folding, twisting, pleating, or crumpling fabric or a garment, before binding with string or rubber bands, followed by  the application of dye or dyes.</p>
                <a class="btn btn-primary" href="product.php" role="button">Shopping Now</a>
            </div>
        </div>
    </section>

    <section class="shop-age my-3">
        <div class="container">
            <div class="row"    >
                <div class="col">
                    <div class="bottom-center">
                        <a href="produk_men.php"><button type="button" class=" btn-age text-center">Men</button></a>
                    </div>
                    <img src="./assets/tieDyeMan.jpg" alt="image" height="600px" width="400px"/>
                </div>
                <div class="col">
                    <div class="bottom-center">
                        <a href="produk_women.php"><button type="button" class=" btn-age text-center">Women</button></a>
                    </div>
                    <img src="./assets/tieDyeWoman.webp" alt="image" height="600px" width="400px" />
                </div>  
                <div class="col">
                    <div class="bottom-center">
                        <a href="produk_kids.php"><button type="button" class=" btn-age text-center">Kids</button></a>
                    </div>
                    <img src="./assets/tieDyeKids.jpg" alt="image" height="600px" width="400px" />
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 30,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
				
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
<?php 
        include "footer.php";
?>