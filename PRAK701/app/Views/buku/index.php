<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Daftar Buku</h1>
            <div class="flex gap-4">
                <a href="/buku/create" class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600">+ Tambah Buku</a>
                <a href="/logout" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600">Logout</a>
            </div>
        </div>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="p-4 border-b">Judul</th>
                        <th class="p-4 border-b">Penulis</th>
                        <th class="p-4 border-b">Penerbit</th>
                        <th class="p-4 border-b">Tahun</th>
                        <th class="p-4 border-b text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($buku as $b): ?>
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="p-4"><?= $b['judul'] ?></td>
                        <td class="p-4"><?= $b['penulis'] ?></td>
                        <td class="p-4"><?= $b['penerbit'] ?></td>
                        <td class="p-4"><?= $b['tahun_terbit'] ?></td>
                        <td class="p-4 text-center flex justify-center gap-2">
                            <a href="/buku/edit/<?= $b['id'] ?>" class="text-blue-500 hover:text-blue-700">Edit</a>
                            <a href="/buku/delete/<?= $b['id'] ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Yakin hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>