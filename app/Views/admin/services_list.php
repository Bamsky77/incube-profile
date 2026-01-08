<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Kelola Layanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">

<div class="max-w-4xl mx-auto my-10 bg-white border border-slate-200 rounded-2xl shadow-sm p-6">
    <h1 class="text-2xl font-bold mb-4">Administrator - Layanan</h1>

    <a href="<?= site_url('admin/services/create'); ?>"
       class="inline-flex mb-4 px-4 py-2 rounded-lg text-sm font-semibold bg-sky-600 text-white hover:bg-sky-700">
        + Tambah Layanan
    </a>

    <?php if (! empty($services)): ?>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm border border-slate-200">
                <thead class="bg-slate-100">
                <tr>
                    <th class="px-3 py-2 border-b text-left">ID</th>
                    <th class="px-3 py-2 border-b text-left">Judul</th>
                    <th class="px-3 py-2 border-b text-left">Deskripsi</th>
                    <th class="px-3 py-2 border-b text-left">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($services as $service): ?>
                    <tr class="odd:bg-white even:bg-slate-50">
                        <td class="px-3 py-2 border-b"><?= $service['id']; ?></td>
                        <td class="px-3 py-2 border-b"><?= esc($service['title']); ?></td>
                        <td class="px-3 py-2 border-b"><?= esc($service['description']); ?></td>
                        <td class="px-3 py-2 border-b space-x-2">
                            <a href="<?= site_url('admin/services/edit/' . $service['id']); ?>"
                               class="text-xs text-sky-600 hover:underline">Edit</a>
                            <a href="<?= site_url('admin/services/delete/' . $service['id']); ?>"
                               onclick="return confirm('Hapus layanan ini?');"
                               class="text-xs text-rose-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-sm text-slate-500">Belum ada data layanan.</p>
    <?php endif; ?>
</div>

</body>
</html>
