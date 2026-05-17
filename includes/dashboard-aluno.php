<?php
session_start();

// Simulação de dados do aluno
$_SESSION['usuario'] = [
    'nome' => 'Maria Silva',
    'tipo' => 'aluno'
];

$aluno = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Aluno | PeerLearn</title>
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
                <h3 class="text-xl font-bold text-gray-800"><?php echo $aluno['nome']; ?></h3>
                <p class="text-gray-500 text-sm">Estudante</p>
            </div>
            <nav class="space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-indigo-600 bg-indigo-50 rounded-xl font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Início
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Agendamentos
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    Favoritos
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    Mensagens
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow">
            <!-- Action Buttons -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <a href="buscar-tutores.php" class="bg-gradient-to-br from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white rounded-2xl shadow-lg p-6 text-center transition transform hover:scale-105">
                    <div class="text-4xl mb-2">🔍</div>
                    <div class="font-bold text-lg">BUSCAR TUTORES</div>
                </a>
                <a href="#" class="bg-white hover:bg-gray-50 border-2 border-indigo-200 text-indigo-700 rounded-2xl shadow-sm p-6 text-center transition transform hover:scale-105">
                    <div class="text-4xl mb-2">📅</div>
                    <div class="font-bold text-lg">Agendamentos</div>
                </a>
                <a href="#" class="bg-gradient-to-br from-orange-400 to-red-500 hover:from-orange-500 hover:to-red-600 text-white rounded-2xl shadow-lg p-6 text-center transition transform hover:scale-105">
                    <div class="text-4xl mb-2">🆘</div>
                    <div class="font-bold text-lg">SOS PROVA</div>
                </a>
            </div>

            <!-- Próximas Aulas -->
            <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Próximas aulas</h2>
                <div class="border-2 border-dashed border-gray-300 rounded-xl p-12 text-center">
                    <p class="text-gray-500">Você não tem aulas agendadas</p>
                    <a href="buscar-tutores.php" class="inline-block mt-4 text-indigo-600 font-medium hover:underline">Encontrar tutores disponíveis</a>
                </div>
            </div>

            <!-- Tutores em Destaque -->
            <div>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Tutores em destaque</h2>
                    <button class="text-indigo-600 font-medium hover:underline">Mais relevantes</button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php for($i = 1; $i <= 4; $i++): ?>
                    <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition">
                        <div class="h-32 bg-gradient-to-br from-indigo-400 to-purple-500"></div>
                        <div class="p-4">
                            <div class="w-16 h-16 bg-gray-200 rounded-full -mt-12 mb-3 border-4 border-white"></div>
                            <h3 class="font-bold text-gray-800">Tutor <?php echo $i; ?></h3>
                            <p class="text-sm text-gray-600">Matemática</p>
                            <div class="flex items-center mt-2 text-yellow-500 text-sm">
                                <span>⭐⭐⭐⭐⭐</span>
                                <span class="text-gray-600 ml-1">(5.0)</span>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
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