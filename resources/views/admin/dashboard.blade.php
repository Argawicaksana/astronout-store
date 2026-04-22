<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | AstroStore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; }
        .sidebar { background: rgba(22, 15, 41, 0.95); backdrop-filter: blur(20px); border-right: 1px solid rgba(255, 255, 255, 0.05); }
        .stat-card { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.05); transition: 0.3s; }
        .stat-card:hover { border-color: #9333ea; box-shadow: 0 0 20px rgba(147, 51, 234, 0.2); }
    </style>
</head>
<body class="flex h-screen overflow-hidden">
    <aside class="sidebar w-64 flex-shrink-0 hidden md:flex flex-col p-8">
        <img src="{{ asset('img/astrostore.png') }}" class="h-10 w-auto mb-10 drop-shadow-[0_0_8px_rgba(147,51,234,0.6)]">
        <nav class="space-y-3">
            <a href="/admin/dashboard" class="flex items-center space-x-3 bg-purple-600 text-white px-4 py-3 rounded-2xl shadow-lg shadow-purple-600/20 font-bold text-sm">
                <span>📊</span> <span>Dashboard</span>
            </a>
            <a href="/admin/games" class="flex items-center space-x-3 text-gray-400 hover:text-white px-4 py-3 rounded-2xl transition text-sm">
                <span>🎮</span> <span>Kelola Game</span>
            </a>
            <a href="/admin/transactions" class="flex items-center space-x-3 text-gray-400 hover:text-white px-4 py-3 rounded-2xl transition text-sm">
                <span>💸</span> <span>Riwayat Pesanan</span>
            </a>
            <a href="/admin/users" class="flex items-center space-x-3 text-gray-400 hover:text-white px-4 py-3 rounded-2xl transition text-sm">
                <span>👥</span> <span>Daftar User</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 overflow-y-auto p-8">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-2xl font-black italic uppercase">Admin <span class="text-purple-500">Dashboard</span></h1>
                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-widest italic font-bold text-purple-400">Pusat Kendali AstroStore</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-right"><p class="text-sm font-bold">{{ Auth::user()->name }}</p></div>
                <div class="w-10 h-10 bg-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-purple-500/20">👨‍🚀</div>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="stat-card p-8 rounded-[2rem]">
                <p class="text-[10px] font-black uppercase text-gray-500 tracking-widest mb-2">Total Pendapatan</p>
                <h3 class="text-2xl font-black italic text-green-400">Rp {{ number_format($total_revenue ?? 0) }}</h3>
            </div>
            <div class="stat-card p-8 rounded-[2rem]">
                <p class="text-[10px] font-black uppercase text-gray-500 tracking-widest mb-2">Total Pengguna</p>
                <h3 class="text-2xl font-black italic text-white">{{ $total_users ?? 0 }} User</h3>
            </div>
            <div class="stat-card p-8 rounded-[2rem]">
                <p class="text-[10px] font-black uppercase text-gray-500 tracking-widest mb-2">Game Aktif</p>
                <h3 class="text-2xl font-black italic text-purple-400">{{ $total_games ?? 0 }} Kategori</h3>
            </div>
        </div>
    </main>
</body>
</html>