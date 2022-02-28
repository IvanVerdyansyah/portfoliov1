@extends('layouts.main')

@section('container')
<!-- jumbotron -->
<div class="jumbotron text-center">
    
    <!-- <div class="alert alert-success alert-dismissible col-md-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Pesan kamu berhasil dikirim!
    </div> -->

        @if( session()->has('berhasil') )
        <div class="alert alert-success alert-dismissible col-md-5" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('berhasil') }}
        </div>
        @endif
        
        @if( session()->has('gagal') )
        <div class="alert alert-danger alert-dismissible col-md-5" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('gagal') }}
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <img src="img/jumbotron-ivan.jpeg" title="Ivan Verdyansyah" class="img-circle">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1>Muhammad Ivan Verdyansyah</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>Pelajar | Web Developer | UI Design </p>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->





    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>About</h2>
                    <hr>
                </div>
            </div>

        <div class="row" style="margin-top: 6px;">
            <div class="col-md-offset-2 col-md-8">
                <p class="pKiri text-center">Nama saya adalah Muhammad Ivan Verdyansyah, Lahir di Denpasar, 09 Maret 2005. Saya adalah mahasiswa ke- Juruan Rekayasa Perangkat Lunak kelas 11 dan yang ber sekolah di sekolah SMKN  1 Denpasar. Ivan adalah seorang  yang selalu termotivasi untuk mencoba hal baru, berpikir kritis, optimis dan cepat menerima perubahan baru.</p>
            </div>

            <div class="col-md-offset-2 col-md-8">
                <p class="pKanan text-center">Belajar 1+ tahun dalam web programming, dengan menguasai beragam bahasa pemograman seperti HTML, CSS, Java Script, PHP, dan Database dengan menggunakan code editor Visual Studio Code dan Mysql. Menguasai beragam software seperti Adobe Illustrator, Adobe Photoshop. Berpengalaman dalam pembuatan storyboard, mock-up, dan visual untuk berbagai kebutuhan pemasaran.</p>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <p class="pAtas text-center">"Memperoleh 43 jenis sertifikat dari Turnamen By One dan menduduki posisi 70 besar Turnamen By One se- Indonesia pada game Mobile Legends yang diadakan dari kota Bandung. Pada saat usia 15 tahun hampir menghabiskan waktu 12 jam untuk bermain game Mobile Legends setiap harinya untuk meningkatkan skill."</p>
            </div>
        </div> -->

        <br>

        <div class="row text-center judul-skills">
            <div class="col-md-12">
            <h3>Skills</h3>
            <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="skills">
                    <div class="skill">
                        <div class="skill-nama"><h4 style="padding-top: 0;">HTML</h4></div>
                        <div class="skill-bar">
                            <div class="bar" per="90%" style="max-width: 90%;"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-nama"><h4>CSS</h4></div>
                        <div class="skill-bar">
                            <div class="bar" per="80%" style="max-width: 80%;"></div>
                        </div>
                    </div>
                    
                    <div class="skill">
                        <div class="skill-nama"><h4>Javascript</h4></div>
                        <div class="skill-bar">
                            <div class="bar" per="50%" style="max-width: 50%;"></div>
                        </div>
                    </div>
                    
                    <div class="skill">
                        <div class="skill-nama"><h4>PHP & Mysql</h4></div>
                        <div class="skill-bar">
                            <div class="bar" per="73%" style="max-width: 73%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-3">
                <div class="body satu">
                    <div class="grafik satu">
                        <div class="bar satu" style="--percentage: 190; --fill: #02bc82"></div>
                        <h2 class="anima">90%</h2>
                        <p class="skill">Web Development</p> 
                    </div> 
                </div>
            </div>

            <div class="col-md-3">
                <div class="body dua">
                    <div class="grafik dua"></div> 
                    <div class="bar dua" style="--percentage: 180; --fill: #345af4"></div>
                    <h2 class="anima">80%</h2>
                    <p class="skill">UI UX Design</p> 
                </div>
            </div>

            <div class="col-md-3">
                <div class="body tiga">
                    <div class="grafik tiga"></div> 
                    <div class="bar tiga" style="--percentage: 168; --fill: #fcf33f"></div>
                    <h2 class="anima">68%</h2>
                    <p class="skill">Web Design</p> 
                </div>
            </div>

            <div class="col-md-3">
                <div class="body empat">
                    <div class="grafik empat"></div> 
                    <div class="bar empat" style="--percentage: 150; --fill: #fd0002"></div>
                    <h2 class="anima">50%</h2>
                    <p class="skill">IoT System</p> 
                </div>
            </div>
        </div> -->
        
        
    </div>


