<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,500;0,600;0,700;1,400&amp;family=Libre+Baskerville&amp;family=Poppins&amp;family=Work+Sans:ital,wght@0,400;1,200&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1ffcb73b4a.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
<body>
    <header>
        <a href="./index">
            <img src="./assets/images/logo.svg" alt="Logo">
        </a>
        <nav>
            <div class="openMenu"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <ul class="mainMenu">
                <li><a href="./index">Home</a></li>
                <li><a href="./projects">Projects</a></li>
                <li><a href="./tours">Tours</a></li>
                <li><a href="./ziplines">Ziplines</a></li>
                <li><a href="./tokebi">Tokebi</a></li>
                <li><a class="active" href="./contact">Contact</a></li>
                <div class="closeMenu"><i class="fa fa-times" aria-hidden="true"></i></div>
            </ul>
        </nav>
    </header>
    <div class="carousel">
        <div class="list">
            <div class="item">
                <div class="img-gradient">
                    <img src="./assets/images/cimage1.jpg" alt="image1">
                </div>
                <div class="content">
                    <div class="title">Slide #1</div>
                    <div class="topic">Slide Topic #1</div>
                    <div class="desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                    </div>
                    <div class="buttons">
                        <button>Read more...</button>
                        <button>Follow us on Facebook</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img-gradient">
                <img src="./assets/images/cimage2.jpg" alt="image1">
                </div>
                <div class="content">
                    <div class="title">Slide #2</div>
                    <div class="topic">Slide Topic #2</div>
                    <div class="desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                    </div>
                    <div class="buttons">
                        <button>Read more...</button>
                        <button>Follow us on Facebook</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img-gradient">
                <img src="./assets/images/cimage3.jpg" alt="image1">
                </div>
                <div class="content">
                    <div class="title">Slide #3</div>
                    <div class="topic">Slide Topic #3</div>
                    <div class="desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                    </div>
                    <div class="buttons">
                        <button>Read more...</button>
                        <button>Follow us on Facebook</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img-gradient">
                <img src="./assets/images/cimage4.jpg" alt="image1">
                </div>
                <div class="content">
                    <div class="title">Slide #4</div>
                    <div class="topic">Slide Topic #4</div>
                    <div class="desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                    </div>
                    <div class="buttons">
                        <button>Read more...</button>
                        <button>Follow us on Facebook</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img-gradient">
                <img src="./assets/images/cimage5.jpg" alt="image1">
                </div>
                <div class="content">
                    <div class="title">Slide #5</div>
                    <div class="topic">Slide Topic #5</div>
                    <div class="desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                    </div>
                    <div class="buttons">
                        <button>Read more...</button>
                        <button>Follow us on Facebook</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumbnail">
            <div class="item">
                <img src="./assets/images/cimage2.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Slide #2
                    </div>
                    <div class="desc">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/images/cimage3.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Slide #3
                    </div>
                    <div class="desc">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/images/cimage4.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Slide #4
                    </div>
                    <div class="desc">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/images/cimage5.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Slide #5
                    </div>
                    <div class="desc">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/images/cimage1.jpg" alt="">
                <div class="content">
                    <div class="title">
                        Slide #1
                    </div>
                    <div class="desc">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <div class="time"></div>
    </div>
    <section>
        <div class="contact">
            <h1>Contact us</h1>
            <div class="contactCard">
                <div class="form">
                    <input type="text" id="name" name="name" placeholder="Enter your Name" />
                    <input type="text" id="lastname" name="lastname" placeholder="Enter your Last Name" />
                    <input type="email" id="email" name="email" placeholder="Enter your Email" />
                    <textarea name="message" id="message" cols="42" rows="10" placeholder="Enter your text here..."></textarea>
                    <button>Submit</button>
                </div>
                <div class="formCard">
                    <ul>
                        <h2><i class="fa-solid fa-phone" style="color: #63e6be"></i> Call us</h2>
                        <li>+995 599 12 34 56</li>
                    </ul>
                    <ul>
                        <h2><i class="fa-solid fa-location-dot" style="color: #63e6be"></i> Locations</h2>
                        <li>Tbilisi str #1</li>
                        <li>Batumi str #1</li>
                    </ul>
                    <ul>
                        <h2><i class="fa-solid fa-clock" style="color: #63e6be"></i> Working hours</h2>
                        <li>Mon - Fri: 09:00 / 18:00 <br> Sat: 10:00 / 15:00</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
<!-- Footer -->
    <footer>
        <div>
            <ul>
                <h2>Navigation</h2>
                <li><i class="fa-solid fa-circle-dot" style="color: #63e6be;"></i><a href="./index">Home</a></li>
                <li><i class="fa-solid fa-circle-dot" style="color: #63e6be;"></i><a href="./projects">Projects</a></li>
                <li><i class="fa-solid fa-circle-dot" style="color: #63e6be;"></i><a href="./tours">Tours</a></li>
                <li><i class="fa-solid fa-circle-dot" style="color: #63e6be;"></i><a href="./ziplines">Ziplines</a></li>
                <li><i class="fa-solid fa-circle-dot" style="color: #63e6be;"></i><a href="./tokebi">Tokebi</a></li>
                <li><i class="fa-solid fa-circle-dot" style="color: #63e6be;"></i><a href="./contact">Contact</a></li>
            </ul>
            <ul>
                <h2>Ziplines</h2>
                <li><i class="fa-solid fa-link" style="color: #63e6be;"></i><a href="#">Batumi</a></li>
                <li><i class="fa-solid fa-link" style="color: #63e6be;"></i><a href="#">Martvili</a></li>
                <li><i class="fa-solid fa-link" style="color: #63e6be;"></i><a href="#">Tbilisi</a></li>
                <li><i class="fa-solid fa-link" style="color: #63e6be;"></i><a href="#">Sairme</a></li>
                <li><i class="fa-solid fa-link" style="color: #63e6be;"></i><a href="#">Balda</a></li>
            </ul>
            <ul>
                <h2>Tours</h2>
                <li><i class="fa-solid fa-route" style="color: #63e6be;"></i><a href="#">1 Day tours</a></li>
                <li><i class="fa-solid fa-route" style="color: #63e6be;"></i><a href="#">2 Day tours</a></li>
                <li><i class="fa-solid fa-route" style="color: #63e6be;"></i><a href="#">3 Day tours</a></li>
                <li><i class="fa-solid fa-route" style="color: #63e6be;"></i><a href="#">4 Day tours</a></li>
                <li><i class="fa-solid fa-route" style="color: #63e6be;"></i><a href="#">5 Day tours</a></li>
                <li><i class="fa-solid fa-route" style="color: #63e6be;"></i><a href="#">1 Week tours</a></li>
            </ul>
            <ul>
                <h2>Contact</h2>
                <li><i class="fa-solid fa-phone" style="color: #63e6be;"></i><a href="#">+995 599 12 23 45</a></li>
                <li><i class="fa-solid fa-location-dot" style="color: #63e6be;"></i><a href="#">Pekinis #41</a></li>
                <li><i class="fa-solid fa-location-dot" style="color: #63e6be;"></i><a href="#">Chavchavadze #14</a></li>
            </ul>
        </div>
        <p>© 2023 / All rights reserver</p>
    </footer>

<!-- Local Script -->
<script src="./js/index.js"></script>
</body>
</html>