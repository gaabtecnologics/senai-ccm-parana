<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($site['description']) ?>">
    <meta name="theme-color" content="#173d96">
    <meta property="og:title" content="<?= e($site['name']) ?>">
    <meta property="og:description" content="<?= e($site['description']) ?>">
    <meta property="og:type" content="website">
    <title><?= e($site['name']) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a class="skip-link" href="#conteudo">Pular para o conteúdo</a>

    <header class="site-header" data-header>
        <div class="container header-inner">
            <a class="brand" href="#inicio" aria-label="Ir para o início">
                <img src="<?= e($images['senai_logo']) ?>" alt="SENAI">
                <span class="brand-divider" aria-hidden="true"></span>
                <img class="brand-ccm" src="<?= e($images['ccm_logo']) ?>" alt="Colégios Cívico-Militares do Paraná">
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="menu-principal">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span class="sr-only">Abrir menu</span>
            </button>

            <nav id="menu-principal" class="main-nav" aria-label="Navegação principal">
                <a href="#beneficios">Benefícios</a>
                <a href="#cursos">Cursos</a>
                <a href="#umuarama">Umuarama</a>
                <a href="#instalacoes">Instalações</a>
            </nav>
        </div>
    </header>
