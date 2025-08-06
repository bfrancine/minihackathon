<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laravel - Estado de la Base de Datos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f8f4e3] text-gray-800 flex items-center justify-center h-screen font-serif">
    <div class="bg-[#fff8dc] border border-[#c3b091] p-10 rounded-lg shadow-lg text-center max-w-md mx-auto">
        <h1 class="text-3xl font-bold mb-4 {{ $success ? 'text-green-700' : 'text-red-700' }}">
            {{ $success ? '¡Conexión Exitosa!' : 'Error de Conexión' }}
        </h1>

        <p class="text-md leading-relaxed">{!! $message !!}</p>

        <div class="mt-6 text-sm text-[#7b6e57]">
            <p>Verificación desde Laravel Render App</p>
            <p class="mt-1">Vista: <code>welcome.blade.php</code></p>
        </div>
    </div>
</body>
</html>
