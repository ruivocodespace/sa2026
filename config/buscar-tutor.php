<?php
session_start();

// Simulação de tutores disponíveis
$tutores = [
    ['nome' => 'Ana Carolina', 'materia' => 'Matemática', 'avaliacao' => 5.0],
    ['nome' => 'Pedro Henrique', 'materia' => 'Física', 'avaliacao' => 4.9],
    ['nome' => 'Julia Santos', 'materia' => 'Química', 'avaliacao' => 5.0],
    ['nome' => 'Lucas Oliveira', 'materia' => 'Programação', 'avaliacao' => 4.8],
];

$categorias = ['Tudo', 'Exatas', 'Humanas', 'Biológicas', 'Idiomas', 'Tecnologia'];
$categoria_ativa = isset($_GET['categoria']) ? $_GET['categoria'] : 'Tudo';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Tutores | PeerLearn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-2xl font-bold text-indigo-600">
                    LOGO provisório
                </div>
                <nav class="flex gap-6 text-gray-600">
                    <a href="#" class="hover:text-indigo-600 transition font-medium">Encontrar tutores</a>
                    <a href="#" class="hover:text-indigo-600 transition">Como Funciona</a>
                    <a href="#" class="hover:text-indigo-600 transition">Seja um tutor</a>
                </nav>
                <div class="flex gap-3">
                    <a href="index.php" class="border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 px-6 py-2 rounded-lg font-medium transition">
                        Cadastrar
                    </a>
                    <a href="index.php" class="bg-indigo-600 text-white hover:bg-indigo-700 px-6 py-2 rounded-lg font-medium transition">
                        Entrar
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Conecte-se com os melhores tutores universitários
            </h1>
            <p class="text-xl text-indigo-100 mb-8">
                Aprenda no seu ritmo com tutores especializados que entendem suas necessidades
            </p>
            
            <!-- Search Bar -->
            <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-2xl p-2">
                <div class="flex items-center gap-3 px-4">
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" 
                           placeholder="Pesquisar matérias" 
                           class="w-full py-4 px-2 text-gray-700 outline-none text-lg"
                           value="<?php echo isset($_GET['busca']) ? htmlspecialchars($_GET['busca']) : ''; ?>">
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-semibold transition">
                        Buscar
                    </button>
                </div>
            </div>

            <!-- Category Filters -->
            <div class="flex flex-wrap justify-center gap-3 mt-6">
                <?php foreach($categorias as $cat): ?>
                <a href="?categoria=<?php echo urlencode($cat); ?>" 
                   class="px-6 py-2 rounded-full font-medium transition <?php echo $categoria_ativa === $cat ? 'bg-white text-indigo-600' : 'bg-indigo-500 text-white hover:bg-indigo-400'; ?>">
                    <?php echo $cat; ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Tutores disponíveis</h2>
            <select class="border border-gray-300 rounded-lg px-4 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option>Mais relevantes</option>
                <option>Melhor avaliados</option>
                <option>Menor preço</option>
            </select>
        </div>

        <!-- Tutors Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach($tutores as $tutor): ?>
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="h-48 bg-gradient-to-br from-indigo-400 to-purple-500 group-hover:from-indigo-500 group-hover:to-purple-600 transition"></div>
                <div class="p-6">
                    <div class="w-20 h-20 bg-white rounded-full -mt-16 mb-4 border-4 border-white shadow-lg flex items-center justify-center text-3xl">
                        👨🎓
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1"><?php echo $tutor['nome']; ?></h3>
                    <p class="text-indigo-600 font-medium mb-3"><?php echo $tutor['materia']; ?></p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <span class="text-lg">⭐</span>
                            <span class="ml-1 font-semibold text-gray-700"><?php echo $tutor['avaliacao']; ?></span>
                        </div>
                        <button class="bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-lg font-medium transition">
                            Ver perfil
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Load More -->
        <div class="text-center mt-12">
            <button class="border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 px-8 py-3 rounded-xl font-semibold transition">
                Carregar mais tutores
            </button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-white border-t border-gray-200 py-8 mt-12">
        <div class="container mx-auto px-4 text-center text-gray-600">
            <p>&copy; 2026 PeerLearn. Todos os direitos reservados.</p>
            <p class="text-sm mt-2">FOOTER</p>
        </div>
    </footer>

</body>
</html>