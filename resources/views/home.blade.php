@extends('layouts.main')
@section('content')

<br>
    <div id="home" class="container ">
        <div class="row justify-content-center">
            <h3 class="section-title text-center mt-2" data-aos="fade-up">KALLOS MOMENTS</h3>
            <div class="col-md-11 text-center" data-aos="fade-up" data-aos-delay="300">
                <p>Selamat datang di dunia fotografi saya! Kami adalah kallos moments, vendor fotografi yang bersemangat, berasal dari Sumatera Barat, sekarang berbasis di Padang yang indah. Dengan mata yang tajam terhadap detail dan kecintaan untuk mengabadikan momen paling berharga dalam hidup, kami mengkhususkan diri dalam fotografi pernikahan.</p>
            </div>
        </div>
    </div>

    {{-- <main class="flex-shrink-0 content">
        <div class="container">
            <section id="profile-settings" class="bg-light py-5 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-uppercase text-center mb-4">Profile Settings</h3>
                            <form action="{{ route('profile.update') }}" method="POST" class="mt-4"> <!-- Tambahkan kelas mt-4 di sini -->
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep current password">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
</div>
</main> --}}

    <main class="flex-shrink-0 content">
        <div class="container">
            <section class="video py-5 overflow-hidden flex-shrink-0 content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="video-content open-up" data-aos="zoom-out">
                            <div class="video-bg">
                                <img src="image/gallery/gallery23.jpg" alt="video" class="video-image img-fluid">
                            </div>
                            <div class="video-player">
                                <a href="https://www.youtube.com/@hafizenaldo8068">
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
            </div>
    </main>

    <section id="about" class="bg-light position-relative ">
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

    <section id="gallery" class="bg-light new-arrival product-carousel py-5 position-relative overflow-hidden">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-7 mb-3">
                <h4 class="text-uppercase">Our Gallery</h4>
                <a href="https://www.instagram.com/kallosmoments_/" class="btn-link">check at our instagram</a>
            </div>
            <div class="swiper product-swiper open-up" data-aos="zoom-out">
                <div class="swiper-wrapper d-flex">
                    @foreach($gallerys as $gallery)
                        <div class="swiper-slide">
                            <div class="product-item image-zoom-effect link-effect">
                                <div class="image-holder position-relative">
                                    <img src="{{ asset('storage/' . $gallery->image_gallery) }}" alt="Gallery Image" class="product-image img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="icon-arrow icon-arrow-left">
                <svg width="50" height="50" viewBox="0 0 24 24">
                    <use xlink:href="#arrow-left"></use>
                </svg>
            </div>
            <div class="icon-arrow icon-arrow-right">
                <svg width="50" height="50" viewBox="0 0 24 24">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </div>
        </div>
    </section>


    {{-- <section id="gallery" class="bg-light new-arrival product-carousel py-5 position-relative overflow-hidden">
          <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-7 mb-3">
              <h4 class="text-uppercase">Our Gallery</h4>
              <a href="https://www.instagram.com/kallosmoments_/" class="btn-link">check at our instagram</a>
            </div>
            <div class="swiper product-swiper open-up" data-aos="zoom-out">
              <div class="swiper-wrapper d-flex">
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                        <img src="image/gallery/gallery1.jpg" alt="categories" class="product-image img-fluid">
                      </a>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                        <img src="image/gallery/gallery2.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                        <img src="image/gallery/gallery3.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                        <img src="image/gallery/gallery4.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-item image-zoom-effect link-effect">
                    <div class="image-holder position-relative">
                        <img src="image/gallery/gallery11.jpg" alt="categories" class="product-image img-fluid">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                          <img src="image/gallery/gallery6.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                          <img src="image/gallery/gallery7.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                          <img src="image/gallery/gallery8.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                          <img src="image/gallery/gallery9.jpg" alt="categories" class="product-image img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                      <div class="image-holder position-relative">
                          <img src="image/gallery/gallery10.jpg" alt="categories" class="product-image img-fluid">
                        </a>
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
    </section> --}}

    <section id="packages" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
        <div class="container">
            @if(Auth::check() && Auth::user()->role == 'pelanggan')
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-7 mb-3">
                <h4 class="text-uppercase">OUR PACKAGES</h4>
                <a href="{{ route('pemesanan.create') }}" class="btn-link">Booking Now</a>
            </div>
            <div class="swiper product-swiper open-up" data-aos="zoom-out">
                <div class="swiper-wrapper d-flex">
                    @foreach($kategoris as $kategori)
                    <div class="swiper-slide">
                        <div class="product-item1 image-zoom-effect link-effect">
                            <div class="image-holder">
                                <a href="{{ route('pemesanan.create', ['kategori_id' => $kategori->id]) }}">
                                    <img src="{{ asset('storage/' . $kategori->gambar_kategori) }}" alt="{{ $kategori->nama_kategori }}" class="product-image img-fluid">
                                </a>
                                <a href="{{ route('pemesanan.create', ['kategori_id' => $kategori->id]) }}" class="btn-icon btn-wishlist">
                                    <svg width="24" height="24" viewBox="0 0 24 24"></svg>
                                </a>
                                <div class="product-content">
                                    <h5 class="text-uppercase fs-5 mt-3">
                                        <a href="{{ route('pemesanan.create', ['kategori_id' => $kategori->id]) }}">{{ $kategori->nama_kategori }}</a>
                                    </h5>
                                    <a href="{{ route('pemesanan.create', ['kategori_id' => $kategori->id]) }}" class="text-decoration-none" data-after="Book Now">
                                        <span>IDR {{ number_format($kategori->harga, 0, ',', '.') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            @else
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-7 mb-3">
                <h4 class="text-uppercase">OUR PACKAGES</h4>
                <a href="{{ route('login') }}" class="btn-link">Booking Now</a>
            </div>
            <div class="swiper product-swiper open-up" data-aos="zoom-out">
                <div class="swiper-wrapper d-flex">
                    @foreach($kategoris as $kategori)
                    <div class="swiper-slide">
                        <div class="product-item1 image-zoom-effect link-effect">
                            <div class="image-holder">
                                <a href="{{ route('login', ['kategori_id' => $kategori->id]) }}">
                                    <img src="{{ asset('storage/' . $kategori->gambar_kategori) }}" alt="{{ $kategori->nama_kategori }}" class="product-image img-fluid">
                                </a>
                                <a href="{{ route('login', ['kategori_id' => $kategori->id]) }}" class="btn-icon btn-wishlist">
                                    <svg width="24" height="24" viewBox="0 0 24 24"></svg>
                                </a>
                                <div class="product-content">
                                    <h5 class="text-uppercase fs-5 mt-3">
                                        <a href="{{ route('login', ['kategori_id' => $kategori->id]) }}">{{ $kategori->nama_kategori }}</a>
                                    </h5>
                                    <a href="{{ route('login', ['kategori_id' => $kategori->id]) }}" class="text-decoration-none" data-after="Book Now">
                                        <span>IDR {{ number_format($kategori->harga, 0, ',', '.') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            @endif
            <div class="icon-arrow icon-arrow-left">
                <svg width="50" height="50" viewBox="0 0 24 24">
                    <use xlink:href="#arrow-left"></use>
                </svg>
            </div>
            <div class="icon-arrow icon-arrow-right">
                <svg width="50" height="50" viewBox="0 0 24 24">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 text-center" data-aos="fade-up" data-aos-delay="300">
                    <p>*Semua Package sudah termasuk akad dan resepsi serta postweding / afterwedding. Waktu pemotretan wedding max 19.00. Apabila Lokasi Pesta atau Prewedding berada diluar daerah domisili dari KALLOS MOMENTS, Maka Akomodasi, Kosumsi dan Transportasi akan di Bebankan kepada Calon Client.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="instagram position-relative  ">
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


<footer id="footer" class="  mt-5">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between py-5">
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-001">
            <div class="footer-intro mb-4">
                <h5 class="widget-title text-uppercase mb-4">Kallos Moment</h5>
            </div>
            <p>𝚎𝚟𝚎𝚛𝚢 𝚖𝚘𝚖𝚎𝚗𝚝 𝚝𝚑𝚎𝚛𝚎 𝚖𝚞𝚜𝚝 𝚊𝚕𝚠𝚊𝚢𝚜 𝚋𝚎 𝚋𝚎𝚊𝚞𝚝𝚢
                .</p>
            <div class="social-links">
              <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li>
                  <a href="https://www.youtube.com/@hafizenaldo8068">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="https://www.tiktok.com/@kallosmoments">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#tiktok"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/kallosmoments_">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title text-uppercase mb-4">Quick Links</h5>
            <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
              <li class="menu-item">
                <a href="#home" class="item-anchor">Home</a>
              </li>
              @if(Auth::check() && Auth::user()->role == 'pelanggan')
              <li class="menu-item">
                <a href="{{ route('pemesanan.create') }}" class="item-anchor">Booking</a>
              </li>
              @else
              <li class="menu-item">
                <a href="{{ route('login') }}" class="item-anchor">Booking</a>
              </li>
              @endif
              @if(Auth::check() && Auth::user()->role == 'pelanggan')
              <li class="menu-item">
                <a href="{{ route('pemesanan.riwayat') }}" class="item-anchor">Riwayat</a>
              </li>
              <li class="menu-item">
                <a href="{{ route('profile.show') }}" class="item-anchor">Profile</a>
              </li>
              @else
              <li class="menu-item">
                <a href="/register" class="item-anchor">Register</a>
              </li>
              <li class="menu-item">
                <a href="/login" class="item-anchor">Login</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-003">
            <h5 class="widget-title text-uppercase mb-4">Help & Info</h5>
            <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
              <li class="menu-item">
                <a href="#about" class="item-anchor">About</a>
              </li>
              <li class="menu-item">
                <a href="#gallery" class="item-anchor">Gallery</a>
              </li>
              <li class="menu-item">
                <a href="#packages" class="item-anchor">Packages</a>
              </li>
              <li class="menu-item">
                <a href="#contact" class="item-anchor">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-004 border-animation-left">
            <h5 class="widget-title text-uppercase mb-4">Contact Us</h5>
            <p>Do you have any questions or suggestions? <a href="mailto:contact@yourcompany.com"
                class="item-anchor">kallosmomentofficial@gmail.com<br></a>
            <a href="tel:+43 720 11 52 78" class="item-anchor">+62 812 3456 7890</a>
            </p>
          </div>
        </div>
      </div>
    </div>
</footer>
@endsection