</section>
    <!-- end about -->






    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Portfolio</h2>
            </div>
        </div>

        <div class="row">            
            <div class="col-md-4">
                <a href="/img/lightbox-1.png" data-lightbox="roadtrip" data-title="ZEED LIQUID - Landing Page, Seluruh Hak Cipta 2022" class="thumbnail">
                    <img src="img/portfolio-1.png">
                    <div class="img-overlay img-overlay-blur">
                        <p class="img-judul">Landing Page</p>
                    </div>
                </a>
            </div>
            
            <!-- <div class="col-md-4">
                <a href="img/portfolio-8.jpg" data-lightbox="roadtrip" data-title="Portrait fotografi landscape 'Suasana Kolam Renang', 2 Januari 2022" class="thumbnail">
                    <img src="img/portfolio-8.jpg" title="Portrait 'Kolam Renang'">
                    <div class="img-overlay img-overlay-blur">
                        <p class="img-judul">Pool</p>
                    </div>
                </a>
            </div> -->
            
            <!-- <div class="col-md-4">
                <a href="img/lightbox-3.jpg" data-lightbox="roadtrip" data-title="Portrait fotografi landscape 'Matahari Tenggelam', 27 Maret 2021" class="thumbnail">
                    <img src="img/portfolio-3.jpg" title="Portrait 'Matahari Tenggelam'">
                    <div class="img-overlay img-overlay-blur">
                        <p class="img-judul">Sunset</p>
                    </div>
                </a>
            </div> -->
        </div>
        
        <!-- <div class="row"> 
            <div class="col-md-4">
                <a href="img/lightbox-9.jpg" data-lightbox="roadtrip" data-title="Portrait fotografi landscape 'Pantai', 27 Maret 2021" class="thumbnail">
                    <img src="img/portfolio-9.jpg" title="Portrait 'Kerang Pantai'">
                    <div class="img-overlay img-overlay-blur">
                        <p class="img-judul">Shell</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-4">
                <a href="img/lightbox-1.jpg" data-lightbox="roadtrip" data-title="Portrait fotografi landscape 'Hutan', 28 November 2020" class="thumbnail">
                    <img src="img/portfolio-1.jpg" title="Portrait 'Hutan'">
                    <div class="img-overlay img-overlay-blur">
                        <p class="img-judul">Bamboo</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="img/lightbox-10.jpg" data-lightbox="roadtrip" data-title="Portrait fotografi landscape 'Danau', 26 Juli 2020" class="thumbnail">
                    <img src="img/portfolio-10.png" title="Portrait 'Danau'">
                    <div class="img-overlay img-overlay-blur">
                        <p class="img-judul">Lake</p>
                    </div>
                </a>
            </div>
        </div> -->
    </div>
</div>
    </section>
    <!-- end portfolio -->







    <!-- contact -->
    <section class="contact" id="contact">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Contact</h2>
                </div>
            </div>

        <form action="/" method="post" class="feedback">
            <div class="box">
                @csrf
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group @error('nama') has-error @enderror">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" placeholder="Masukkan nama" class="form-control" name="nama">
                            @error('nama')
                            <span id="nama" class="help-block" style="color: rgba(184, 0, 0, 1);">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group @error('email') has-error @enderror">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="Masukkan email" class="form-control" name="email">
                            @error('email')
                            <span id="nama" class="help-block" style="color: rgba(184, 0, 0, 1);">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group @error('nomor') has-error @enderror">
                            <label for="nomor">Nomor Telepon</label>
                            <input type="number" id="nomor" placeholder="Masukkan Nomor Telepon" class="form-control" name="nomor">
                            @error('nomor')
                            <span id="nama" class="help-block" style="color: rgba(184, 0, 0, 1);">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="kategori">Anda sebagai</label>
                            <select class="form-group form-control" id="kategori" name="kategori">
                                <option>Pelajar</option>
                                <option>Guru</option>
                                <option>Staff</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group @error('pesan') has-error @enderror">
                            <label for="pesan">Pesan</label>
                            <textarea id="pesan" class="form-control" rows="7" name="pesan"></textarea>
                            @error('pesan')
                            <span id="nama" class="help-block" style="color: rgba(184, 0, 0, 1);">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-3 col-md-offset-2">
                        <button type="submit" class="btn btn-success">Kirim Pesan</button>
                    </div>
                </div>
            </div>
            
        </form>
        
    </div>

    </section>
    <!-- end contact -->
        
    <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
        </script>
@endsection