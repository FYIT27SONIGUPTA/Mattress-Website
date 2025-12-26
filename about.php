<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>You expect your new mattress to be in it for the long haul when it comes to comfort, as well as quality.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We are so confident that our mattresses will last longer than the recommended 8-10 years lifespan, most of them come with a 10-year warranty.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/2.png" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/3.png" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We invented SmartGRID Technology with a simple vision to upgrade the quality of sleep for our customers. It is a patented Japanese Technology used to develop our mattresses, chairs & beds. It is not memory foam or coir, it is the biggest comfort revolution proven to help people better and deeper.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>This medium-firm mattress with orthopaedic comfort, made with memory foam and pocket spring technology, is among the best spring mattresses. This mattress adapts to the body and ergonomically supports the spine.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Robert Brewster</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>This mattress is made with independently encased pocket springs, along with non-woven fabric, and is covered with a top layer of knitted, quilted fabric, making it one of the best spring mattresses by choice.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jennifer Smith</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>lavish and pampering sleep with a Wake-up mattress. Neither too soft nor too firm, this mattress offers one of the best spring mattress sleeping experiences. The foam encasement in this mattress support even on the edges.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dana Deer</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>the Springtek mattress is the best spring mattress regarding value for money. This mattress comprises four layers that provide comfort and zero partner disturbance while sleeping.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Serena Kogan</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>TSpringwel Ecosoft mattress provides ultimate comfort and brings in a new wave of sleeping delight. With enhanced bounce and cosiness, this mattress is considered among the best spring mattress in India.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Bob Anderson</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p> The brand uses much more natural materials (natural latex instead of chemical foams), and its customers vouch for the orthopaedic support they get. The mattress feels like a five-star hotel bed without compromising the back support.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sylvia Bonden</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>