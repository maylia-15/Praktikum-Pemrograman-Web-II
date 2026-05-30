<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="cute-card p-5 mt-2">
                <h2 class="text-center mb-4 text-highlight" style="font-weight: 800;">✨ Profilku ✨</h2>
                
                <div class="text-center mb-5">
                    <img src="/img/fotoku.jpeg" alt="Foto " class="shadow-sm" style="width: 160px; height: 160px; object-fit: cover; border-radius: 50%; border: 5px dashed #ffb6c1; padding: 5px; background-color: #ffffff;">
                </div>
                
                <div class="d-flex flex-column gap-4">
                    <div class="pb-3" style="border-bottom: 3px dotted #ffe4e1;">
                        <small class="text-uppercase" style="color: #dda0dd; font-weight: 800; letter-spacing: 1px;">Nama Lengkap</small>
                        <div class="fs-4 mt-1" style="color: #666666; font-weight: 600;"><?= $mahasiswa['nama']; ?></div>
                    </div>
                    
                    <div class="pb-3" style="border-bottom: 3px dotted #ffe4e1;">
                        <small class="text-uppercase" style="color: #dda0dd; font-weight: 800; letter-spacing: 1px;">Nomor Induk Mahasiswa</small>
                        <div class="fs-4 mt-1" style="color: #666666; font-weight: 600;"><?= $mahasiswa['nim']; ?></div>
                    </div>
                    
                    <div class="pb-3" style="border-bottom: 3px dotted #ffe4e1;">
                        <small class="text-uppercase" style="color: #dda0dd; font-weight: 800; letter-spacing: 1px;">Program Studi</small>
                        <div class="fs-4 mt-1" style="color: #666666; font-weight: 600;"><?= $mahasiswa['prodi']; ?></div>
                    </div>

                    <div class="pb-3" style="border-bottom: 3px dotted #ffe4e1;">
                        <small class="text-uppercase" style="color: #dda0dd; font-weight: 800; letter-spacing: 1px;">Fakultas</small>
                        <div class="fs-4 mt-1" style="color: #666666; font-weight: 600;"><?= $mahasiswa['fakultas']; ?></div>
                    </div>
                    
                    <div class="pb-3" style="border-bottom: 3px dotted #ffe4e1;">
                        <small class="text-uppercase" style="color: #dda0dd; font-weight: 800; letter-spacing: 1px;">Hobi</small>
                        <div class="fs-5 mt-1 lh-base" style="color: #666666; font-weight: 600;"><?= $mahasiswa['hobi']; ?></div>
                    </div>
                    
                    <div class="pt-1">
                        <small class="text-uppercase" style="color: #dda0dd; font-weight: 800; letter-spacing: 1px;">Kemampuan Teknis</small>
                        <div class="fs-5 mt-1 lh-base" style="color: #666666; font-weight: 600;"><?= $mahasiswa['skill']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>