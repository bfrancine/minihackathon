<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado de Conexión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fefae0] text-gray-800 flex items-center justify-center min-h-screen flex-col font-serif">
    <div class="bg-[#fdf6e3] border border-[#d6ba91] p-10 rounded-xl shadow-md text-center max-w-lg mx-auto">
        <h1 class="text-3xl font-bold mb-4 {{ $success ? 'text-green-700' : 'text-red-700' }}">
            {{ $success ? '¡Conexión Exitosa!' : 'Error de Conexión' }}
        </h1>

        <p class="text-lg mb-3">{!! $message !!}</p>
        <p class="text-md text-[#5f564b] font-medium">Francine Barquero Arias</p>

        <div class="mt-6 text-base text-[#6b5e4e] italic">
            <p>Minihackathon realizado.</p>
        </div>
    </div>

    <footer class="mt-10 text-sm text-[#8a7c65]">
        &copy; {{ date('Y') }} Francine Barquero Arias
    </footer>
</body>
</html>
