<!-- // Carousel home -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://localhost/pahawangweb/public/assets/img/carousel-1.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Welcome To Pahawang Island</h5>
                <p>A Paradise for Snorkelers, Located in the South Lampung distric of Lampung Province</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="http://localhost/pahawangweb/public/assets/img/caraousel-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Explore Underwater Paradise</h5>
                <p>One of the most popular activities to do on this island is snorkeling. All snorkelers would be fascinated by the colorful corals and sea life beneath the crystal clear waters of the island.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="http://localhost/pahawangweb/public/assets/img/carousel-3.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Stay at our Luxury Villa </h5>
                <p>Pahawang Andreas Villa is a charming accommodation located on Pahawang Island, a popular destination known for its stunning marine life and clear waters.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- 
// embed video youtube -->
<div class="container py-5 ">
    <h2>The Beauty of Pahawang Island</h2>
    <p>Experience the mesmerizing beauty of Pahawang Island in Marga Punduh District, Pesawaran Regency, Lampung, through this video. Discover the natural charm and stunning seascapes that make Pahawang a top tourist destination in Lampung</p>
    <div class="embed-responsive embed-responsive-21by9 shadow-lg">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wxx9KaO5rJ4?si=v_wAhs0GU4rjC-K5"></iframe>
    </div>
</div>

<!-- 
// Package card list -->
<!-- //Mengambil data dari Database -->

<div class="row row-cols-1 row-cols-md-2 g-4 p-5">
    <?php foreach ($data['package_list'] as $package_list): ?>
        <div class="col">
            <div class="card shadow-lg">

                <img src="http://localhost/pahawangweb/public/assets/img/<?= $package_list['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $package_list['nama_package']; ?></h5>
                    <p class="card-text"><?= $package_list['desc_package']; ?></p>
                    <a type="button" href="<?= BASEURL; ?>/order" class="btn btn-outline-secondary">Purchase Package</a>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>




<!-- 
// Style terpisah untuk resize embeded yt -->
<style>
    .embed-responsive-21by9 {
        position: relative;
        height: 0;
        overflow: hidden;
        padding-bottom: 42.85714%;
    }

    .embed-responsive-21by9 .embed-responsive-item {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        border: 0;
    }
</style>