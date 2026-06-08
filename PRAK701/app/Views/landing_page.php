<!DOCTYPE html>
<html lang="id">
<head>
    <title>Perpustakaan ULM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center p-10 bg-white rounded-xl shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-blue-600 mb-4">Sistem Manajemen Buku</h1>
        <p class="text-gray-600 mb-8">Kelola data buku dengan mudah dan cepat.</p>
        <div class="flex flex-col gap-4">
            <a href="<?= base_url('login') ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded transition">Login ke Sistem</a>
            <a href="<?= base_url('buku') ?>" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-4 rounded transition">Lihat Daftar Buku</a>
        </div>
    </div>
</body>
</html>