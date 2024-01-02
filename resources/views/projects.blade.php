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
    <title>Projects</title>
</head>
<body>
    <!-- Header -->
    <header>
        <a href="./index">
            <img src="./assets/images/logo.svg" alt="Logo">
        </a>
        <nav>
            <div class="openMenu"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <ul class="mainMenu">
                <li><a href="./index">Home</a></li>
                <li><a class="active" href="./projects">Projects</a></li>
                <li><a href="./tours">Tours</a></li>
                <li><a href="./ziplines">Ziplines</a></li>
                <li><a href="./tokebi">Tokebi</a></li>
                <li><a href="./contact">Contact</a></li>
                <div class="closeMenu"><i class="fa fa-times" aria-hidden="true"></i></div>
            </ul>
        </nav>
    </header>
    <!-- Carousel -->
    <div class="carousel">
        <div class="list">
            @foreach($slides as $slide)
            <div class="item">
                <div class="img-gradient">
                    <img src="storage/slide/{{$slide->slideimage}}" alt="slideimage">
                </div>
                <div class="content">
                    <div class="title">{{$slide->title}}</div>
                    <div class="topic">{{$slide->subtitle}}</div>
                    <div class="desc">
                        {{$slide->description}}
                    </div>
                    <div class="buttons">
                        <button>Follow us on Facebook</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="thumbnail">
            <div class="item">
                <img src="./assets/images/cimage2.jpg" alt="">
            </div>
            <div class="item">
                <img src="./assets/images/cimage3.jpg" alt="">
            </div>
            <div class="item">
                <img src="./assets/images/cimage4.jpg" alt="">
            </div>
            <div class="item">
                <img src="./assets/images/cimage5.jpg" alt="">
            </div>
            <div class="item">
                <img src="./assets/images/cimage1.jpg" alt="">
            </div>
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <div class="time"></div>
    </div>
    <!-- Project section -->
    <div class="projects">
        <h1>New project remaining...</h1>
        <div class="firstCard">
            <div class="upcomingC">
                <h2>Balda - Zipline</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div>
                    <img src="./assets/images/balda1.jpg" alt="project image">
                    <img src="./assets/images/balda2.jpg" alt="project image">
                    <img src="./assets/images/balda3.jpg" alt="project image">
                </div>
            </div>
            <img src="./assets/images/baldamain.jpg" alt="project main image">
        </div>
        <div class="progressBar">
            <div class="step 1">
                <p>1</p>
                <h4>Planning</h4>
            </div>
            <div class="step 2">
                <p>2</p>
                <h4>Modeling</h4>
            </div>
            <div class="step 3">
                <p>3</p>
                <h4>Building</h4>
            </div>
            <div class="step 4">
                <p>4</p>
                <h4>N/A</h4>
            </div>
            <div class="step 5">
                <p>5</p>
                <h4>N/A</h4>
            </div>
            <hr>
        </div>
        <h1>Completed Projects</h1>
        <div class="completedP">
            <div class="cardp">
                <div><p>Project#1</p></div>
                <img src="./assets/images/zip1.jpg" alt="Completed projects">
            </div>
            <div class="cardp">
                <div><p>Project#2</p></div>
                <img src="./assets/images/zip2.jpg"  alt="Completed projects">
            </div>
            <div class="cardp">
                <div><p>Project#3</p></div>
                <img src="./assets/images/zip3.jpg"  alt="Completed projects">
            </div>
        </div>
    </div>
    <!-- Blog -->
    <section class="blogSection">
        <div>
            <h1>Blog</h1>
            <hr>
        </div>

        <div class="blog">
            <div class="mainC">
                <h1>Flying over the Tbilisi Botanical Garden</h1>
                <p>Flying over the Botanical Garden in Tbilisi is possible only 
                    with the help of Zipin Georgia with us 🙏 💯 💪</p>
                <img src="./assets/images/blog1.jpg" alt="">
                
            </div>
            <div class="blogFlex">
                <div>
                    <h1>Tours in Georgia</h1>
                    <p>Follow our news and follow us on tours where you ...</p>
                    <img src="./assets/images/blog2.jpg" alt="">
                    
                </div>
                <div>
                    <h1>Tours in Georgia</h1>
                    <p>Follow our news and follow us on tours where you ...</p>
                    <img src="./assets/images/blog3.jpg" alt="">
                </div>
                <div>
                    <h1>Tours in Georgia</h1>
                    <p>Follow our news and follow us on tours where you ...</p>
                    <img src="./assets/images/blog4.jpg" alt="">
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