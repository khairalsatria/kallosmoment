@extends('layouts.main')
@section('content')

<body id="home" class="homepage">
<br>
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="section-title text-center mt-2" data-aos="fade-up">Kallos Moment</h3>
            <div class="col-md-11 text-center" data-aos="fade-up" data-aos-delay="300">
                <p>Selamat datang di dunia fotografi saya! Kami adalah kallos moments, vendor fotografi yang bersemangat, berasal dari Sumatera Barat, sekarang berbasis di Padang yang indah. Dengan mata yang tajam terhadap detail dan kecintaan untuk mengabadikan momen paling berharga dalam hidup, kami mengkhususkan diri dalam fotografi pernikahan.</p>
            </div>
        </div>
    </div>

    <section class="video py-5 overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="video-content open-up" data-aos="zoom-out">
                    <div class="video-bg">
                        <img src="image/gallery/gallery23.jpg" alt="video" class="video-image img-fluid">
                    </div>
                    <div class="video-player">
                        <a class="youtube" href="https://www.youtube.com/embed/pjtsGzQjFM4">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#play"></use>
                            </svg>
                            <img src="image/curve.png" alt="pattern" class="text-rotate">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="collection-item d-flex flex-wrap my-5">
                    <div class="col-md-6 column-container">
                        <div class="image-holder">
                            <img src="image/gallery/gallery16.jpg" alt="collection" class="product-image img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 column-container bg-white">
                        <div class="collection-content p-5 m-0 m-md-2">
                            <h3 class="element-title text-uppercase">About Us</h3>
                            <p>Perjalanan kami telah membawa kami ke seluruh Indonesia, tetapi matahari terbenam yang menakjubkan dan pemandangan Santorini yang menakjubkan telah menjadi inspirasi saya. Sebagai fotografer pernikahan, saya bersemangat untuk menawarkan layanan saya tidak hanya di Padang tetapi juga di seluruh Indonesia, menciptakan kenangan abadi di mana pun cerita Anda terungkap.</p>
                            <p>Di halaman saya, Anda akan menemukan berbagai paket fotografi yang disesuaikan dengan kebutuhan Anda, sesi pasangan, pertunangan, pernikahan. Saya berdedikasi untuk menangkap kisah unik Anda dengan kreativitas dan profesionalisme.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="gallery" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
          <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-7 mb-3">
              <h4 class="text-uppercase">Our Gallery</h4>
              <a href="index.html" class="btn-link">View All Gallery >>></a>
            </div>
            <div class="swiper product-swiper open-up" data-aos="zoom-out">
              <div class="swiper-wrapper d-flex">
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                      <a href="index.html">
                        <img src="image/gallery/gallery1.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                      <a href="index.html" class="btn-icon btn-wishlist">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                          <use xlink:href="#heart"></use>
                        </svg>
                      </a>
                      {{-- <div class="product-content">
                        <h5 class="element-title text-uppercase fs-5 mt-3">
                          <a href="index.html">Dark florish onepiece</a>
                        </h5>
                        <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                      <a href="index.html">
                        <img src="image/gallery/gallery2.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                      <a href="index.html" class="btn-icon btn-wishlist">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                          <use xlink:href="#heart"></use>
                        </svg>
                      </a>
                      {{-- <div class="product-content">
                        <h5 class="text-uppercase fs-5 mt-3">
                          <a href="index.html">Baggy Shirt</a>
                        </h5>
                        <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                      <a href="index.html">
                        <img src="image/gallery/gallery3.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                      <a href="index.html" class="btn-icon btn-wishlist">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                          <use xlink:href="#heart"></use>
                        </svg>
                      </a>
                      {{-- <div class="product-content">
                        <h5 class="text-uppercase fs-5 mt-3">
                          <a href="index.html">Cotton off-white shirt</a>
                        </h5>
                        <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                      <a href="index.html">
                        <img src="image/gallery/gallery4.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                      <a href="index.html" class="btn-icon btn-wishlist">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                          <use xlink:href="#heart"></use>
                        </svg>
                      </a>
                      {{-- <div class="product-content">
                        <h5 class="text-uppercase fs-5 mt-3">
                          <a href="index.html">Crop sweater</a>
                        </h5>
                        <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                      <a href="index.html">
                        <img src="image/gallery/gallery11.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                      <a href="index.html" class="btn-icon btn-wishlist">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                          <use xlink:href="#heart"></use>
                        </svg>
                      </a>
                      {{-- <div class="product-content">
                        <h5 class="text-uppercase fs-5 mt-3">
                          <a href="index.html">Crop sweater</a>
                        </h5>
                        <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                        <a href="index.html">
                          <img src="image/gallery/gallery6.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                        <a href="index.html" class="btn-icon btn-wishlist">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#heart"></use>
                          </svg>
                        </a>
                        {{-- <div class="product-content">
                          <h5 class="text-uppercase fs-5 mt-3">
                            <a href="index.html">Crop sweater</a>
                          </h5>
                          <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                        <a href="index.html">
                          <img src="image/gallery/gallery7.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                        <a href="index.html" class="btn-icon btn-wishlist">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#heart"></use>
                          </svg>
                        </a>
                        {{-- <div class="product-content">
                          <h5 class="text-uppercase fs-5 mt-3">
                            <a href="index.html">Crop sweater</a>
                          </h5>
                          <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                        <a href="index.html">
                          <img src="image/gallery/gallery8.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                        <a href="index.html" class="btn-icon btn-wishlist">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#heart"></use>
                          </svg>
                        </a>
                        {{-- <div class="product-content">
                          <h5 class="text-uppercase fs-5 mt-3">
                            <a href="index.html">Crop sweater</a>
                          </h5>
                          <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                        <a href="index.html">
                          <img src="image/gallery/gallery9.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                        <a href="index.html" class="btn-icon btn-wishlist">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#heart"></use>
                          </svg>
                        </a>
                        {{-- <div class="product-content">
                          <h5 class="text-uppercase fs-5 mt-3">
                            <a href="index.html">Crop sweater</a>
                          </h5>
                          <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                        <a href="index.html">
                          <img src="image/gallery/gallery10.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                        <a href="index.html" class="btn-icon btn-wishlist">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#heart"></use>
                          </svg>
                        </a>
                        {{-- <div class="product-content">
                          <h5 class="text-uppercase fs-5 mt-3">
                            <a href="index.html">Crop sweater</a>
                          </h5>
                          <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
              </svg></div>
            <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
              </svg></div>
          </div>
      </section>




      <section id="packages" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
        <div class="container">
          <div class="d-flex flex-wrap justify-content-between align-items-center mt-7 mb-3">
            <h4 class="text-uppercase">OUR PACKAGES</h4>
            <a href="/user.pemesanan" class="btn-link">Booking</a>
          </div>
          <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
              <div class="swiper-slide">
                <div class="product-item1 image-zoom-effect link-effect">
                  <div class="image-holder">
                    <a href="/user.pemesanan">
                      <img src="image/packages/basic1.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="/user.pemesanan" class="btn-icon btn-wishlist">
                      <svg width="24" height="24" viewBox="0 0 24 24">

                      </svg>
                    </a>
                    <div class="product-content">
                      <h5 class="text-uppercase fs-5 mt-3">
                        <a href="/user.pemesanan">BASIC PACKAGE</a>
                      </h5>
                      <a href="/user.pemesanan" class="text-decoration-none" data-after="Book Now"><span>IDR 3.000.000</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-item1 image-zoom-effect link-effect">
                  <div class="image-holder">
                    <a href="/user.pemesanan">
                      <img src="image/packages/silver.jpg" alt="product" class="product-image img-fluid">
                    </a>
                    <a href="/user.pemesanan" class="btn-icon btn-wishlist">
                      <svg width="24" height="24" viewBox="0 0 24 24">

                      </svg>
                    </a>
                    <div class="product-content">
                      <h5 class="text-uppercase fs-5 mt-3">
                        <a href="/user.pemesanan">SILVER PACKAGE</a>
                      </h5>
                      <a href="/user.pemesanan" class="text-decoration-none" data-after="Book Now"><span>IDR 4.000.000</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-item1 image-zoom-effect link-effect">
                  <div class="image-holder">
                    <a href="/user.pemesanan">
                      <img src="image/packages/gold.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="/user.pemesanan" class="btn-icon btn-wishlist">
                      <svg width="24" height="24" viewBox="0 0 24 24">

                      </svg>
                    </a>
                    <div class="product-content">
                      <h5 class="text-uppercase fs-5 mt-3">
                        <a href="/user.pemesanan">GOLD PACKAGE</a>
                      </h5>
                      <a href="/user.pemesanan" class="text-decoration-none" data-after="Book Now"><span>IDR 6.500.000</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-item1 image-zoom-effect link-effect">
                  <div class="image-holder">
                    <a href="/user.pemesanan">
                      <img src="image/packages/prewedding.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="/user.pemesanan" class="btn-icon btn-wishlist">
                      <svg width="24" height="24" viewBox="0 0 24 24">

                      </svg>
                    </a>
                    <div class="product-content">
                      <h5 class="text-uppercase fs-5 mt-3">
                        <a href="/user.pemesanan">PREWEDDING PACKAGE</a>
                      </h5>
                      <a href="/user.pemesanan" class="text-decoration-none" data-after="Book Now"><span>IDR 1.800.000</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-item1 image-zoom-effect link-effect">
                  <div class="image-holder">
                    <a href="/user.pemesanan">
                      <img src="image/packages/custom.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="/user.pemesanan" class="btn-icon btn-wishlist">
                      <svg width="24" height="24" viewBox="0 0 24 24">

                      </svg>
                    </a>
                    <div class="product-content">
                      <h5 class="text-uppercase fs-5 mt-3">
                        <a href="/user.pemesanan">CUSTOM PACKAGE</a>
                      </h5>
                      <a href="/user.pemesanan" class="text-decoration-none" data-after="Book Now"><span>IDR X.XXX.XXX</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-item1 image-zoom-effect link-effect">
                  <div class="image-holder">
                    <a href="/user.pemesanan">
                      <img src="image/packages/fileonly.jpg" alt="categories" class="product-image img-fluid">
                    </a>
                    <a href="/user.pemesanan" class="btn-icon btn-wishlist">
                      <svg width="24" height="24" viewBox="0 0 24 24">

                      </svg>
                    </a>
                    <div class="product-content">
                      <h5 class="text-uppercase fs-5 mt-3">
                        <a href="/user.pemesanan">FILE ONLY PACKAGE</a>
                      </h5>
                      <a href="/user.pemesanan" class="text-decoration-none" data-after="Book Now"><span>IDR 1.500.000</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
              <use xlink:href="#arrow-left"></use>
            </svg></div>
          <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
              <use xlink:href="#arrow-right"></use>
            </svg></div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-center">
              {{-- <h1 class="section-title text-center mt-4" data-aos="fade-up">New Collections</h1> --}}
              <div class="col-md-11 text-center" data-aos="fade-up" data-aos-delay="300">
                <p>*Semua Package sudah termasuk akad dan resepsi serta postweding / afterwedding. Waktu pemotretan wedding max
                    19.00. Apabila Lokasi Pesta atau Prewedding berada diluar daerah domisili dari KALLOS MOMENTS, Maka Akomodasi,
                    Kosumsi dan Transportasi akan di Bebankan kepada Calon Client.

                </p>
              </div>
            </div>
      </section>


<br>
      <section id="contact" class="instagram position-relative">
        <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
          <a href="https://www.instagram.com/kallosmoments_/" class="btn btn-dark px-5">Follow us on Instagram</a>
        </div>
        <div class="row g-0">
          <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
              <a href="https://www.instagram.com/kallosmoments_/" target="_blank">
                <img src="image/gallery/gallery19.jpg" alt="instagram" class="insta-image img-fluid">
              </a>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
              <a href="https://www.instagram.com/kallosmoments_/" target="_blank">
                <img src="image/gallery/gallery20.jpg" alt="instagram" class="insta-image img-fluid">
              </a>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
              <a href="https://www.instagram.com/kallosmoments_/" target="_blank">
                <img src="image/gallery/gallery14.jpg" alt="instagram" class="insta-image img-fluid">
              </a>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
              <a href="https://www.instagram.com/kallosmoments_/" target="_blank">
                <img src="image/gallery/gallery5.jpg" alt="instagram" class="insta-image img-fluid">
              </a>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
              <a href="https://www.instagram.com/kallosmoments_/" target="_blank">
                <img src="image/gallery/gallery17.jpg" alt="instagram" class="insta-image img-fluid">
              </a>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
              <a href="https://www.instagram.com/kallosmoments_/" target="_blank">
                <img src="image/gallery/gallery18.jpg" alt="instagram" class="insta-image img-fluid">
              </a>
            </div>
          </div>

        </div>
      </section>


</body>
@endsection
