<?php
session_start();

// Verifica se já está logado
if(isset($_SESSION['usuario'])) {
    if($_SESSION['tipo'] === 'tutor') {
        header('Location: dashboard-tutor.php');
    } else {
        header('Location: dashboard-aluno.php');
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeerLearn - Conexão que Transforma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="w-full p-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-indigo-600">
            LOGO provisório
        </div>
        <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Ajuda</a>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center px-4 py-12">
        <div class="max-w-2xl w-full bg-white rounded-3xl shadow-xl p-12 text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                Aprenda e Ensine com Quem Entende Você
            </h1>
            <p class="text-gray-600 text-lg mb-8">
                Conecte-se com tutores universitários e aprenda no seu ritmo com quem já passou pelo que você está vivendo.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button onclick="window.location.href='dashboard-tutor.php'" 
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-4 px-8 rounded-xl transition duration-300 transform hover:scale-105 shadow-lg">
                    LOGAR COMO TUTOR
                </button>
                <button onclick="window.location.href='dashboard-aluno.php'" 
                        class="bg-white border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 font-semibold py-4 px-8 rounded-xl transition duration-300 transform hover:scale-105">
                    LOGAR COMO ALUNO
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-white border-t border-gray-200 py-8 mt-auto">
        <div class="container mx-auto px-4 text-center text-gray-600">
            <p>&copy; 2026 PeerLearn. Todos os direitos reservados.</p>
            <p class="text-sm mt-2">FOOTER</p>
        </div>
    </footer>

</body>
</html>