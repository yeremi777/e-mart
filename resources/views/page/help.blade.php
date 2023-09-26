@extends('layout.main')

@push('append')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
@endpush

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 style="margin-top: 100px; text-align: center;">Hallo, adakah yang bisa kami bantu?</h2>
                <img class="img-fluid rounded mb-4 mb-lg-0" src="assets/help_and_support.png" alt="" style="">
                <h3 style="margin-top: -50px; text-align: center;">FAQ</h3>
            </div>
        </div>

        <div class="container" style="margin-bottom: 50px">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    <!-- Accordion Example -->
                    <div class="accordion mt-5" id="accordionExample">

                        <!-- Accordion 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Saya pertama kali datang kesini. Apa yang harus saya lakukan?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Anda berkunjung ke tempat situs jual beli barang elektronik. Anda dapat membeli
                                    barang elektronik yang Anda inginkan disini. Anda dapat melakukan registrasi akun
                                    terlebih dahulu untuk melakukan transaksi pembelian. Kemudian, Anda dapat mencari
                                    barang elektronik yang Anda inginkan dan kemudian Klik beli.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 1 -->

                        <!-- Accordion 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Saya ingin mendaftar akun. Bagaimana caranya?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Anda bisa menekan tombol <i>Sign up</i> pada navigation bar. Kemudian Anda diminta
                                    untuk memasukkan identitas untuk mendaftar akun. Setelah Anda memasukkan
                                    identitas, Anda bisa menekan tombol Sign Up dan akun sudah siap untuk digunakan.
                                    Selamat berbelanja !!
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 2 -->

                        <!-- Accordion 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Saya ingin melakukan pembelian. Bagaimana caranya?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Anda diharuskan melakukan Login akun Anda untuk melakukan transaksi pembelian.
                                    Setelah melakukan Login, Anda dapat memilih kategori barang yang tersedia. Setelah
                                    memilih kategori, Anda dapat memilih jenis barang yang ingin Anda beli dan
                                    kemudian Klik beli dan barang yang dipilih telah siap dalam keranjang.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 3 -->

                        <!-- Accordion 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Saya lupa password akun saya. Bagaimana cara memulihkannya?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Anda dapat memulihkan password dengan masuk ke halaman Sign in dan tekan tombol
                                    reset password. Kemudian Anda diminta untuk memasukkan username dan password baru
                                    Anda. Akun anda berhasil dipulihkan.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 4 -->

                        <!-- Accordion 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Saya ingin menghapus item dalam keranjang saya. Bagaimana caranya?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Anda dapat menghapus list item belanjaan anda dengan masuk ke keranjang dan
                                    menghapusnya dengan menekan tombol remove pada item yang ingin dihilangkan dalam
                                    keranjang belanjaan Anda.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 5 -->

                        <!-- Accordion Example -->
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
