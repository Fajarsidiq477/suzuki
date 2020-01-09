@extends('layouts.app')

@section('carousel')
    <!-- Slider -->
    <div class="main-carousel">
            <div class="carousel-cell">
                <img src="images/banners/1.webp" data-flickity-lazyload="images/banners/1.webp" class="carousel-img" alt="">
            </div>
            <div class="carousel-cell">
                <img src="images/banners/2.webp" data-flickity-lazyload="images/banners/2.webp" class="carousel-img" alt="">
            </div>
            <div class="carousel-cell">
                <img src="images/banners/3.webp" data-flickity-lazyload="images/banners/3.webp" class="carousel-img" alt="">
            </div>
            
        </div>
        <!-- Slider End -->
        
@endsection

@section('content')
    <div class="container">
        {{-- <div class="main__border-left pl-md-3" data-aos="fade-right">
            <h4 class="main__tagline">Berkendara bukan hanya sebuah perjalanan, namun cerita dan kebanggaan.</h4>
            <p class="main__subtagline">Temukan berbagai mobil pilihan Suzuki yang dirancang khusus dengan presisi melalui teknologi modern dan desain stylish sesuai gaya Anda.</p>
        </div> --}}

        <div>
            <h4 class="pl-md-3 main__tagline" data-aos="fade-up">PROMO AKHIR TAHUN SUZUKI</h4>

            <p class="main__subtagline text-justify" data-aos="fade-up">
                Dear pelanggan setia <b>Suzuki di Bandung.</b>
                Kabar gembira buat anda pecinta produk mobil Suzuki.
                PT. Nusantara Jaya Sentosa, Bandung mengadakan <b>promo</b> besar-besaran DENGAN <b>PROMO</b> PAKET DP RINGAN. <b>Promo</b> meliputi potongan harga atau diskon, paket kredit dengan DP ringan dan bunga rendah, pemberian diskon paket servis hingga 15% serta berbagai bonus langsung yang akan
                diberikan oleh tim marketing kami, yaitu berupa E-Money, barang elektronik, aksesoris, dll.
                Dijamin! Inilah <b>Promo</b> Suzuki Bandung Terbaik saat ini untuk Anda Khusus <b>10 Pemesan Pertama</b> Minggu Ini. Mau Beli Suzuki, Jangan mau tanpa <b>Promo Suzuki</b> Bandung ini.
                Berikut <b>Promo</b> Suzuki yang kami sediakan khusus untuk pelanggan setia Suzuki.
                Paket Kredit <b>DP Murah</b> & Bunga Ringan dari Promo Suzuki Bandung
            </p>

            <h4 class="main__tagline" data-aos="fade-up">Dapatkan Promo Suzuki Bandung dari PT. Nusantara Jaya Sentosa Cabang Setiabudhi khusus Minggu Ini dengan fasilitas seperti berikut :</h4>

            <ul data-aos="fade-up">
                <li>Sales</li>
                <li>Paket DP Murah</li>
                <li>Bunga Ringan 3,5%</li>
                <li>Tenor Kredit 1 s/d 6 Tahun</li>
                <li>Proses  Kredit 3 Hari OK</li>
                <li>Data bisa dijemput & dibantu hingga 100 % APPROVE</li>
                <li>Trade In Harga Tertinggi</li>
                <li>Aksesoris Lengkap: Kaca Film, Kotak P3K, Karpet, Dongkrak, Ban Serep, dll</li>
                <li>Free Jasa Servis Sampai 50.000 KM</li>
                <li>Layanan SUZUKI Experience Terbaik</li>
                <li>Service</li>
                <li>Diskon 15% Untuk Booking Service</li>
                <li>Home Service Bebas Biaya</li>
            </ul>
            
                
            <h4 class="main__tagline" data-aos="fade-up">Dapatkan Bonus Langsung untuk penawaran kredit seperti berikut KHUSUS HARI INI :</h4>

            <ul data-aos="fade-up">
                <li>Kaca Film FULL</li>
                <li>Karpet Dasar*</li>
                <li>Anti karat</li>
            </ul>

                










                

                

                

                
            </p>
            
        </div>
        
        <div class="main__header text-center mt-2 mt-md-5" data-aos="fade-up">
            <small>Temukan</small>
            <h3>Mobil Suzuki</h3>
            <p>Yang Tepat Untuk Anda</p>
        </div>

       
    </div>

    <div class="container-fluid">
        <div class="main-content">

            <div class="row px-0 px-md-5 justify-content-center">
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/Brosur-All-New_Ertiga.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>All New Ertiga</h5>
                                <img src="{{ asset('images/cars/all-new-ertiga-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 59.000.000,-</h2>
                                <p class="text_price">Promo DP 13 jt</p>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/yha-brochure.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>All New Ertiga Suzuki Sport</h5>
                                <img src="{{ asset('images/cars/ertiga-sport-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 66.000.000,-</h2>
                                <p class="text_price">Promo DP 17 jt</p>

                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/Brochure-KARIMUN-2019.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>Karimun Wagon R</h5>
                                <img src="{{ asset('images/cars/wagon-r-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 27.000.000,-</h2>
                                <p class="text_price">Promo DP 7 jt</p>

                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/Brochure-KARIMUN-2019.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>Karimun Wagon R GS</h5>
                                <img src="{{ asset('images/cars/b6244-mun-rgs-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 39.000.000,-</h2>
                                <p class="text_price">Promo DP 9 jt</p>

                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Apv New Luxury</h5>
                                <img src="{{ asset('images/cars/APV-New-Luxury-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 234.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Apv Arena</h5>
                                <img src="{{ asset('images/cars/APV-ARENA-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 185.500.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/Brochure-IGNISSE-2019.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>Ignis</h5>
                                <img src="{{ asset('images/cars/ignis-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 33.000.000,-</h2>
                                <p class="text_price">Promo DP 12 jt</p>

                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Ignis Sport Edition</h5>
                                <img src="{{ asset('images/cars/ignis-sport-plain-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 185.000.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/Brochure-SCROSS-2019.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>New SX4 S-Cross</h5>
                                <img src="{{ asset('images/cars/scross-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 61.000.000,-</h2>
                                <p class="text_price">Promo DP 14 jt</p>

                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/BrosurBaleno20191.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>Baleno</h5>
                                <img src="{{ asset('images/cars/baleno-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 40.000.000,-</h2>
                                <p class="text_price">Promo DP 20 jt</p>

                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 mx-auto text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="{{ asset('brochure/Brochure-NEWCARRY-2019.pdf') }}" target="_blank" class="card-link">
                            <div class="card-body">
                                <h5>New Carry Pick-Up</h5>
                                <img src="{{ asset('images/cars/new-carry-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 35.000.000,-</h2>
                                <p class="text_price">Promo DP 11 jt</p>

                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>Jimny</h5>
                                <img src="{{ asset('images/cars/jimny-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 340.500.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
            
            {{-- <h4 class="text-primary-suzuki text-center mt-3" data-aos="fade-up">Commercials Car</h4>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mt-2 mt-md-4 mx-auto text-center" data-aos="fade-up">
                    <div class="card">
                        <a href="" class="card-link">
                            <div class="card-body">
                                <h5>New Carry Pick-Up</h5>
                                <img src="{{ asset('images/cars/new-carry-thumb.jpg')}}" class="img-fluid" alt="all new ertiga">
                                <p>DP</p>
                                <h2 class="text_price_promo"><span class="rp">Rp.</span> 141.800.000,-</h2>
                                <small class="text-muted mt-3">Jelajahi > </small>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>   
    </div>
    


    <div style="width: 100%;height:450px" class="mt-5">
        <iframe width="100%" height="450" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Jl.%20Dr.%20Setiabudi%20No.78%2C%20Pasteur%2C%20Kec.%20Sukajadi%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040141+(Dealer%20Resmi)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no">
        </iframe>
        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    </div>
    
@endsection