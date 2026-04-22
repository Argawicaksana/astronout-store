<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga - Astronout Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b061f; color: white; }
        .glass { background: rgba(22, 15, 41, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); }
    </style>
</head>
<body class="py-20">
    <div class="container mx-auto px-4">
        <div class="flex items-center space-x-3 mb-10">
            <div class="w-1.5 h-7 bg-cyan-500 rounded-full shadow-[0_0_15px_rgba(6,182,212,1)]"></div>
            <h2 class="text-2xl font-black italic uppercase tracking-tight">Daftar <span class="text-cyan-400">Harga</span></h2>
        </div>

        <div class="glass overflow-hidden rounded-[2.5rem]">
            <table class="w-full text-left border-collapse">
                <thead class="bg-white/5">
                    <tr>
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest text-gray-400">Layanan</th>
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest text-gray-400">Harga</th>
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest text-gray-400">Status</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <tr class="border-b border-white/5 hover:bg-white/5 transition">
                        <td class="px-8 py-6 font-bold uppercase tracking-tight italic">86 Diamonds Mobile Legends</td>
                        <td class="px-8 py-6 text-cyan-400 font-black italic">Rp 19.500</td>
                        <td class="px-8 py-6"><span class="bg-green-500/20 text-green-500 text-[9px] font-bold px-3 py-1 rounded-full uppercase">Tersedia</span></td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</body>
</html>