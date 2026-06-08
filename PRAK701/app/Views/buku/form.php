<!DOCTYPE html>
<html lang="id">
<head>
    <title><?= isset($buku) ? 'Edit' : 'Tambah' ?> Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800"><?= isset($buku) ? 'Edit Buku' : 'Tambah Buku Baru' ?></h2>
        
        <?php if(session()->getFlashdata('errors')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 text-sm">
                <ul class="list-disc pl-5">
                    <?php foreach(session()->getFlashdata('errors') as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= isset($buku) ? '/buku/update/'.$buku['id'] : '/buku/store' ?>" method="POST" class="flex flex-col gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Judul Buku</label>
                <input type="text" name="judul" value="<?= old('judul', $buku['judul'] ?? '') ?>" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
                <input type="text" name="penulis" value="<?= old('penulis', $buku['penulis'] ?? '') ?>" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Penerbit</label>
                <input type="text" name="penerbit" value="<?= old('penerbit', $buku['penerbit'] ?? '') ?>" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="<?= old('tahun_terbit', $buku['tahun_terbit'] ?? '') ?>" class="w-full border p-2 rounded">
            </div>
            
            <div class="flex gap-4 mt-4">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 w-full">Simpan</button>
                <a href="/buku" class="bg-gray-400 text-white py-2 px-4 rounded hover:bg-gray-500 w-full text-center">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>