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
    <title>Ziplines</title>
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
                <li><a href="./projects">Projects</a></li>
                <li><a href="./tours">Tours</a></li>
                <li><a class="active" href="./ziplines">Ziplines</a></li>
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
        @foreach($slides as $slide)
            <div class="item">
                <img src="storage/slide/{{$slide->slideimage}}" alt="">
            </div>
        @endforeach
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <div class="time"></div>
    </div>
    <!-- Project section -->
    <div class="tourTable">
        <h1>Ziplines</h1>
        <form action="{{ route('ziplines.all') }}">
        @csrf
        <div class="filter">
            <input type="text" name="name" placeholder="Search" />
            <select name="location" id="location">
            <option value="" disabled selected hidden>Location</option>
                <option value="{{ implode(['location' => 'Tbilisi']) }}">Tbilisi</option>
                <option value="{{ implode(['location' => 'Imereti']) }}">Imereti</option>
                <option value="{{ implode(['location' => 'Adjaria']) }}">Adjaria</option>
                <option value="{{ implode(['location' => 'Kvemo Kartli']) }}">Kvemo Kartli</option>
                <option value="{{ implode(['location' => 'Samegrelo / Svaneti']) }}">Samegrelo / Svaneti</option>
                <option value="{{ implode(['location' => 'Kakheti']) }}">Kakheti</option>
                <option value="{{ implode(['location' => 'Shida Kartli']) }}">Shida Kartli</option>
                <option value="{{ implode(['location' => 'Abkhazia']) }}">Abkhazia</option>
                <option value="{{ implode(['location' => 'Samtskhe-Javakheti']) }}">Samtskhe-Javakheti</option>
                <option value="{{ implode(['location' => 'Guria']) }}">Guria</option>
                <option value="{{ implode(['location' => 'Mtskheta-Mtianeti']) }}">Mtskheta-Mtianeti</option>
                <option value="{{ implode(['location' => 'Racha-Lechkhumi and Kvemo Svaneti']) }}">Racha-Lechkhumi and Kvemo Svaneti</option>
            </select>
            <input type="number" name="min_price" placeholder="Min price" />
            <input type="number" name="max_price" placeholder="Max price" />
            <button><i class="fa-solid fa-filter"></i> Filter</button>
        </div>
        </form>
        <div class="tours">
            @foreach($zips as $zip)
            <div class="cardT">
                <a href="{{ route('zip',['id' => $zip->id]) }}">
                    <div><p>{{$zip->name}}</p></div>
                </a>
                <img src="storage/zip/{{$zip->image1}}" alt="Ziplines picture">
            </div>
            @endforeach
        </div>
    </div>
    <!-- Blogs -->
    <section class="blogSection">
        <div>
            <h1>Blog</h1>
            <hr>
        </div>
        @foreach($blogs->take(1) as $blog)
        <div class="blog">
            <div class="mainC">
            <a href="{{ route('blog',['id' => $blog->id]) }}">
                <h1>{{$blog->name}}</h1>
            </a>
                <p>{{$blog->description}}</p>
                <img src="storage/blog/{{$blog->blogimage}}" alt="">  
            </div>
        @endforeach
        
            <div class="blogFlex">
                @foreach($blogs->take(4)->skip(1) as $blog)
                <div>
                <a href="{{ route('blog',['id' => $blog->id]) }}">
                    <h1>{{$blog->name}}</h1>
                </a>
                    <p>{{$blog->description}}</p>
                    <img src="storage/blog/{{$blog->blogimage}}" alt="">
                    
                </div>
                @endforeach
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