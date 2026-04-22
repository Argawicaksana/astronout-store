<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronout Store | Top Up Game Tercepat</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: url("{{ asset('img/bg-astronout.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            background-color: #0b061f;
            color: white; 
            overflow-x: hidden;
        }
        .glass-nav {
            background: rgba(11, 6, 31, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .swiper { width: 100%; height: auto; border-radius: 1.5rem; overflow: hidden; }
        .swiper-slide img { width: 100%; height: auto; display: block; object-fit: contain; }
        .swiper-pagination-bullet { background: #9333ea !important; }

        .game-card {
            background: rgba(22, 15, 41, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }
        .game-card:hover { 
            border-color: #9333ea; 
            transform: translateY(-5px); 
            box-shadow: 0 10px 25px rgba(147, 51, 234, 0.3); 
        }
        .no-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>
<body x-data="{ openSearch: false }" 
      class="antialiased pb-20" 
      @keydown.escape="openSearch = false" 
      @keydown.ctrl.k.prevent="openSearch = true">

    <nav class="glass-nav sticky top-0 z-50">
        <div class="container mx-auto px-4 flex justify-between items-center h-20">
            
            <div class="flex items-center space-x-10">
                <a href="/">
                    <img src="{{ asset('img/logo-pixel.png') }}" class="h-12 w-auto drop-shadow-[0_0_10px_rgba(147,51,234,0.5)]">
                </a>
                <div class="hidden lg:flex items-center space-x-6 text-[13px] font-bold text-gray-300">
                    <a href="/" class="hover:text-purple-400 transition">Beranda</a>
                    <a href="/periksa-pesanan" class="hover:text-purple-400 transition">Cek Transaksi</a>
                    <a href="/layanan" class="hover:text-purple-400 transition">Daftar Harga</a>
                </div>
            </div>

            <div class="flex-1 max-w-md mx-10 hidden md:block">
                <div @click="openSearch = true" class="bg-white/5 border border-white/10 rounded-full px-5 py-2.5 flex justify-between items-center cursor-pointer hover:border-purple-500/50 transition group">
                    <div class="flex items-center space-x-3 text-gray-400">
                        <svg class="w-4 h-4 group-hover:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="text-xs">Cari game favoritmu...</span>
                    </div>
                    <kbd class="bg-white/10 px-2 py-0.5 rounded text-[10px] text-gray-500 font-mono">CTRL K</kbd>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    <span class="text-xs font-bold text-purple-400">👤 {{ Auth::user()->name }}</span>
                @else
                    <a href="/login" class="text-sm font-bold text-gray-300">Masuk</a>
                    <a href="/register" class="bg-purple-600 px-6 py-2.5 rounded-xl text-sm font-bold shadow-lg shadow-purple-500/20 hover:bg-purple-500 transition">Daftar</a>
                @endauth
            </div>
        </div>
    </nav>

    <div x-show="openSearch" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="fixed inset-0 z-[100] flex items-start justify-center pt-20 px-4 bg-black/80 backdrop-blur-sm"
         style="display: none;">
        
        <div @click.away="openSearch = false" class="bg-[#160f29] w-full max-w-2xl rounded-3xl border border-white/10 shadow-2xl overflow-hidden">
            <div class="p-6 border-b border-white/5">
                <div class="flex items-center bg-white/5 rounded-2xl px-5 py-4 border border-purple-500/30">
                    <input type="text" placeholder="Cari game atau layanan..." class="bg-transparent border-none focus:ring-0 w-full text-white placeholder-gray-500 text-sm">
                    <kbd class="text-[10px] text-gray-500 bg-white/5 px-2 py-1 rounded-lg">ESC</kbd>
                </div>
            </div>
            <div class="p-8">
                <h4 class="text-[10px] font-black uppercase tracking-widest text-purple-400 mb-6">Pencarian Populer</h4>
                <div class="grid grid-cols-4 gap-6">
                    @foreach($categories->take(8) as $game)
                    <a href="/order/{{ $game->slug }}" class="flex flex-col items-center group">
                        <div class="w-14 h-14 rounded-2xl overflow-hidden mb-2 bg-slate-900 border border-white/5 group-hover:border-purple-500 transition">
                            <img src="{{ asset('img/logo-game/' . $game->thumbnail) }}" class="w-full h-full object-cover">
                        </div>
                        <span class="text-[10px] font-bold text-gray-400 text-center">{{ $game->name }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <header class="container mx-auto px-4 py-6">
        <div class="swiper mySwiper shadow-2xl bg-slate-900">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('img/astronoutbarner.jpg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('img/barnerastro.jpg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('img/instagramastro.jpg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('img/qrisastro.jpg') }}"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </header>

    <div class="container mx-auto px-4 mb-8">
        <div class="grid grid-cols-4 gap-3 md:gap-5">
            <div class="game-card py-5 rounded-2xl flex flex-col items-center bg-purple-600/20 border-purple-500/50">
                <span class="text-3xl mb-1">🎮</span>
                <span class="text-[10px] font-black uppercase text-purple-200">Game</span>
            </div>
            <div class="game-card py-5 rounded-2xl flex flex-col items-center opacity-60">
                <span class="text-3xl mb-1">🎟️</span>
                <span class="text-[10px] font-black uppercase">Voucher</span>
            </div>
            <div class="game-card py-5 rounded-2xl flex flex-col items-center opacity-60">
                <span class="text-3xl mb-1">📱</span>
                <span class="text-[10px] font-black uppercase">Pulsa</span>
            </div>
            <div class="game-card py-5 rounded-2xl flex flex-col items-center opacity-60">
                <span class="text-3xl mb-1">💡</span>
                <span class="text-[10px] font-black uppercase">PLN</span>
            </div>
        </div>
    </div>

    <main class="container mx-auto px-4">
        <div class="flex items-center space-x-3 mb-8">
            <div class="w-1.5 h-7 bg-purple-600 rounded-full shadow-[0_0_15px_rgba(147,51,234,1)]"></div>
            <h2 class="text-xl font-black italic uppercase tracking-tight">Game Favorit</h2>
        </div>

        <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5">
            @forelse($categories as $game)
            <a href="/order/{{ $game->slug }}" class="game-card rounded-3xl p-4 group block text-center">
                <div class="aspect-square rounded-2xl overflow-hidden mb-3 bg-slate-950 border border-white/5">
                    <img src="{{ asset('img/logo-game/' . $game->thumbnail) }}" 
                         onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($game->name) }}&background=1e293b&color=9333ea&size=200'"
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-[11px] font-black uppercase truncate tracking-tight text-gray-200">{{ $game->name }}</h3>
                <span class="text-[8px] text-purple-400 font-bold uppercase mt-1 inline-block">Proses Instan</span>
            </a>
            @empty
            <div class="col-span-full text-center py-10">
                <p class="text-gray-500 italic">Data game belum masuk. Silakan jalankan seeder.</p>
            </div>
            @endforelse
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper(".mySwiper", {
                loop: true,
                autoHeight: true,
                autoplay: { delay: 4000, disableOnInteraction: false },
                pagination: { el: ".swiper-pagination", clickable: true },
            });
        });
    </script>
</body><<footer style="
    background-color: #080415; 
    border-top: 1px solid rgba(255, 255, 255, 0.05); 
    padding: 80px 0 40px 0; 
    margin-top: 100px;
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    box-shadow: 0 -20px 50px rgba(0,0,0,0.5);
">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; margin-bottom: 60px;">
            
            <div>
                <h2 style="color: #3b82f6; font-weight: 800; font-size: 16px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Astronout Store</h2>
                <p style="color: #6b7280; font-size: 12px; line-height: 1.8; font-weight: 500;">
                    ASTRO Store adalah website top up game paling murah dan paling instan saat ini, terbukti semua murah dan proses paling instant !!
                </p>
            </div>

            <div>
                <h4 style="color: white; font-weight: 800; font-size: 11px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px;">Layanan</h4>
                <ul style="list-style: none; padding: 0; margin: 0; color: #6b7280; font-size: 12px; font-weight: 600;">
                    <li style="margin-bottom: 15px;"><a href="#" style="text-decoration: none; color: inherit;">Top-up Game</a></li>
                    <li style="margin-bottom: 15px;"><a href="#" style="text-decoration: none; color: inherit;">Pembayaran PPOB</a></li>
                    <li style="margin-bottom: 15px;"><a href="#" style="text-decoration: none; color: inherit;">Voucher Digital</a></li>
                    <li style="margin-bottom: 15px;"><a href="#" style="text-decoration: none; color: inherit;">Top-up E-wallet</a></li>
                </ul>
            </div>

            <div>
                <h4 style="color: white; font-weight: 800; font-size: 11px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px;">Informasi</h4>
                <ul style="list-style: none; padding: 0; margin: 0; color: #6b7280; font-size: 12px; font-weight: 600;">
                    <li style="margin-bottom: 15px;"><a href="#" style="text-decoration: none; color: inherit;">Tentang Kami</a></li>
                    <li style="margin-bottom: 15px;"><a href="#" style="text-decoration: none; color: inherit;">Syarat & Ketentuan</a></li>
                    <li style="margin-bottom: 15px;"><a href="#" style="text-decoration: none; color: inherit;">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <div style="text-align: right;">
                <h4 style="color: white; font-weight: 800; font-size: 11px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px;">Ikuti Kami</h4>
                <div style="display: inline-flex; width: 44px; height: 44px; background: rgba(255,255,255,0.05); border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); align-items: center; justify-content: center;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" style="width: 20px; height: 20px; opacity: 0.6;">
                </div>
            </div>
        </div>

        <div style="border-top: 1px solid rgba(255, 255, 255, 0.05); padding-top: 30px;">
            <p style="color: #4b5563; font-size: 9px; font-weight: 800; text-transform: uppercase; letter-spacing: 2.5px;">
                © 2026 ASTRONOUT STORE. ALL RIGHTS RESERVED.
            </p>
        </div>
    </div>
</footer>



<style>
    /* JANGAN DIUBAH - Ini untuk memaksa halaman tidak punya sisa padding di bawah */
    body { margin-bottom: 0 !important; padding-bottom: 0 !important; }
    html { background-color: #080415; } /* Menutup sisa pixel jika ada */
</style>