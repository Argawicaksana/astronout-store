<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up {{ $game->name }} - Astronout Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; }
        .glass-card { background: rgba(22, 15, 41, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .step-number { background: linear-gradient(135deg, #9333ea 0%, #4f46e5 100%); }
    </style>
</head>
<body class="py-10">

    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <div class="lg:col-span-4">
                <div class="glass-card p-6 rounded-[2.5rem] sticky top-10">
                    <img src="{{ asset('img/logo-game/' . $game->thumbnail) }}" class="w-full aspect-square object-cover rounded-3xl mb-6 shadow-2xl">
                    <h1 class="text-2xl font-black uppercase italic tracking-tight">{{ $game->name }}</h1>
                    <div class="h-1 w-20 bg-purple-600 my-4 rounded-full"></div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Top Up {{ $game->name }} di Astronout Store proses instan 24 jam. 
                        Cukup masukkan ID, pilih nominal, dan bayar. Diamonds akan masuk secara otomatis.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-8 space-y-6">
                
                <div class="glass-card p-8 rounded-[2.5rem]">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="step-number w-8 h-8 rounded-lg flex items-center justify-center font-black text-sm">1</div>
                        <h2 class="text-lg font-black uppercase italic">Masukkan Data Akun</h2>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="Masukkan User ID" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-sm focus:outline-none focus:border-purple-500 transition">
                        <input type="text" placeholder="Zone ID" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-sm focus:outline-none focus:border-purple-500 transition">
                    </div>
                    <p class="text-[10px] text-gray-500 mt-4 italic">*Untuk mengetahui User ID Anda, silakan klik profil di dalam game.</p>
                </div>

                <div class="glass-card p-8 rounded-[2.5rem]">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="step-number w-8 h-8 rounded-lg flex items-center justify-center font-black text-sm">2</div>
                        <h2 class="text-lg font-black uppercase italic">Pilih Nominal</h2>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <button class="bg-white/5 border border-white/10 p-4 rounded-2xl hover:border-purple-500 transition text-left group">
                            <p class="text-[10px] font-bold text-gray-400 group-hover:text-purple-400">86 Diamonds</p>
                            <p class="text-sm font-black mt-1">Rp 19.500</p>
                        </button>
                        <button class="bg-white/5 border border-white/10 p-4 rounded-2xl hover:border-purple-500 transition text-left group">
                            <p class="text-[10px] font-bold text-gray-400 group-hover:text-purple-400">172 Diamonds</p>
                            <p class="text-sm font-black mt-1">Rp 38.000</p>
                        </button>
                        <button class="bg-white/5 border border-white/10 p-4 rounded-2xl hover:border-purple-500 transition text-left group">
                            <p class="text-[10px] font-bold text-gray-400 group-hover:text-purple-400">257 Diamonds</p>
                            <p class="text-sm font-black mt-1">Rp 57.000</p>
                        </button>
                    </div>
                </div>

                <div class="glass-card p-8 rounded-[2.5rem]">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="step-number w-8 h-8 rounded-lg flex items-center justify-center font-black text-sm">3</div>
                        <h2 class="text-lg font-black uppercase italic">Metode Pembayaran</h2>
                    </div>
                    <div class="space-y-3">
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl flex justify-between items-center">
                            <span class="font-bold text-sm uppercase">QRIS (All Payment)</span>
                            <span class="text-[10px] bg-green-500/20 text-green-500 px-3 py-1 rounded-full font-black">OTOMATIS</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-4 rounded-2xl flex justify-between items-center opacity-50">
                            <span class="font-bold text-sm uppercase">Bank Transfer (BCA/Mandiri)</span>
                            <span class="text-[10px] bg-red-500/20 text-red-500 px-3 py-1 rounded-full font-black">OFFLINE</span>
                        </div>
                    </div>
                </div>

                <button class="w-full bg-purple-600 hover:bg-purple-500 py-5 rounded-[2rem] font-black uppercase text-sm tracking-[0.3em] transition shadow-2xl shadow-purple-600/30">
                    Beli Sekarang 🚀
                </button>

            </div>
        </div>
    </div>

</body>
</html>