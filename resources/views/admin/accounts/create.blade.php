<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun PB - Admin Astronout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0b061f] text-white font-sans">

    <div class="container mx-auto px-4 py-10">
        <div class="max-w-2xl mx-auto bg-[#160f29] rounded-[2rem] p-8 border border-white/5 shadow-2xl">
            
            <div class="flex items-center space-x-3 mb-8">
                <div class="w-1.5 h-6 bg-cyan-500 rounded-full shadow-[0_0_10px_rgba(6,182,212,0.8)]"></div>
                <h2 class="text-xl font-black uppercase italic tracking-tight">Input Akun <span class="text-cyan-400">Baru</span></h2>
            </div>

            <form action="{{ route('admin.accounts.store') }}" method="POST">
                @csrf
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2">Nama Akun (Pangkat)</label>
                        <input type="text" name="title" placeholder="Contoh: Bintang 1 Full Title" required
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-cyan-500 transition">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2">Ikon Pangkat (Nama File)</label>
                        <select name="rank_icon" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-cyan-500 transition appearance-none">
                            <option value="bintang.jpeg" class="bg-[#0b061f]">bintang.jpeg</option>
                            <option value="major.jpg" class="bg-[#0b061f]">major.jpg</option>
                            <option value="hero-major.png" class="bg-[#0b061f]">hero-major.png</option>
                        </select>
                        <p class="text-[9px] text-gray-500 mt-2">*Pastikan file gambar sudah ada di folder public/img/pb/</p>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2">Harga (Rupiah)</label>
                        <input type="number" name="price" placeholder="Contoh: 50000" required
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-cyan-500 transition">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-widest text-gray-400 mb-2">Deskripsi Inventory</label>
                        <textarea name="description" rows="3" placeholder="Contoh: Full Title, Senjata Rame, Durasi 30 Hari..." required
                                  class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-cyan-500 transition"></textarea>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-widest text-cyan-400 mb-2">Data Login (Rahasia)</label>
                        <input type="text" name="account_data" placeholder="Format: username:password" required
                               class="w-full bg-cyan-500/5 border border-cyan-500/20 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-cyan-500 transition">
                        <p class="text-[9px] text-gray-500 mt-2">*Data ini hanya akan dikirim ke pembeli setelah lunas.</