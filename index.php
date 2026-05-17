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

    <!-- ============ HEADER ============ -->
    <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                
                <!-- Logo -->
                <div class="text-2xl font-bold text-indigo-600">
                    LOGO provisório
                </div>

                <!-- Navegação Central -->
                <nav class="flex gap-6 text-gray-600 text-sm md:text-base">
                    <a href="#" class="hover:text-indigo-600 transition font-medium border-b-2 border-indigo-600 pb-1">
                        Encontrar tutores
                    </a>
                    <a href="#" class="hover:text-indigo-600 transition">
                        Como Funciona
                    </a>
                    <a href="#" class="hover:text-indigo-600 transition">
                        Seja um tutor
                    </a>
                </nav>

                <!-- Botões de Ação -->
                <div class="flex gap-3">
                    <a href="#" class="border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 px-6 py-2 rounded-lg font-medium transition text-sm md:text-base">
                        Cadastrar
                    </a>
                    <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 px-6 py-2 rounded-lg font-medium transition text-sm md:text-base">
                        Entrar
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ============ HERO / BUSCA ============ -->
    <section class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white py-16 md:py-24">
        <div class="container mx-auto px-4 text-center">
            
            <!-- Texto Principal -->
            <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">
                Conecte-se com os melhores tutores universitários
            </h1>
            <p class="text-lg md:text-xl text-indigo-100 mb-10 max-w-2xl mx-auto">
                Aprenda no seu ritmo com tutores especializados que entendem suas necessidades
            </p>

            <!-- Barra de Busca -->
            <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-2xl p-2 mb-8">
                <div class="flex items-center gap-3 px-4">
                    <!-- Ícone de Lupa -->
                    <svg class="w-6 h-6 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    
                    <!-- Input de Busca -->
                    <input type="text" 
                           placeholder="Pesquisar matérias" 
                           class="w-full py-4 px-2 text-gray-700 outline-none text-lg bg-transparent">
                    
                    <!-- Botão Buscar (opcional, pode ser implícito) -->
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-semibold transition hidden md:block">
                        Buscar
                    </button>
                </div>
            </div>

            <!-- Filtros de Categoria -->
            <div class="flex flex-wrap justify-center gap-3">
                <button class="bg-white text-indigo-600 px-6 py-2 rounded-full font-medium hover:bg-indigo-50 transition shadow-sm">
                    Tudo
                </button>
                <button class="bg-indigo-500 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-400 transition">
                    Exatas
                </button>
                <button class="bg-indigo-500 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-400 transition">
                    Humanas
                </button>
                <button class="bg-indigo-500 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-400 transition">
                    Biológicas
                </button>
                <button class="bg-indigo-500 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-400 transition">
                    Idiomas
                </button>
                <button class="bg-indigo-500 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-400 transition">
                    Tecnologia
                </button>
            </div>
        </div>
    </section>

    <!-- ============ TUTORES DISPONÍVEIS ============ -->
    <main class="container mx-auto px-4 py-12 md:py-16">
        
        <!-- Título e Filtro -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <h2 class="text-3xl font-bold text-gray-800">
                Tutores disponíveis
            </h2>
            <button class="text-indigo-600 font-semibold hover:text-indigo-700 hover:underline transition flex items-center gap-2">
                Mais relevantes
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        </div>

        <!-- Grid de Tutores (4 cards conforme wireframe) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Card Tutor 1 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-indigo-500 group-hover:from-blue-500 group-hover:to-indigo-600 transition"></div>
                <div class="p-6">
                    <div class="w-20 h-20 bg-white rounded-full -mt-16 mb-4 border-4 border-white shadow-lg flex items-center justify-center text-3xl">
                        👩🏽🎓
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Ana Carolina</h3>
                    <p class="text-indigo-600 font-medium mb-3">Matemática</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <span class="text-lg">⭐</span>
                            <span class="ml-1 font-semibold text-gray-700">5.0</span>
                        </div>
                        <button class="bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-lg font-medium transition text-sm">
                            Ver perfil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Tutor 2 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="h-48 bg-gradient-to-br from-green-400 to-teal-500 group-hover:from-green-500 group-hover:to-teal-600 transition"></div>
                <div class="p-6">
                    <div class="w-20 h-20 bg-white rounded-full -mt-16 mb-4 border-4 border-white shadow-lg flex items-center justify-center text-3xl">
                        👨‍🎓
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Pedro Henrique</h3>
                    <p class="text-indigo-600 font-medium mb-3">Física</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <span class="text-lg">⭐</span>
                            <span class="ml-1 font-semibold text-gray-700">4.9</span>
                        </div>
                        <button class="bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-lg font-medium transition text-sm">
                            Ver perfil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Tutor 3 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="h-48 bg-gradient-to-br from-pink-400 to-rose-500 group-hover:from-pink-500 group-hover:to-rose-600 transition"></div>
                <div class="p-6">
                    <div class="w-20 h-20 bg-white rounded-full -mt-16 mb-4 border-4 border-white shadow-lg flex items-center justify-center text-3xl">
                        👩🏼‍🎓
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Julia Santos</h3>
                    <p class="text-indigo-600 font-medium mb-3">Química</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <span class="text-lg">⭐</span>
                            <span class="ml-1 font-semibold text-gray-700">5.0</span>
                        </div>
                        <button class="bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-lg font-medium transition text-sm">
                            Ver perfil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Tutor 4 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-violet-500 group-hover:from-purple-500 group-hover:to-violet-600 transition"></div>
                <div class="p-6">
                    <div class="w-20 h-20 bg-white rounded-full -mt-16 mb-4 border-4 border-white shadow-lg flex items-center justify-center text-3xl">
                        👨‍🎓
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Lucas Oliveira</h3>
                    <p class="text-indigo-600 font-medium mb-3">Programação</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <span class="text-lg">⭐</span>
                            <span class="ml-1 font-semibold text-gray-700">4.8</span>
                        </div>
                        <button class="bg-indigo-100 hover:bg-indigo-200 text-indigo-700 px-4 py-2 rounded-lg font-medium transition text-sm">
                            Ver perfil
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Botão Carregar Mais (opcional) -->
        <div class="text-center mt-12">
            <button class="border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 px-8 py-3 rounded-xl font-semibold transition">
                Carregar mais tutores
            </button>
        </div>

    </main>

    <!-- ============ FOOTER ============ -->
    <footer class="w-full bg-white border-t border-gray-200 py-8">
        <div class="container mx-auto px-4 text-center text-gray-600">
            <p class="text-lg font-semibold mb-2">FOOTER</p>
            <p class="text-sm">&copy; 2026 PeerLearn. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>