<?php
include 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel the world</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>travel </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form" class="btn">book now</a>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">TRAVEL THE WORLD</span>
        <h3 data-aos="fade-up" data-aos-delay="300">THE BEUATY OF NATURE </h3>
        <p data-aos="fade-up" data-aos-delay="450">Welcome to <b>AFRICA CONTINENT</b>
Explore the Wonders of Africa continent
Welcome to Africa, a place where adventure, history, and culture meet. Whether you're seeking outdoor thrills, cultural experiences, or serene relaxation, our beautiful destination offers it all.
<br>
<p><strong>Discover:</strong>
Majestic landscapes,Rich historical sites,Vibrant local culture,Unforgettable culinary experiences</p>
        <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a>
    </div>

</section>

<!-- home section ends -->

<!-- booking form section starts  -->

<section class="book-form" id="book-form">

    <form id="subscribeForm" action="submit.php" method="POST">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>where to?</span>
            <input type="text" placeholder="place name" value="where_to" name="where_to">
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>when?</span>
            <input type="date" value="when" name="when_to">
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span>how many?</span>
            <input type="number" placeholder="number of travelers" value="how_many" name="how_many">
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="find now" class="btn" name="findnow">
        
    </form>
    <div id="responseMessage"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#subscribeForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Serialize the form data
        var formData = $(this).serialize();

        // Send the AJAX request
        $.ajax({
            type: 'POST',
            url: 'submit.php', // The PHP file that processes the form
            data: formData,
            success: function(response) {
                // Display the response message
                $('#responseMessage').html(response);
            },
            error: function() {
                $('#responseMessage').html('An error occurred. Please try again.');
            }
        });
    });
});
</script>

</section>

<!-- booking form section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>why choose us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>Step outside and immerse yourself in the breathtaking beauty of nature. From towering mountains draped in mist to the serene ripples of a quiet lake, the world around you offers an escape from the hustle and bustle of everyday life. Nature, in all its majesty, invites you to explore its wonders – the vibrant colors of a sunset, the crisp scent of pine forests, and the gentle caress of a fresh breeze.
             Each moment in the wild is a reminder of the earth’s timeless rhythms and our connection to it. <br>
Whether you’re hiking through a dense woodland trail or standing on the edge of a vast ocean, nature offers a 
unique form of peace and inspiration. It's in these quiet moments of solitude that you can feel
 the pulse of the natural world, reminding you of your place within something far greater. 
 Nature’s splendor awaits you – step into its embrace, breathe deeply, and let it revive your spirit.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- destination section starts  -->

<section class="destination" id="destination">

    <div class="heading">
        <span>our destination</span>
        <h1>make yours destination</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/kilimanjalo.jpg" alt="">
            </div>
            <div class="content">
                <h3>Mount Kilimanjaro, Tanzania</h3>
                <p> Embark on the ultimate adventure and summit Africa's highest peak! 
                    Mount Kilimanjaro offers a multi-day trek through stunning landscapes, 
                    from lush forests to rocky plateaus and, finally, snow-capped peaks. 
                    Each step of the journey brings a new challenge,
                     but the reward is a view from the Roof of Africa that’s beyond words.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/victoria falls.jpg" alt="">
            </div>
            <div class="content">
                <h3>Victoria Falls, Zambia & Zimbabwe</h3>
                <p>Feel the adrenaline rush as you raft down the mighty Zambezi River
                     at the world-renowned Victoria Falls! 
                    Known as the "Smoke that Thunders," the falls provide the perfect backdrop for
                     thrill-seekers with activities like bungee jumping,
                     zip-lining, and helicopter tours. Experience nature’s power up close.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/desert.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sahara Desert, Morocco and Egypt</h3>
                <p>Journey into the vast expanse of the Sahara Desert, where adventure awaits around every dune. 
                    Whether you’re riding camels over golden sands, boarding down steep dunes,
                     or camping under a star-studded sky, 
                    the Sahara offers a magical escape into one of the world's most iconic landscapes.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="images/masai.jpg" alt="">
            </div>
            <div class="content">
                <h3>Maasai Mara, Kenya</h3>
                <p> Witness one of nature’s most incredible spectacles: the Great Migration. The Maasai Mara,
                     with its open savannas and dense wildlife, is perfect for safaris and hot-air balloon rides. 
                    Drift over herds of wildebeest and spot lions on the prowl—this is Africa at its wildest and most breathtaking.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="images/canyon.jpg" alt="">
            </div>
            <div class="content">
                <h3>Blyde River Canyon, South Africa</h3>
                <p>Explore the dramatic cliffs and lush valleys of the Blyde River Canyon, 
                    the third-largest canyon in the world. With options for hiking, cliff diving, 
                    and river boating, you can experience the canyon from every angle.
                     Marvel at natural wonders like the Three Rondavels and God’s Window,
                     where views extend for miles.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="images/atlas.jpg" alt="">
            </div>
            <div class="content">
                <h3>Atlas Mountains, Morocco</h3>
                <p> Discover the rugged beauty of the Atlas Mountains,
                     home to stunning landscapes and traditional Berber villages. Whether you’re climbing peaks, 
                     skiing in winter, or hiking ancient trails, the Atlas offers a perfect blend of adventure and culture,
                     topped with panoramic mountain views.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="images/volcano.jpg" alt="">
            </div>
            <div class="content">
                <h3>Volcanoes National Park, Rwanda</h3>
                <p> Discover the enchanting beauty of Volcanoes National Park, home to the iconic mountain gorillas.
                     Trek through lush, misty forests and experience the thrill of encountering these majestic creatures in 
                     their natural habitat. Beyond gorillas, explore diverse wildlife, including golden monkeys,
                      and enjoy breathtaking views of the Virunga mountains. Engage with local culture and support
                       vital conservation efforts that protect these endangered species. 
                    An adventure in Volcanoes National Park promises unforgettable memories and a deep connection to nature.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/Okavango.jpg" alt="">
            </div>
            <div class="content">
                <h3>Okavango Delta, Botswana</h3>
                <p>Experience a safari like no other in the Okavango Delta, 
                    a UNESCO World Heritage site where water and wildlife meet. Glide through the delta in a traditional 
                    mokoro canoe, spotting hippos, elephants, and birdlife as you go.
                     This wetland oasis offers an unforgettable journey into Africa’s wild heart.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
            
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="images/rwenzori.jpg" alt="">
            </div>
            <div class="content">
                <h3>Rwenzori Mountains, Uganda </h3>
                <p> Known as the "Mountains of the Moon," the Rwenzori Mountains are a dream for adventurous trekkers. 
                    With snow-capped peaks, glacial lakes, and diverse flora and fauna, a trek here feels otherworldly.
                     This challenging climb rewards you with views and experiences found nowhere else.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>

