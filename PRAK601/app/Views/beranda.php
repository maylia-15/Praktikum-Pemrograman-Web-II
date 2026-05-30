<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="row justify-content-center mt-4">
        <div class="col-md-9">
            <div class="cute-card p-5 text-center">
                <h1 class="display-4 mb-3" style="font-weight: 800; color: #ffb6c1;">Halo semuanya! 🌸</h1>
                <h2 class="mb-4 text-secondary" style="font-weight: 600;">
                    Kenalin, aku <?= $mahasiswa['nama']; ?></span> 
                </h2>
                <h4 class="mb-4">
                    NIM: <?= $mahasiswa['nim']; ?></span>
                </h4>
                <p class="lead mt-4 px-md-5" style="color: #888888; font-weight: 600; line-height: 1.8;">
                    Selamat datang di halaman beranda praktikum Pemrograman Web II! <br>
                    Pergi ke gapura bersama Akbar, Hai ka Naura! Apa Kabar??
                </p>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>