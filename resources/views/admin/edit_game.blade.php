<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game | Astronout Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; }
        .glass-card { background: rgba(22, 15, 41, 0.9); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.05); }
        input, select { background: rgba(255, 255, 255, 0.05) !important; border: 1px solid rgba(255, 255, 255, 0.1) !important; color: white !important; }
        input:focus { border-color: #9333ea !important; ring: 0; outline: none; }
    </style>
</head>
<body class="p-8">

    <div class="max-w-2xl mx-auto">
        <a href="/admin/games" class="text-xs text-purple-400 font-bold uppercase mb-4 inline-block">← Kembali ke Daftar</a>
        
        <div class="glass-card p-10 rounded-[2.5rem] shadow-2xl">
            <h1 class="text-2xl font-black uppercase italic mb-8">Edit Data <span class="text-purple-500">Game</span></h1>

            <form action="/admin/games/{{ $game->id }}/update" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-[10px] font-black uppercase text-gray-500 mb-2">Nama Game</label>
                    <input type="text" name="name" value="{{ $game->name }}" class="w-full px-5 py-3 rounded-xl text-sm">
                </div>

                <div>
                    <label class="block text-[10px] font-black uppercase text-gray-500 mb-2">Slug (URL)</label>
                    <input type="text" name="slug" value="{{ $game->slug }}" class="w-full px-5 py-3 rounded-xl text-sm font-mono text-purple-400">
                </div>

                <div>
                    <label class="block text-[10px] font-black uppercase text-gray-500 mb-2">Ganti Thumbnail (File .jpg)</label>
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('img/logo-game/' . $game->thumbnail) }}" class="w-16 h-16 rounded-xl border border-white/10">
                        <input type="file" name="thumbnail" class="w-full text-xs file:bg-purple-600 file:border-none file:px-4 file:py-2 file:rounded-lg file:text-white file:font-bold">
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-purple-600 hover:bg-purple-500 py-4 rounded-2xl font-black uppercase tracking-widest text-sm transition shadow-lg shadow-purple-600/20">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>