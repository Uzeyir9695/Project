@extends('layouts.app')
@section('content')
<div class="w-100  mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" label="Slide 1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" label="Slide 2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" label="Slide 3"></li>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item first active">
                <div class="carousel-text-sect h-100 text-white animate__animated animate__fadeInUp">
                    <div class="carousel-text">
                        <h3><span class="carousel-span">Fast & Secure</span> <br>Web Hosting</br></h3>
                        <p>Anything embarrassing hidden in the middle of text. All the Lorem
                            Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm</p>
                        <button>Read More</button>
                        <button>Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item second">
                <div class="carousel-text-sect h-100 text-white animate__animated animate__fadeInUp">
                    <div class="carousel-text">
                        <h3><span class="carousel-span">Fast & Secure</span> <br>Web Hosting</br></h3>
                        <p>Anything embarrassing hidden in the middle of text. All the Lorem
                            Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm</p>
                        <button>Read More</button>
                        <button>Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item third">
                <div class="carousel-text-sect h-100 animate__animated animate__fadeInUp">
                    <div class="carousel-text">
                        <h3><span class="carousel-span">Fast & Secure</span> <br>Web Hosting</br></h3>
                        <p>Anything embarrassing hidden in the middle of text. All the Lorem
                            Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm</p>
                        <button>Read More</button>
                        <button>Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
        <a href="#carouselExampleIndicators" class="carousel-control-prev" data-slide="prev">
            <span class="far fa-arrow-alt-circle-left"></span>
        </a>
        <a href="#carouselExampleIndicators" class="carousel-control-next" data-slide="next">
            <span class="far fa-arrow-alt-circle-right"></span>
        </a>
    </div>
</div>
</div>

<div class=" row col-md-8 offset-md-2 cards-section">
    <div class="cards-caption text-center my-5">
        <h1 class="cards-title my-3">Affordable SSD Hosting</h1>
        <h5>If you are looking for a low cost solution, our affordable web hosting packages are for you. And with the
            advantage of SSD!</h5>
    </div>

    <div class="cards my-5">
        <div class="copper">
            <h3 class="card-type">Copper</h3>
            <hr class="my-3">
            <h3>Monthly</h3>
            <h2 class="price">1.80$</h2>
            <hr class="my-3">
            <b>
                <p class="text-primary">3GB SSD Disk Space</p>
            </b>
            <b>
                <p class="text-primary">Unmetered Traffic</p>
            </b>
            <b>
                <p class="text-primary">1 WebSite Hosting</p>
            </b>
            <p>Unlimited E-Mail</p>
            <p>Unlimited MySQL</p>
            <p>Unlimited FTP</p>
            <p>Hestia Control Panel</p>
            <p>Free SSL & HTTPS</p>
            <p>Free Weekly BackUp</p>
            <p>Instant Installation</p>
            <p>30% CPU</p>
            <button type="submit" class="card-btn">ADD TO CART</button>
        </div>

        <div class="bronze">
            <div class="bronze-up">
                <div class="popular  text-center">
                    <h6>Popular</h6>
                </div>
                <h3 class="card-type">Bronze</h3>
                <hr class="my-3">
                <h3>Monthly</h3>
                <h2 class="price">3.60$</h2>
                <hr class="my-3">
                <b>
                    <p class="text-primary">6GB SSD Disk Space</p>
                </b>
                <b>
                    <p class="text-primary">Unmetered Traffic</p>
                </b>
                <b>
                    <p class="text-primary">3 WebSite Hosting</p>
                </b>
                <p>Unlimited E-Mail</p>
                <p>Unlimited MySQL</p>
                <p>Unlimited FTP</p>
                <p>Hestia Control Panel</p>
                <p>Free SSL & HTTPS</p>
                <p>Free Weekly BackUp</p>
                <p>Instant Installation</p>
                <p>30% CPU</p>
                <button type="submit" class="card-btn">ADD TO CART</button>
            </div>
        </div>

        <div class="silver">
            <h3 class="card-type">Silver</h3>
            <hr class="my-3">
            <h3>Monthly</h3>
            <h2 class="price">7.62$</h2>
            <hr class="my-3">
            <b>
                <p class="text-primary">9GB SSD Disk Space</p>
            </b>
            <b>
                <p class="text-primary">Unmetered Traffic</p>
            </b>
            <b>
                <p class="text-primary">6 WebSite Hosting</p>
            </b>
            <p>Unlimited E-Mail</p>
            <p>Unlimited MySQL</p>
            <p>Unlimited FTP</p>
            <p>Hestia Control Panel</p>
            <p>Free SSL & HTTPS</p>
            <p>Free Weekly BackUp</p>
            <p>Instant Installation</p>
            <p>30% CPU</p>
            <button type="submit" class="card-btn">ADD TO CART</button>
        </div>
    </div>
</div>

<div class="row col-8 offset-2 mb-5">
    <div class="support animate__animated animate__fadeInUp">
        <div class="support-item">
            <img src="/img/site-transfer.png" class="d-block mx-auto" alt="transfer-img">
            <h4 class="text-center">Easy Website Transfer</h4>
            <p class="text-center">Our experts will migrate your websites and adjust them on our
                web hosting quickly and absolutely free of charge, which will
                spare you all the transferring problems.
            </p>
        </div>
        <div class="support-item">
            <img src="/img/hosting.png" class="d-block mx-auto" alt="hosting-img">
            <h4 class="text-center">Easy Site Management</h4>
            <p class="text-center">Easily manage your site built on the most popular Content
                Management Systems such as Drupal, Joomla, OpenCart,
                PrestaShop, Magento, WordPress, and more.
            </p>
        </div>
        <div class="support-item">
            <img src="/img/2.png" class="d-block mx-auto" alt="ultra-fast-img">
            <h4 class="text-center">Ultra fast Sites</h4>
            <p class="text-center">Enjoy super fast website performance! We make websites
                fly thanks to servers that run on SSD diskswith NVMe
                and PHP 7 with OpCache.
            </p>
        </div>
        <div class="support-item">
            <img src="/img/security.png" class="d-block mx-auto" alt="security-img">
            <h4 class="text-center">Security First</h4>
            <p class="text-center">We manage the security of your sites at server and application level.
                We offer free Let’s Encrypt SSL that keeps your
                data safe and weekly backups that ensure your peace of mind.
            </p>
        </div>
    </div>
</div>

<marquee behavior="alternate" direction="right" bgcolor="#00ae00" scrollamount="10">
    <img src="/img/m3.png" style="width: 150px; height: auto" alt="">
    <img src="/img/m4.png" style="width: 150px; height: auto" alt="i am img">
    <img src="/img/m5.png" style="width: 150px; height: auto;" alt="i am img">
    <img src="/img/m6.png" style="width: 150px; height: auto" alt="i am img">
    <img src="/img/m7.png" style="width: 150px; height: auto" alt="i am img">
    <img src="/img/m8.png" style="width: 150px; height: auto" alt="i am img">
    <img src="/img/m9.png" style="width: 150px; height: auto" alt="i am img">
</marquee>
@endsection