</section>

<!-- destination section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <div class="heading">
        <span>our services</span>
        <h1>countless expericences</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-globe"></i>
            <h3>worldwide</h3>
            <p>Explore destinations around the globe with ease.
             Our services are designed to make your travel experience seamless, 
             no matter where you want to go.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Embrace thrilling adventures tailored to every kind of traveler! 
                From hiking trails to adrenaline-pumping activities,
                 find the perfect adventure with us.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-utensils"></i>
            <h3>food & drinks</h3>
            <p>Taste the world on your plate! 
                Discover exclusive food and drink experiences that cater to your taste and style, 
                curated just for you.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Enjoy comfort without compromise!
                 Our selection of affordable hotels offers quality stays that fit any budget, 
                with top-notch service and amenities.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fas fa-wallet"></i>
            <h3>affordable price</h3>
            <p>Travel smart with unbeatable prices on all our services,
                 ensuring great value every step of your journey.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Here for you anytime, anywhere. Our team is available 24/7 to support your travel needs,
                 from bookings to last-minute assistance.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <div class="heading">
        <span>our gallery</span>
        <h1>we record memories</h1>
    </div>
    
    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/tanzania.jpg" alt="">
            <span>Mount Kilimanjaro</span>
            <h3>Tanzania</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/zambia.jpg" alt="">
            <span>Victoria Falls</span>
            <h3>Zambia & Zimbabwe</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/Morocco.jpg" alt="">
            <span>Sahara Desert </span>
            <h3>Morocco and Egypt</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/South Africa.jpg" alt="">
            <span>Blyde River Canyon</span>
            <h3>South Africa</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/kenya.jpg" alt="">
            <span>Maasai Mara</span>
            <h3>Kenya</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/Atlas Morocco.jpg" alt="">
            <span>Atlas Mountains</span>
            <h3>Morocco</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/Rwanda.jpg" alt="">
            <span>Volcanoes National Park </span>
            <h3>Rwanda</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/bobo.jpg" alt="">
            <span>Okavango Delta</span>
            <h3>Botswana</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/uganda.jpg" alt="">
            <span>Rwenzori Mountains</span>
            <h3>Uganda</h3>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review">

    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>testimonials</span>
        <h3>good news from our clients</h3>
        <p>Hear from our happy clients who have experienced the difference our services make. 
            From unforgettable travel adventures to seamless service and unbeatable value, 
            their stories reflect our commitment to quality and customer satisfaction. 
            Discover firsthand the impact we’ve had on their journeys and see why we’re their trusted choice. 
            Join our community of delighted clients who’ve found their perfect travel experiences with us!</p>
    </div>

    <div class="box-container" data-aos="fade-left" data-aos-delay="600">

        <div class="box">
            <p>I’ve traveled a lot, but this experience was truly unique! From start to finish, 
                everything was seamless, and the destinations were beyond my expectations.
                 The team’s attention to detail made all the difference—thank you for 
                 an unforgettable adventure!</p>
            <div class="user">
                <img src="images/cindy.png" alt="">
                <div class="info">
                    <h3>Cindy Johnson</h3>
                    <span>Data science</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>The best part of my trip was how easy everything was! Booking, 
                exploring, and even last-minute changes were handled so professionally. 
                I can’t imagine planning my next trip without you guys. Highly recommended!</p>
            <div class="user">
                <img src="images/thadius.jpeg" alt="">
                <div class="info">
                    <h3>Lwebuga Thadius</h3>
                    <span>Web developer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>The service was top-notch, and the value unbeatable! I loved the personalized recommendations, 
                and each location was carefully selected to match my taste. 
                Already planning my next trip with them!</p>
            <div class="user">
                <img src="images/hafsa.jpeg" alt="">
                <div class="info">
                    <h3>Kamikazi Hafsa</h3>
                    <span>Developer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>I was a bit nervous about traveling, but the 24/7 support made me feel safe and cared for. 
                The entire journey felt tailor-made just for me.
                 Thank you for making my travel dreams come true!</p>
            <div class="user">
                <img src="images/josue.jpeg" alt="">
                <div class="info">
                    <h3>Iradukunda  Josue</h3>
                    <span>Software engineer</span>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <div class="heading">
        <span>blogs & posts</span>
        <h1>we untold stories</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/kalaba.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">A Food Lover’s Guide to Exploring Local Cuisines</a>
                <p>For readers who love to experience a new culture through its cuisine,
                     create a guide on food travel. Highlight different destinations with renowned food scenes,
                     tips on finding authentic dining spots, and must-try dishes.</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 29th octer, 2024</a>
                    <a href="#"><i class="fas fa-user"></i> by K.Hafsa</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/kala2.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Adventure Travel: Top Places to Get Your Adrenaline Fix</a>
                <p>Appeal to thrill-seekers with a list of the best destinations for adventure travel. 
                    Include activities like white-water rafting, mountain climbing, 
                    and skydiving, with safety tips and what to expect.</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 29th octber, 2024</a>
                    <a href="#"><i class="fas fa-user"></i> by K.Hafsa</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/kala3.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Why Rwanda Should Be on Your Bucket List</a>
                <p>
                Give Rwanda the spotlight with a deep dive into its beauty and cultural richness. Talk about the unique experiences, from gorilla trekking in Volcanoes National Park to relaxing on Lake Kivu,
                 and the welcoming spirit of the local communities.</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 29th october, 2024</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- banner section starts  -->

