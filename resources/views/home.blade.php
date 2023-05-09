
@include('navigasi')

<section class="hero">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 d-flex flex-column justify-content-center">
                <div>
                    <h1>Halo 👋, Perkenalkan Saya Ryan Adi Saputra</h1>
                    <h2>Mahasiswa S1 Software Engineering di Institut Teknologi Telkom Surabaya</h2>
                    <a href="mailto:riyanadi552@gmail.com" class="cta-hero">Get in touch</a>
                </div>
            </div>
            <div class="col-lg-6 hero-img">
                <img src="{{ ('assets/img/hero-img.png') }}" class="img-fluid" alt="hero-img.png">
            </div>
        </div>
    </div>

</section>

@include('footer')
