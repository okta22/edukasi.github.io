<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!--header section starts -->

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Resto.</a>

        <nav class="nav-bar" id="navbarNav">
            <a class="active" href="#home">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#menu" class="fas fa-heart"></a>
            <a href="#dishes" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <!--header section ends-->

    <!--search form-->
    <form action="" id="search-form">
        <input type="search" placeholder="Search Here..." name="" id="search-box">
        <label for="seach-box"  class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!--home section starts -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper wrapper">
                
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>spicy noodles</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eaque repellendus qui.</p>
                        <a href="#order" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="img/home-img-1.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>fried chicken</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eaque repellendus qui.</p>
                        <a href="#order" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="img/home-img-2.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eaque repellendus qui.</p>
                        <a href="#order" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="img/home-img-3.png" alt="">
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- dishes section starts -->
    <section class="dishes" id="dishes">

        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">popular dishes</h1>

        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/dish-1.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/dish-2.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/dish-3.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/dish-4.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/dish-5.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/dish-6.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </section>
    <!-- dishes section ends -->
    
    <!-- about section starts -->
    <section class="about" id="about">

        <h3 class="sub-heading">about as</h3> 
        <h1 class="heading">why choose us?</h1>

        <div class="row">

            <div class="image">
                <img src="img/about-img.png" alt="">
            </div>

            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum rerum amet quas reprehenderit, expedita voluptas minima aut natus facilis tenetur quasi iure aliquid repellendus assumenda dolor aperiam mollitia accusamus! Natus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta culpa, inventore vitae deserunt dignissimos impedit quo officiis consectetur harum laudantium?</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#footer" class="btn">learn more</a>
            </div>

        </div>

    </section>
    <!-- about section ends -->

    <!-- menu section starts -->

    <section class="menu" id="menu">

        <h3 class="sub-heading">our menu</h3> 
        <h1 class="heading">today's speciality</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/menu-1.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/menu-2.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/menu-3.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/menu-4.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/menu-5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/menu-6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/menu-7.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/menu-8.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="img/menu-9.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, consectetur?</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            
        </div>

    </section>

    <!-- menu section ends -->

    <!-- review section starts -->

    <section class="review" id="review">

        <h3 class="sub-heading"> customer's review </h3>
        <h1 class="heading"> what they say </h1>
    
        <div class="swiper review-slider">
    
            <div class="swiper-wrapper">
    
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/pic-1.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>
    
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/pic-2.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>
    
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/pic-3.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>
    
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/pic-4.png" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
                </div>
    
            </div>
    
        </div>
        
    </section>

    <!-- review section ends -->

    <!-- order section starts -->
    <?php include 'koneksi.php' ?>
    <section class="order" id="order">

        <h3 class="sub-heading"> order now </h3>
        <h1 class="heading"> free and fast </h1>
    
        <form action="" method="POST">
    
            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" name="nama" placeholder="enter your name" required>
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="number" name="nomor" placeholder="enter your number" required>
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input type="text" name="menu" placeholder="enter food name" required>
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input type="text" name="tambahan" placeholder="extra with food" required>
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>how musch</span>
                    <input type="number" name="pesanan" placeholder="how many orders" required>
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local" name="tanggal">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="alamat" placeholder="enter your address" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="pesan" placeholder="enter your message" id="" cols="30" rows="10" name="pesan"></textarea>
                </div>
            </div>
    
            <input type="submit" name="submit" value="order now" class="btn">
    
        </form>
       
    </section>
    <?php
	if(isset($_POST['submit'])){

	    $nama = addslashes($_POST['nama']);
		$nomor = addslashes($_POST['nomor']);
		$menu = addslashes($_POST['menu']);
        $tambahan = addslashes($_POST['tambahan']);
        $pesanan = addslashes($_POST['pesanan']);
        $tanggal = addslashes($_POST['tanggal']);
        $alamat = addslashes($_POST['alamat']);
        $pesan = addslashes($_POST['pesan']);

        $cek = mysqli_query($conn, "SELECT nama FROM tb_pemesanan WHERE nama='". $nama ."' ");

		if(mysqli_num_rows($cek)>0){
			echo "<script>alert('Nama sudah digunakan')</script>";
				}else{

					    $simpan	= mysqli_query($conn, "INSERT INTO tb_pemesanan (nama, nomor, menu, tambahan, pesanan, tanggal, alamat, pesan ) VALUES ('".$nama."', '".$nomor."', '".$menu."', '".$tambahan."', '".$pesanan."', '".$tanggal."', '".$alamat."', '".$pesan."')");

						if($simpan){
							echo "<script>alert('Berhasil Disimpan')</script>";
						}else {
							echo "<script>alert('Gagal Disimpan')</script>".mysqli_error($conn);
						}
				}

							

		}
?>
    
    <!-- order section ends -->
    
    <!-- footer section starts  -->
    
    <section class="footer" id="footer">
    
        <div class="box-container">
    
            <div class="box">
                <h3>locations</h3>
                <a href="#"><i class="fa-solid fa-location-dot"></i> india</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> japan</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> russia</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> USA</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> france</a>
            </div>
    
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">review</a>
                <a href="#">order</a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fa-solid fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fa-solid fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fa-solid fa-envelope"></i> shaikhanas@gmail.com</a>
                <a href="#"><i class="fa-solid fa-envelope"></i> anasbhai@gmail.com</a>
                <a href="#"><i class="fa-solid fa-map-location-dot"></i> mumbai, india - 400104</a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fa-brands fa-facebook"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
            </div>
    
        </div>
    
        <div class="credit"> copyright @ 2021 by <span>mr. web designer</span> </div>
    
    </section>
    
    <!-- footer section ends -->
    
    <!-- loader part  -->
    <div class="loader-container">
        <img src="img/loader.gif" alt="">
    </div>

    <!-- order section ends -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!--custom js file link -->
    <script src="js/script.js"></script>
</body>
</html>