<div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>start your adventures</span>
        <h3>Let's Explore This World</h3>
        <p>Adventure awaits around every corner! At [Your Company Name], we believe that the world
             is filled with breathtaking landscapes, vibrant cultures,
              and unforgettable experiences just waiting to be discovered. Whether you’re seeking thrilling
               outdoor adventures, 
            serene getaways, or cultural immersions, we have the perfect itinerary for you.<br><br>Join us as we journey through 
            the hidden gems of nature, traverse bustling city streets, and savor the diverse flavors of 
            global cuisine. Our expertly curated travel experiences are designed to inspire and create
             lasting memories, ensuring every trip is unique and tailored to your desires.<br><br> So, pack your bags and let your wanderlust lead the way. The world is vast, beautiful, and full of stories waiting to be told. Together,
              let’s explore every inch of it and make your travel dreams a reality!
            </p>
        <a href="#book-form" class="btn">book now</a>
    </div>

</div>

<!-- banner section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>travel </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ad?</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
            <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> Rwanda,Uganda </p>
            <p> <i class="fas fa-phone"></i> +250791345303 / +256789346546 </p>
            <p> <i class="fas fa-envelope"></i> kamikazihafsa2@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form id="subscribeForm" action="subscribe.php" method="POST">
                <input type="email" name="email" placeholder="enter your email" class="email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
            <div id="responseMessage"></div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#subscribeForm').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            type: 'POST',
            url: 'subscribe.php', // URL of the same page
            data: $(this).serialize(), // Serialize form data
            success: function(response) {
                $('#responseMessage').html(response); // Display response
            },
            error: function() {
                $('#responseMessage').html('An error occurred.'); // Handle error
            }
        });
    });
});
</script>
        </div>

    </div>

</section>

<div class="credit">created by <span>Mrs.Queenherself</span> | all rights reserved!</div>

<!-- footer section ends -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>