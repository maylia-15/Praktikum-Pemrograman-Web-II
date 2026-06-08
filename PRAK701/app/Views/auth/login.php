<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login Admin</h2>
        
        <?php if(session()->getFlashdata('error')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 text-sm text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="/login/process" method="POST" class="flex flex-col gap-4">
            <input type="text" name="username" placeholder="Username" class="border p-3 rounded focus:outline-blue-500" required>
            <input type="password" name="password" placeholder="Password" class="border p-3 rounded focus:outline-blue-500" required>
            <button type="submit" class="bg-blue-600 text-white p-3 rounded font-bold hover:bg-blue-700">Login</button>
        </form>
    </div>
</body>
</html>