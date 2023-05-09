
@include('navigasi')

<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li>Tentang</li>
        </ol>
        <h2>Tentang Saya</h2>

    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column justify-content-center">
                <div class="content">   
                    <p>
                        Halo 👋! Saya Ryan Adi Saputra, dan saya adalah mahasiswa S1 Software Engineering di Institut Teknologi Telkom Surabaya. Sebagai penerima Aperti BUMN Scholarship pada tahun 2021, saya berkomitmen untuk memperoleh pengalaman dan pengetahuan di bidang pengembangan perangkat lunak. Saya mengkhususkan diri dalam desain UI/UX dan pengembangan front-end serta senang mengambil proyek-proyek yang menantang untuk meningkatkan keterampilan saya. Dengan dedikasi yang kuat terhadap pekerjaan saya, saya bertujuan untuk memberikan hasil yang luar biasa dan melebihi harapan. Terima kasih telah mengunjungi situs web saya, dan jangan ragu untuk menghubungi saya untuk pertanyaan atau kolaborasi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')