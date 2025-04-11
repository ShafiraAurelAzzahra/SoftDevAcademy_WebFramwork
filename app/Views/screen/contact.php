<section class="contact section-padding" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12 mx-auto">

                <h2 class="mb-4 text-center" data-aos="fade-up">Apa Ada Saran?</h2>

                <!-- Notifikasi -->
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <!-- Form -->
                <form id="contact-form" class="contact-form" action="<?= base_url('/contact/send'); ?>" method="post" role="form" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name"
                                value="<?= old('name') ?>" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Email address"
                                value="<?= old('email') ?>" required>
                        </div>
                        <div class="col-12 my-4">
                            <label for="message" class="form-label">Berikan Masukan</label>
                            <textarea name="message" rows="6" class="form-control" id="message"
                                placeholder="Tuliskan Saran Anda" required><?= old('message') ?></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                        </div>
                    </div>
                </form>

                <!-- Popup (opsional, jika pakai JavaScript untuk animasi) -->
                <div id="popup" class="popup" style="display:none;">Pesan Berhasil Dikirim!</div>
            </div>
        </div>
    </div>
</section>