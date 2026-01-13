<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>car Store</title>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <img src="./img/logo.png" height="70px" width="90px" alt="">
            </div>
            <div class="navItem">
                <h2 class="dreamHeading">CHOOSE US YOUR DREAM CARS</h2>
            </div>
            <div class="navItem">
                <span class="limitedOffer"><a href="logout.php">Logout</a></span>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">Rolls-Royce</h3>
            <h3 class="menuItem">Bentley</h3>
            <h3 class="menuItem">Mercedes-Benz </h3>
            <h3 class="menuItem">BMW</h3>
            <h3 class="menuItem">Audi</h3>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/rolls.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Rolls-Royce</h1>
                <h2 class="sliderPrice">$450,000</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/bent.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Bentley</h1>
                <h2 class="sliderPrice">$200,000</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/merc.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Mercedes-Benz</h1>
                <h2 class="sliderPrice">$300,000</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/bmw.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BMW</h1>
                <h2 class="sliderPrice">$350,000</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/audi.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Audi</h1>
                <h2 class="sliderPrice">$100,000</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
        <div class="features">
            <div class="feature">
                <img src="./img/shipping.png" alt="" class="featureIcon">
                <span class="featureTitle">FREE SHIPPING</span>
                <span class="featureDesc">Free worldwide shipping delivery on all orders.</span>
            </div>
            <div class="feature">
                <img class="featureIcon" src="./img/return.png" alt="">
                <span class="featureTitle">30 DAYS RETURN</span>
                <span class="featureDesc">No question return and easy refund in 14 days.</span>
            </div>
            <div class="feature">
                <img class="featureIcon" src="./img/gift.png" alt="">
                <span class="featureTitle">GIFT CARDS</span>
                <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
            </div>
            <div class="feature">
                <img class="featureIcon" src="./img/contact.png" alt="">
                <span class="featureTitle">CONTACT US!</span>
                <span class="featureDesc">Keep in touch via email and support system.</span>
            </div>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/rolls.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Rolls-Royce</h1>
            <h2 class="productPrice">$450,000</h2>
            <p class="productDesc">Strive for perfection in everything you do.</p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            
            <button class="productButton">BUY NOW!</button>
        </div>
        <form action="checkout.php" method="post">
            <div class="payment">
                <h1 class="payTitle">Personal Information</h1>
                <label>Name and Surname</label>
                <input type="text" name="name" placeholder="name" class="payInput" required>
        
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="phone" class="payInput" required>
        
                <label>Address</label>
                <input type="text" name="address" placeholder="address" class="payInput" required>
        
                <h1 class="payTitle">Card Information</h1>
                <div class="cardIcons">
                    <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                    <img src="./img/master.png" alt="" width="40" class="cardIcon">
                </div>
                
                <input type="text" name="card_number" class="payInput" placeholder="**** **** **** ****">
                
                <div class="cardInfo">
                    <input type="text" name="exp_month" placeholder="mm" class="payInput sm">
                    <input type="text" name="exp_year" placeholder="yyyy" class="payInput sm">
                    <input type="text" name="cvv" placeholder="cvv" class="payInput sm">
                </div>
        
                <button type="submit" class="payButton">Confirm Purchase!</button>
                <span class="close">X</span>
            </div>
        </form>
    </div>
    
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="./img/one.jpeg"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="./img/two.jpg"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just get it!</h1>
            <img src="./img/three.jpeg"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="./img/lambo.jpg"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm"> NEW YEAR ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR BRAND</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="./img/bug.jpg"
                alt="" class="nsImg">
        </div>
    </div>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">Rolls-Royce</li>
                    <li class="fListItem">Bentley</li>
                    <li class="fListItem">Mercedes-Benz</li>
                    <li class="fListItem">BMW</li>
                    <li class="fListItem">Audi</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow to Our car Store</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button class="fButton">Join!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                    <img src="./img/instagram.png" alt="" class="fIcon">
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@prathamdeshar All rights reserved 2025.</span>
            </div>
        </div>
    </footer>
    <script src="./app.js"></script>
</body>

</html>