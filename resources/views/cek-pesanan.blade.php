<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Transaksi - Astronout Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; }
        .glass { background: rgba(22, 15, 41, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); }
    </style>
</head>
<body class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <div class="flex items-center space-x-3 mb-10">
                <div class="w-1.5 h-7 bg-purple-600 rounded-full shadow-[0_0_15px_rgba(147,51,234,1)]"></div>
                <h2 class="text-2xl font-black italic uppercase tracking-tight">Cek <span class="text-purple-500">Transaksi</span></h2>
            </div>

            <div class="glass p-8 rounded-[2.5rem] shadow-2xl">
                <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                    Pesanan kamu tidak kunjung masuk? Masukkan **ID Transaksi** kamu di bawah ini untuk melihat status pesanan secara real-time.
                </p>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-purple-400 mb-3">ID Transaksi (Contoh: ASTRO-12345)</label>
                        <input type="text" placeholder="Ketik nomor invoice..." 
                               class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-sm focus:outline-none focus:border-purple-500 transition">
                    </div>
                    
                    <button class="w-full bg-purple-600 hover:bg-purple-500 py-4 rounded-2xl font-black uppercase text-xs tracking-[0.2em] transition shadow-lg shadow-purple-500/20">
                        Cari Pesanan Saya
                    </button>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <a href="/" class="text-[10px] font-bold text-gray-500 hover:text-white uppercase tracking-widest transition">← Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</body>
</html>