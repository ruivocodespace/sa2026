<?php
session_start();

// Simulação de dados do tutor
$_SESSION['usuario'] = [
    'nome' => 'Professor João',
    'tipo' => 'tutor',
    'aulas_agendadas' => 0,
    'aulas_dadas' => 0,
    'avaliacao' => 5.0
];

$tutor = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Tutor | PeerLearn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-indigo-600">
                LOGO provisório
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Ajuda</a>
                <button class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-lg font-medium hover:bg-indigo-200 transition">
                    Minha conta
                </button>
                <a href="index.php" class="text-gray-600 hover:text-red-600 transition">Logout</a>
            </div>
        </div>
    </header>

    <div class="container mx-auto px-4 py-8 flex gap-6">
        <!-- Sidebar -->
        <aside class="w-64 bg-white rounded-2xl shadow-sm p-6 h-fit">
            <div class="mb-8">
                <h3 class="text-xl font-bold text-gray-800"><?php echo $tutor['nome']; ?></h3>
                <p class="text-gray-500 text-sm">Tutor</p>
            </div>
            <nav class="space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-indigo-600 bg-indigo-50 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Início
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    Mensagens
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-blue-500">
                    <div class="text-3xl font-bold text-gray-800"><?php echo $tutor['aulas_agendadas']; ?></div>
                    <div class="text-gray-600">Aulas agendadas</div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-green-500">
                    <div class="text-3xl font-bold text-gray-800"><?php echo $tutor['aulas_dadas']; ?></div>
                    <div class="text-gray-600">Aulas dadas</div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-yellow-500">
                    <div class="text-3xl font-bold text-gray-800"><?php echo $tutor['avaliacao']; ?></div>
                    <div class="text-gray-600">Avaliação</div>
                </div>
            </div>

            <!-- Próximas Aulas -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Próximas aulas</h2>
                <div class="border-2 border-dashed border-gray-300 rounded-xl p-12 text-center">
                    <p class="text-gray-500">Nenhuma aula agendada no momento</p>
                    <button class="mt-4 text-indigo-600 font-medium hover:underline">Ver disponibilidade</button>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="w-full bg-white border-t border-gray-200 py-8 mt-12">
        <div class="container mx-auto px-4 text-center text-gray-600">
            <p>&copy; 2026 PeerLearn. Todos os direitos reservados.</p>
            <p class="text-sm mt-2">FOOTER</p>
        </div>
    </footer>

</body>
</html>