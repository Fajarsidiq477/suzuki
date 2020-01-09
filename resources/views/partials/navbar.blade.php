 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/logo_navbar_suzuki.png" width="200px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            

            <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item active">
                            <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('daftar-harga') }}">Daftar Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('testimoni') }}">Testimoni</a>
                        </li>
                        <li class="nav-item mt-2 ml-2">
                            <a href="https://api.whatsapp.com/send?phone=+6281333330974&text=Halo Bengkel Suzuki" class="nav-link btn-booking">
                                <i class="fa fa-whatsapp"></i>
                                <span> Booking Service</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">All New Ertiga</a>
                                <a class="dropdown-item" href="#">All New Ertiga Sport</a>
                                <a class="dropdown-item" href="#">Karimun Wagon R</a>
                                <a class="dropdown-item" href="#">Karimun Wagon R GS</a>
                                <a class="dropdown-item" href="#">Apv New Luxury</a>
                                <a class="dropdown-item" href="#">Apv Arena</a>
                                <a class="dropdown-item" href="#">Ignis</a>
                                <a class="dropdown-item" href="#">Ignis Sport Edition</a>
                                <a class="dropdown-item" href="#">New SX4 S-Cross</a>
                                <a class="dropdown-item" href="#">Baleno</a>
                                <a class="dropdown-item" href="#">Jimny</a>
                                <a class="dropdown-item" href="#">New Carry Pick-Up</a>
                            </div>
                        </li> --}}
                    </ul>

            </div>

           


        </div>

        
        
    </nav>

    {{-- <div class=" tagline_mobile">
        <p class="col-5 text-blue">NJS Setiabudi</p><small class="col"><i class="fa fa-phone"></i> 082216538309 (Kang Arif) </small>
    </div>
     --}}
    <div class="container-fluid py-1 d-flex bg-light">
        <div class="row" style="width:100%!important">

            <div class="col-md-6 text-small-center">

                <span class="ml-md-2 text-blue"> NJS Setiabudi</span>
                <span class="d-md"> - Jl. Setiabudi no. 78, bandung</span>
            </div>
            <div class="col-md-6 text-md-right text-small-center">

                <span class="text-phone"><i class="fa fa-phone"></i> 082216538309 (Kang Arif) </span>
            </div>

        </div>

    </div>



    
    <!-- Navbar End-->