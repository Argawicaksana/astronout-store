<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User | AstroStore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; overflow-x: hidden; }
        .sidebar { background: rgba(22, 15, 41, 0.95); backdrop-filter: blur(20px); border-right: 1px solid rgba(255, 255, 255, 0.05); }
        .glass-card { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .status-active { background: rgba(16, 185, 129, 0.1); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.2); }
    </style>
</head>
<body class="flex h-screen">

    <aside class="sidebar w-64 flex-shrink-0 flex flex-col p-8">
        <div class="mb-10">
            <img src="{{ asset('img/astrostore.png') }}" class="h-12 w-auto mx-auto drop-shadow-[0_0_10px_rgba(147,51,234,0.5)]">
        </div>
        <nav class="space-y-3 flex-1">
            <a href="/admin/dashboard" class="flex items-center space-x-3 text-gray-400 hover:text-white px-5 py-3 rounded-2xl transition text-sm">
                <span>📊</span> <span>Dashboard</span>
            </a>
            <a href="/admin/games" class="flex items-center space-x-3 text-gray-400 hover:text-white px-5 py-3 rounded-2xl transition text-sm">
                <span>🎮</span> <span>Kelola Game</span>
            </a>
            <a href="/admin/users" class="flex items-center space-x-3 bg-purple-600 text-white px-5 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-purple-600/20">
                <span>👥</span> <span>Daftar User</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 overflow-y-auto p-12">
        <header class="mb-12">
            <h1 class="text-3xl font-black uppercase italic tracking-tighter">Daftar <span class="text-purple-500">Astronout Member</span></h1>
            <p class="text-[10px] text-gray-500 uppercase tracking-[0.3em] font-bold mt-1">Pusat Kendali AstroStore</p>
        </header>

        <div class="glass-card rounded-[2.5rem] overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-white/[0.02] text-[10px] uppercase font-black text-gray-500 tracking-widest border-b border-white/5">
                    <tr>
                        <th class="p-6">Nama Astronout</th>
                        <th class="p-6">Alamat Email</th>
                        <th class="p-6">Role</th>
                        <th class="p-6 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5 text-sm">
                    @foreach($users as $user)
                    <tr class="hover:bg-white/[0.01] transition">
                        <td class="p-6 font-bold uppercase text-xs tracking-tight">{{ $user->name }}</td>
                        <td class="p-6 text-gray-400 font-mono text-xs">{{ $user->email }}</td>
                        <td class="p-6">
                            <span class="text-[10px] font-bold text-purple-400 uppercase tracking-widest">Super Admin</span>
                        </td>
                        <td class="p-6 text-center">
                            <span class="status-active px-3 py-1 rounded-full text-[9px] font-black uppercase">Active</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>