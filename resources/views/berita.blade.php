
@include('navigasi')

<section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li>Berita</li>
        </ol>
        <h2>Berita</h2>

      </div>
</section>

<section>
    <div class="container">
        <p>
            Ini adalah halaman berita
        </p>
    </div>
</section>

@include('footer')
