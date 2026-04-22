<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Transaksi | Admin Astronout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; }
        .sidebar { background: rgba(22, 15, 41, 0.95); backdrop-filter: blur(20px); border-right: 1px solid rgba(255, 255, 255, 0.05); }
        .glass-card { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.05); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
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
                <a href="/admin/games" class="flex items-center space-x-3 text-gray-400 hover:text-white px-4 py-3 rounded-2xl transition text-sm">
                    <span>🎮</span> <span>Kelola Game</span>
                </a>
                <a href="/admin/transactions" class="flex items-center space-x-3 bg-purple-600 text-white px-4 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-purple-600/20">
                    <span>💸</span> <span>Riwayat Pesanan</span>
                </a>
            </nav>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto p-8 no-scrollbar">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-2xl font-black uppercase italic">Riwayat <span class="text-purple-500">Transaksi</span></h1>
                <p class="text-[10px] text-gray-500 uppercase tracking-widest mt-1">Pantau semua pesanan astronout yang masuk</p>
            </div>
            <div class="flex space-x-2">
                <button class="bg-white/5 border border-white/10 px-4 py-2 rounded-xl text-[10px] font-bold uppercase hover:bg-white/10">Download Report</button>
            </div>
        </header>

        <div class="glass-card rounded-[2.5rem] overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-white/[0.02] text-[10px] uppercase font-black text-gray-500 tracking-widest">
                    <tr>
                        <th class="p-6">Invoice</th>
                        <th class="p-6">Detail Pelanggan</th>
                        <th class="p-6">Item/Layanan</th>
                        <th class="p-6">Metode</th>
                        <th class="p-6">Harga</th>
                        <th class="p-6">Status</th>
                        <th class="p-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5 text-sm">
                    @forelse($transactions as $trx)
                    <tr class="hover:bg-white/[0.01] transition">
                        <td class="p-6">
                            <span class="font-mono text-purple-400 font-bold uppercase tracking-tighter">#{{ $trx->invoice_id }}</span>
                            <p class="text-[9px] text-gray-600 mt-1">{{ $trx->created_at->format('d M, H:i') }}</p>
                        </td>
                        <td class="p-6">
                            <p class="font-bold text-gray-200">{{ $trx->user_id_game }}</p>
                            <p class="text-[10px] text-gray-500 uppercase font-black">{{ $trx->game_name }}</p>
                        </td>
                        <td class="p-6">
                            <span class="text-xs">{{ $trx->item_name }}</span>
                        </td>
                        <td class="p-6 uppercase text-[10px] font-bold">{{ $trx->payment_method }}</td>
                        <td class="p-6 font-black">Rp {{ number_format($trx->price, 0, ',', '.') }}</td>
                        <td class="p-6">
                            <span class="px-3 py-1 rounded-full text-[9px] font-black uppercase {{ $trx->status == 'success' ? 'bg-green-500/10 text-green-500 border border-green-500/20' : 'bg-yellow-500/10 text-yellow-500 border border-yellow-500/20' }}">
                                {{ $trx->status }}
                            </span>
                        </td>
                        <td class="p-6 text-center">
                            <button class="bg-purple-600/20 hover:bg-purple-600 text-purple-400 hover:text-white p-2 rounded-lg transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="p-20 text-center text-gray-600 italic uppercase text-xs">Belum ada aktivitas transaksi terdeteksi di galaksi ini.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
            <div class="p-6 bg-white/[0.01] border-t border-white/5">
                {{ $transactions->links() }}
            </div>
        </div>
    </main>
</body>
</html>