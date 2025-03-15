<section class="contact section-padding" id="contact"> <!-- Bagian ini adalah section untuk kontak dengan padding yang diatur -->
    <div class="container"> <!-- Kontainer untuk mengatur layout -->
        <div class="row"> <!-- Baris untuk mengatur kolom di dalam kontainer -->
            <div class="col-lg-7 col-12 mx-auto"> <!-- Kolom yang mengambil 7 dari 12 kolom pada layar besar, dan penuh pada layar kecil, dengan margin otomatis untuk pusat -->
                <h2 class="mb-4 text-center" data-aos="fade-up">Apa Ada Saran?</h2> <!-- Judul bagian dengan efek animasi fade-up dan teks terpusat -->
                <form id="contact-form" class="contact-form" role="form" data-aos="fade-up"> <!-- Formulir kontak dengan efek animasi fade-up -->
                    <div class="row"> <!-- Baris untuk mengatur kolom di dalam formulir -->
                        <div class="col-lg-6 col-12"> <!-- Kolom untuk input nama, responsif untuk layar besar dan kecil -->
                            <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label> <!-- Label untuk input nama dengan tanda bintang untuk menunjukkan bahwa ini wajib -->
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required> <!-- Input untuk nama dengan placeholder dan wajib diisi -->
                        </div>
                        <div class="col-lg-6 col-12"> <!-- Kolom untuk input email, responsif untuk layar besar dan kecil -->
                            <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label> <!-- Label untuk input email dengan tanda bintang untuk menunjukkan bahwa ini wajib -->
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required> <!-- Input untuk email dengan pola validasi dan wajib diisi -->
                        </div>
                        <div class="col-12 my-4"> <!-- Kolom untuk textarea, mengambil seluruh lebar -->
                            <label for="message" class="form-label">Berikan Masukan</label> <!-- Label untuk textarea -->
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tuliskan Saran Anda" required></textarea> <!-- Textarea untuk masukan dengan placeholder dan wajib diisi -->
                        </div>
                        <div class="col-12 text-center"> <!-- Kolom untuk tombol kirim, terpusat -->
                            <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button> <!-- Tombol untuk mengirim pesan -->
                        </div>
                    </div>
                </form>
                <div id="popup" class="popup">Pesan Berhasil Dikirim!</div> <!-- Popup untuk menampilkan pesan sukses setelah pengiriman -->
            </div>
        </div>
    </div>
</section>