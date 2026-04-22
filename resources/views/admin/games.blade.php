<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Game | Admin Astronout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; }
        .sidebar { background: rgba(22, 15, 41, 0.95); backdrop-filter: blur(20px); border-right: 1px solid rgba(255, 255, 255, 0.05); }
        .glass-card { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.05); }
        .btn-purple { background: linear-gradient(135deg, #9333ea 0%, #6b21a8 100%); transition: 0.3s; }
        .btn-purple:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(147, 51, 234, 0.4); }
    </style>
</head>
<body class="flex h-screen overflow-hidden">

    <aside class="sidebar w-64 flex-shrink-0 hidden md:flex flex-col">
        <div class="p-8">
            <img src="{{ asset('img/logo-pixel.png') }}" class="h-10 w-auto mb-10">
            <nav class="space-y-3">
                <a href="/admin/dashboard" class="flex items-center space-x-3 text-gray-400 hover:text-white px-4 py-3 rounded-2xl transition text-sm">
                    <span>📊</span> <span>Dashboard</span>
                </a>
                <a href="/admin/games" class="flex items-center space-x-3 bg-purple-600 text-white px-4 py-3 rounded-2xl font-bold text-sm">
                    <span>🎮</span> <span>Kelola Game</span>
                </a>
                <a href="/admin/transactions" class="flex items-center space-x-3 text-gray-400 hover:text-white px-4 py-3 rounded-2xl transition text-sm">
                    <span>💸</span> <span>Riwayat Pesanan</span>
                </a>
            </nav>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto p-8">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-2xl font-black uppercase italic">Daftar <span class="text-purple-500">Game</span></h1>
                <p class="text-[10px] text-gray-500 uppercase tracking-widest mt-1">Total: {{ count($games) }} Game Aktif</p>
            </div>
            <button class="btn-purple px-6 py-3 rounded-2xl text-xs font-black uppercase tracking-widest flex items-center space-x-2">
                <span>+</span> <span>Tambah Game Baru</span>
            </button>
        </header>

        <div class="glass-card rounded-[2.5rem] overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-white/[0.02] text-[10px] uppercase font-black text-gray-500 tracking-[0.2em]">
                    <tr>
                        <th class="p-6">Thumbnail</th>
                        <th class="p-6">Nama Game</th>
                        <th class="p-6">Slug/ID</th>
                        <th class="p-6">Status</th>
                        <th class="p-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5 text-sm">
                    @foreach($games as $game)
                    <tr class="hover:bg-white/[0.01] transition">
                        <td class="p-6">
                            <div class="w-12 h-12 rounded-xl overflow-hidden border border-white/10">
                                <img src="{{ asset('img/logo-game/' . $game->thumbnail) }}" class="w-full h-full object-cover">
                            </div>
                        </td>
                        <td class="p-6 font-bold uppercase">{{ $game->name }}</td>
                        <td class="p-6 text-gray-500 font-mono">{{ $game->slug }}</td>
                        <td class="p-6">
                            <span class="text-[9px] font-black uppercase px-3 py-1 rounded-full bg-green-500/10 text-green-500 border border-green-500/20">Aktif</span>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center space-x-2">
                                <button class="p-2 bg-blue-500/10 text-blue-500 rounded-lg hover:bg-blue-500 hover:text-white transition">✏️</button>
                                <button class="p-2 bg-red-500/10 text-red-500 rounded-lg hover:bg-red-500 hover:text-white transition">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>