<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Astronout Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #0b061f; color: white; font-family: sans-serif; }
        .glass { background: rgba(22, 15, 41, 0.8); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="glass p-10 rounded-[2.5rem] w-full max-w-md shadow-2xl">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-black italic uppercase">Astronout <span class="text-purple-500">Login</span></h1>
            <p class="text-[10px] text-gray-500 uppercase mt-2">Masuk ke ruang kendali</p>
        </div>

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/50 text-red-500 p-3 rounded-xl text-xs mb-5">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="text-[10px] font-bold uppercase text-gray-400 ml-2">Email</label>
                <input type="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-5 py-3 mt-1 focus:border-purple-500 outline-none transition text-sm">
            </div>
            <div>
                <label class="text-[10px] font-bold uppercase text-gray-400 ml-2">Password</label>
                <input type="password" name="password" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-5 py-3 mt-1 focus:border-purple-500 outline-none transition text-sm">
            </div>
            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-500 py-4 rounded-2xl font-black uppercase text-xs tracking-widest transition shadow-lg shadow-purple-600/20">
                Masuk Dashboard
            </button>
        </form>
    </div>
</body>
</html>