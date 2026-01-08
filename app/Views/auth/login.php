<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">

<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white border border-slate-200 rounded-2xl shadow-sm p-6">
        <h1 class="text-xl font-bold mb-4 text-center">Login Administrator</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="mb-3 text-xs text-red-700 bg-red-100 border border-red-200 rounded-lg px-3 py-2">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('login'); ?>" method="post" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold mb-1" for="username">Username</label>
                <input type="text" name="username" id="username" required
                       value="<?= old('username'); ?>"
                       class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            </div>

            <div>
                <label class="block text-xs font-semibold mb-1" for="password">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
            </div>

            <button type="submit"
                    class="w-full inline-flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold bg-sky-600 text-white hover:bg-sky-700">
                Masuk
            </button>
        </form>
    </div>
</div>

</body>
</html>
