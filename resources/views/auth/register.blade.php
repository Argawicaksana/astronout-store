<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Astronout Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { 
            background: url("{{ asset('img/bg-astronout.jpg') }}") no-repeat center center fixed;
            background-size: cover; display: flex; align-items: center; justify-content: center; min-height: 100vh;
        }
        .card { background: rgba(15, 23, 42, 0.9); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.1); padding: 40px; border-radius: 24px; width: 100%; max-width: 400px; color: white; }
        input { background: rgba(0,0,0,0.5) !important; border: 1px solid rgba(255,255,255,0.1) !important; color: white !important; width: 100%; padding: 12px; border-radius: 12px; outline: none; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="card shadow-2xl">
        <h1 class="text-2xl font-black italic text-blue-500 uppercase text-center mb-6">DAFTAR AKUN</h1>

        <form action="/register" method="POST" class="space-y-4">
            @csrf <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase">Nama Lengkap</label>
                <input type="text" name="name" required placeholder="Nama Anda">
            </div>
            
            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase">Alamat Email</label>
                <input type="email" name="email" required placeholder="email@gmail.com">
            </div>
            
            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase">Password</label>
                <input type="password" name="password" required placeholder="******">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 py-3 rounded-xl font-black uppercase text-xs mt-4 transition shadow-lg">
                DAFTAR SEKARANG
            </button>
        </form>
    </div>
</body>
</html>