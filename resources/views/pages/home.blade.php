@extends('layouts.main')

@section('container')
{{-- Home Section Start --}}
<section id="home">
    <div class="container-fluid px-2m mb-5 pb-5">
        <div class=" row mx-auto mt-2">
            {{-- Left Side hero --}}
            <div class="col-lg-6 mt-5">
                <div class="p-5">
                    <div class="row mt-5">
                        <div class="col-7">
                            <h2 class="display-2 fw-bold" style="font-weight: 900">Hi<span
                                    style="color:#AACB73;">!</span> I
                                am </h2>
                        </div>
                        <div class="col d-none d-xl-block">
                            <div class="ellipse">
                                <span>
                                    <h2 class="display-2 text-white ms-4 pt-1">DEV</h2>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="display-1 fw-bold">Fariz Ammar </h2>
                        </div>
                    </div>
                    <p>
                        Memperkenalkan diri kami sebagai profesional dan kreatif.
                    </p>
                    <div class="button mt-5">
                        <div class="btn btn-secondary">Hire Me</div>
                        <a class="btn position-relative" role="button">
                            Projects
                            <span class="position-absolute top-25 start-100 translate-middle">
                                <i class='bx bx-right-top-arrow-circle'></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Right Side hero --}}
            <div class="col-lg-6 d-none d-lg-block">
                <img class="w-100" src="/assets/img/Work_from_home.jpg" alt="Hero Image">
            </div>
        </div>
    </div>
</section>
{{-- Home Section End --}}

{{-- About Section Start --}}
<section id="about">
    <div class="container-fluid h-auto mb-5">
        <div class="row mx-auto">
            {{-- Left Side about --}}
            <div class="col-lg-6">
                <div class="px-5 mt-3">
                    <div class="row">
                        <div class="col">
                            <h2 class="display-5 fw-bold" style="font-weight: 900; color:#AACB73;">About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h2 class="display-1 fw-bold">Hi There!</h2>
                        </div>
                    </div>
                    <div class="row">
                        <p class="mt-4" style="text-align: justify;">
                            Menjadi bagian dari dunia IT selama 8 tahun memberikan saya kesempatan untuk terus
                            berkembang
                            dan beradaptasi dengan perubahan teknologi. Saya yakin bahwa latar belakang dan pengalaman
                            saya
                            akan memberikan nilai tambah bagi setiap proyek yang saya kerjakan.
                        </p>
                    </div>

                    {{-- Tagging Start --}}
                    <div class="tagging mt-5">
                        <div class="tag mb-3">
                            <div class="btn btn-outline-primary px-3">
                                HTML / CSS
                            </div>
                            <div class="btn btn-outline-primary px-3">
                                PHP
                            </div>
                            <div class="btn btn-outline-primary px-3">
                                C#
                            </div>
                        </div>
                        <div class="tag mb-3">
                            <div class="btn btn-outline-primary px-3">
                                Laravel
                            </div>
                            <div class="btn btn-outline-primary px-3">
                                Javascript
                            </div>
                            <div class="btn btn-outline-primary px-3">
                                Python
                            </div>
                        </div>
                        <div class="tag mb-3">
                            <div class="btn btn-outline-primary px-3">
                                Codeigniter 4
                            </div>
                            <div class="btn btn-outline-primary px-3">
                                UI
                            </div>
                            <div class="btn btn-outline-primary px-3">
                                UX
                            </div>
                        </div>
                        <div class="tag mb-3">
                            <div class="btn btn-outline-primary px-3">
                                Prototyping
                            </div>
                        </div>
                    </div>
                    {{-- Tagging End --}}
                </div>
            </div>
            {{-- Right Side hero --}}
            <div class="col-lg-6">
                <div class="px-5 ">
                    <div class="row mt-4 mb-2">
                        <div class="col mt-5">
                            <h2 class=" fw-bold">My Careers</h2>
                        </div>
                    </div>
                    <div class="row">
                        <p class="mt-4" style="text-align: justify;">
                            Menjadi bagian dari industri IT selama beberapa tahun membuat saya memiliki pemahaman yang
                            luas dan beragam tentang berbagai teknologi dan proyek. Sejak bekerja sebagai Web Developer
                            di PT Rianggis Indonesia hingga sekarang sebagai Analyst Programmer di PT Ringkat Teknologi
                            Muliautama, saya selalu berupaya untuk berkembang dan membantu klien saya mencapai
                            tujuannya.
                        </p>
                    </div>

                    {{-- Images --}}
                    <div class="row mt-4">
                        <div class="col d-flex justify-content-center">
                            <div class="ellipse2 d-flex justify-content-center align-items-center">
                                <div class="ellipse3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- About Section End --}}

{{-- Section Project Start --}}
<section id="project" class="pb-5">
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col">
                <h2 class="title text-center">
                    Projects
                </h2>
                <h1 class="display-4 text-center text-light fw-bold">Project Terbaru</h1>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <p class="text-center text-light w-50 d-flex jusify-content-center">
                    Kami memberikan beberapa sample gambar, kumpulan project terbaru yang telah kami buat
                    untuk memberikan suatu reverensi anda.
                </p>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-4 mx-4">
                <img class="img-fluid h-75 rounded" src="/assets/img/Post1.jpg" alt="Postingan pertama">
                <h5 class="text-white text-uppercase fw-bold mt-3">Wallet</h5>
                <p class="text-light">
                    Website dengan design yang memukau, elegan responsive dan modern.
                </p>
            </div>
            <div class="col-lg-4 mx-4">
                <img class="img-fluid h-75 rounded" src="/assets/img/Post2.jpg" alt="Postingan pertama">
                <h5 class="text-white text-uppercase fw-bold mt-3">Landing Page</h5>
                <p class="text-light">
                    Website yang baik untuk anda pertama kali memulai bisnis baru.

                </p>
            </div>
        </div>
    </div>
</section>
{{-- Section Project End --}}

{{-- Section Contact Start --}}
<section id="contact" class="pb-5">
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col">
                <h2 class="title text-center mb-4">
                    Contact Us
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <p class="text-center w-50 d-flex jusify-content-center">
                    Jika Anda memiliki pertanyaan atau ingin berbicara dengan kami,
                    jangan ragu untuk mengirim pesan melalui halaman ini.
                    Kami akan segera menjawab Anda.
                </p>
            </div>
        </div>
        {{-- Contact Form Start --}}
        <div class="container mt-5">
            <form class="row g-3" method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-6">
                    <label for="intrested" class="form-label">What Are You Intrested?</label>
                    <select class="form-control" name="intrested" id="intrested">
                        <option value="" selected hidden>- Choose Your Option -</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="budget" class="form-label">Project Budget</label>
                    <select class="form-control" name="budget" id="budget">
                        <option value="" selected hidden>- Choose Your Option -</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="messsage" id="message" cols="20" rows="5"
                        placeholder="Write your message (Max. 200)"></textarea>
                </div>
                <div class="col-12 btn-submit">
                    <button type="submit" class="btn btn-outline-primary">Send Message</button>
                </div>
            </form>
        </div>
        {{-- Contact Form End --}}
    </div>
</section>
{{-- Section Contact End --}}

@endsection
